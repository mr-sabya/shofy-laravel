<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title d-flex justify-content-between">
                        <h5>All Categories</h5>

                        <div class="d-flex gap-2">
                            <input wire:model.debounce.500ms="search" type="text" class="form-control"
                                placeholder="Search Categories...">

                            <a href="{{ route('admin.category.create') }}" wire:navigate class="btn btn-theme d-flex align-items-center">
                                <i data-feather="plus-square"></i> Add New
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive category-table mt-3">
                        <table class="table all-package theme-table">
                            <thead>
                                <tr>
                                    <th wire:click="sortBy('title')" style="cursor:pointer">
                                        Product Name
                                        @if($sortField === 'title')
                                        <i class="ri-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}-line"></i>
                                        @endif
                                    </th>
                                    <th>Date</th>
                                    <th>Product Image</th>
                                    <th>Icon</th>
                                    <th wire:click="sortBy('slug')" style="cursor:pointer">
                                        Slug
                                        @if($sortField === 'slug')
                                        <i class="ri-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}-line"></i>
                                        @endif
                                    </th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <div class="table-image">
                                            <img src="{{ url('storage/'. $category->image ?? 'assets/backend/images/no-image.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="category-icon">
                                            <img src="{{ url('storage/' . $category->icon ?? 'assets/backend/images/no-image.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <ul class="d-flex gap-2">
                                            <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                            <li><a href="{{ route('admin.category.edit', $category->id) }}" wire:navigate><i class="ri-pencil-line"></i></a></li>
                                            <li>
                                                <a href="javascript:void(0)" wire:click="confirmDelete({{ $category->id }})" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class="ri-delete-bin-line text-danger"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">No categories found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="mt-3">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade theme-modal remove-coupon" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center border-bottom p-3">
                    <h5 class="modal-title w-100">Are You Sure to Delete this data?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body p-5">
                    <h4 class="text-center">This action cannot be undone. Do you want to continue?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-animation btn-md fw-bold">No</button>
                    <button type="button" wire:click="deleteCategory" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>