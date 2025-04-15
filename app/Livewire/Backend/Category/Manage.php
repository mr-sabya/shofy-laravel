<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use WithFileUploads;

    public $categoryId;
    public $title, $slug, $image, $icon;
    public $newImage, $newIcon;

    public function mount($categoryId = null)
    {
        if ($categoryId) {
            $this->categoryId = $categoryId;
            $category = Category::findOrFail($categoryId);
            $this->title = $category->title;
            $this->slug = $category->slug;
            $this->image = $category->image;
            $this->icon = $category->icon;
        }
    }


    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . ($this->categoryId ?? '0'),
            'newImage' => 'nullable|image|max:2048',
            'newIcon' => 'nullable|image|max:2048',
        ]);

        $imagePath = $this->image;
        $iconPath = $this->icon;

        if ($this->newImage) {
            $imagePath = $this->newImage->store('categories', 'public');
        }

        if ($this->newIcon) {
            $iconPath = $this->newIcon->store('categories', 'public');
        }

        Category::updateOrCreate(
            ['id' => $this->categoryId],
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'image' => $imagePath,
                'icon' => $iconPath,
            ]
        );

        $this->dispatch('alert', [
            'type' => 'success',
            'title' => 'Success',
            'message' => $this->categoryId ? 'Category updated successfully!' : 'Category created successfully!',
        ]);

        return $this->redirect(route('admin.category.index'), navigate:true);
    }

    public function render()
    {
        return view('livewire.backend.category.manage');
    }
}
