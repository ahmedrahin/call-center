<div>
    <form wire:submit.prevent="update" class="add">
        <div class="row">
            <!-- Service Title -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Service Title:</label>
                    <input class="form-control @error('title') error @enderror" type="text" name="title" wire:model="title">
                    @error('title')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <!-- Short Title -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Short Title:</label>
                    <input class="form-control @error('short_title') error @enderror" type="text" name="short_title" wire:model="short_title">
                    @error('short_title')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <!-- Service Description -->
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-0">Service Description:</label>
                    <textarea class="form-control @error('description') error @enderror" name="description" wire:model="description" style="height: 200px;">
                    </textarea>
                    @error('description')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <!-- Service Image Upload -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Service Image:</label>
            
                    <div class="custom-file-upload" @click="$refs.fileInput1.click()">
                        <span>Select an Image</span>
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="150" class="mt-2">
                        @elseif($existing_image)
                            <img src="{{ asset($existing_image) }}" width="150" class="mt-2">
                        @endif
                    </div>
            
                    <input type="file" wire:model="image" style="display: none;" x-ref="fileInput1">
            
                    @error('image')
                        <span class="text-danger pt-2 d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            

            <!-- Thumbnail Image Upload -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Thumbnails Image:</label>
            
                    <div class="custom-file-upload" @click="$refs.fileInput2.click()">
                        <span>Select a Thumbnail Image</span>
                        @if ($thumb_image )
                            <img src="{{ $thumb_image->temporaryUrl() }}" width="150" class="mt-2">
                        @elseif($existing_thumb_image)
                            <img src="{{ asset($existing_thumb_image) }}" width="150" class="mt-2">
                        @endif
                    </div>
            
                    <input type="file" wire:model="thumb_image" style="display: none;" x-ref="fileInput2">
            
                    @error('thumb_image')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            

            <!-- Submit Button -->
            <button class="btn btn-primary mt-3 d-block" style="border: none; border-radius: 0; width: 200px;">
                <span wire:loading.remove wire:target="update"><i class="fa fa-save" aria-hidden="true"></i> Save Changes</span>
                <span wire:loading wire:target="update">
                    <i class="fa fa-spinner fa-spin"></i> Updating...
                </span>
            </button>
        </div>
    </form>
</div>
