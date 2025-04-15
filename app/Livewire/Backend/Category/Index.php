<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'title';
    public $sortDirection = 'asc';
    public $categoryIdToDelete;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::query()
            ->when(
                $this->search,
                fn($q) =>
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('slug', 'like', '%' . $this->search . '%')
            )
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.backend.category.index', [
            'categories' => $categories,
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function confirmDelete($id)
    {
        $this->categoryIdToDelete = $id;
    }

    public function deleteCategory()
    {
        Category::findOrFail($this->categoryIdToDelete)->delete();
        $this->dispatch('alert', [
            'type' => 'success',
            'title' => 'Deleted!',
            'message' => 'Category deleted successfully!',
        ]);
        $this->reset('confirmingDelete', 'categoryIdToDelete');
    }
}
