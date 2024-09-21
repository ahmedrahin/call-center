<div>
    <form wire:submit.prevent="submit" class="contact-form c-mb-15 c-gutter-15 floating-label">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="name"><span>Name</span><span class="required">*</span></label>
                    <input type="text" wire:model.lazy="name" id="name" 
                        class="form-control {{ $errors->has('name') ? 'error' : '' }}" 
                        aria-required="true">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
    
                <div class="form-group">
                    <label for="email"><span>Email</span><span class="required">*</span></label>
                    <input type="text" wire:model.lazy="email" id="email" 
                        class="form-control {{ $errors->has('email') ? 'error' : '' }}" 
                        aria-required="true">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
    
                <div class="form-group">
                    <label for="message"><span>Message</span><span class="required">*</span></label>
                    <textarea wire:model.lazy="message" id="message" 
                        class="form-control {{ $errors->has('message') ? 'error' : '' }}" 
                        rows="3" cols="45" aria-required="true"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
    
                <div class="form-group">
                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-big btn-gradient mt-10 mt-lg-20">
                        <span>Submit</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    
</div>
