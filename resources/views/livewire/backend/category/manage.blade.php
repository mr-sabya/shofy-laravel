<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <!-- go back button -->
                <div class="mb-3">
                    <a href="{{ route('admin.category.index') }}" wire:navigate class="btn-back">
                        <i class="ri-arrow-left-line"></i> Back
                    </a>

                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Category Information</h5>
                        </div>

                        <form wire:submit.prevent="save" class="theme-form theme-form-2 mega-form">
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                <div class="col-sm-9">
                                    <input wire:model="title" class="form-control" type="text" placeholder="Category Name">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Slug</label>
                                <div class="col-sm-9">
                                    <div class="d-flex w-100">
                                        <div class="w-100 me-2">
                                            <input wire:model="slug" class="form-control" type="text" placeholder="Slug">
                                        </div>
                                        <button type="button" class="btn btn-primary" wire:click="generateSlug">Generate</button>
                                    </div>
                                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
                                <div class="form-group col-sm-9">
                                    <div class="image-preview">
                                        @if ($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" class="img-fluid" alt="">
                                        @elseif ($image)
                                        <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="">
                                        @endif
                                    </div>
                                    <input wire:model="newImage" class="form-control" type="file">
                                    @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <div class="col-sm-3 form-label-title">Select Category Icon</div>
                                <div class="col-sm-9">
                                    <div class="image-preview">
                                        @if ($newIcon)
                                        <img src="{{ $newIcon->temporaryUrl() }}" class="img-fluid" alt="">
                                        @elseif ($icon)
                                        <img src="{{ asset('storage/' . $icon) }}" class="img-fluid" alt="">
                                        @endif
                                    </div>
                                    <input wire:model="newIcon" class="form-control" type="file">
                                    @error('newIcon') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="d-flex gap-2 justify-content-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" wire:click="$refresh" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>