<div>
    <form wire:submit.prevent="add" class="add">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label class="mb-0">Employee Name :</label>
                    <input class="form-control @error('name') error @enderror" type="text" name="name" wire:model="name">
                    @error('name')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label class="mb-0">Job title :</label>
                    <input class="form-control @error('post') error @enderror"  type="text" name="post" wire:model="post">
                    @error('post')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label class="mb-0">Salary :</label>
                    <input class="form-control @error('salary') error @enderror"  type="text" name="salary" wire:model="salary">
                    @error('salary')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="mb-0">Facebook Link :</label>
                    <input class="form-control @error('facebook_link') error @enderror"  type="text" name="facebook_link" wire:model="facebook_link">
                    @error('facebook_link')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="mb-0">Instagram Link :</label>
                    <input class="form-control @error('instagam_link') error @enderror"  type="text" name="instagam_link" wire:model="instagam_link">
                    @error('instagam_link')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="mb-0">Email :</label>
                    <input class="form-control @error('email') error @enderror"  type="text" name="email" wire:model="email">
                    @error('email')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label class="mb-0">Phone :</label>
                    <input class="form-control @error('phone') error @enderror"  type="text" name="phone" wire:model="phone">
                    @error('phone')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-0">Employee Description :</label>
                    <textarea class="form-control @error('description') error @enderror" name="description" name="description" wire:model="description" style="height: 200px;"></textarea>
                    @error('description')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Employee Image:</label>
                    
                    <div class="custom-file-upload" @click="$refs.fileInput1.click()">
                        <span>Select an Image</span>
            
                        @if ($image)
                            <div class="image-preview-container mt-2 position-relative">
                                <!-- Image Preview -->
                                <img src="{{ $image->temporaryUrl() }}" width="150" class="img-fluid">
                                
                                <!-- Cross Button to Remove Image -->
                                <button type="button" class="position-absolute top-0 right-0" 
                                        style="top: 0; right: 120px; z-index: 10; border: none; color: red;" 
                                        wire:click="removeImage">
                                    &#x2716;
                                </button>
                            </div>
                        @endif
                    </div>
                    
                    <!-- File Input -->
                    <input type="file" wire:model="image" style="display: none;" x-ref="fileInput1" accept="image/png, image/jpeg">
                    
                    @error('image')
                        <span class="text-danger pt-2 d-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>            
            

            <div class="col-12">
                <button class="btn btn-primary mt-3 d-block" style="border: none; border-radius: 0; width: 200px;">
                    <span wire:loading.remove wire:target="add"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Employee</span>
                    <span wire:loading wire:target="add">
                        <i class="fa fa-spinner fa-spin"></i> Loading...
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>
