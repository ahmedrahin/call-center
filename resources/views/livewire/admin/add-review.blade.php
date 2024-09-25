<div>
    <form wire:submit.prevent="add" class="add">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Customer Name :</label>
                    <input class="form-control @error('name') error @enderror" type="text" name="name" wire:model="name">
                    @error('name')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Job Title :</label>
                    <input class="form-control @error('job_title') error @enderror"  type="text" name="job_title" wire:model="job_title">
                    @error('job_title')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-0">Write review :</label>
                    <textarea class="form-control @error('message') error @enderror" name="message" wire:model="message" style="height: 200px;"></textarea>
                    @error('message')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label class="mb-0">Customer Image :</label>
                    
                    <div class="custom-file-upload" @click="$refs.fileInput1.click()">
                        <span>Select a Image</span>
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="150" class="mt-2">
                        @endif
                    </div>
                
                    <input type="file" wire:model="image" style="display: none;" x-ref="fileInput1"  accept="image/png, image/jpeg">
                
                    @error('image')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
            
        
            <div class="col-12">
                <button class="btn btn-primary mt-3 d-block" style="border: none; border-radius: 0; width: 200px;">
                    <span wire:loading.remove wire:target="add"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Review</span>
                    <span wire:loading wire:target="add">
                        <i class="fa fa-spinner fa-spin"></i> Loading...
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>
