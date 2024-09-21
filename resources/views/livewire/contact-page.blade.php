<div>
    <form wire:submit.prevent="submit" class="contact-form c-mb-15 c-gutter-15">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="form-group has-placeholder">
                    <label for="name">Full Name <span class="required">*</span></label>
                    <input type="text" wire:model="name" id="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Full Name"  wire:model.lazy="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group has-placeholder">
                    <label for="phone">Phone Number<span class="required">*</span></label>
                    <input type="text" wire:model="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Phone Number"  wire:model.lazy="phone">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group has-placeholder">
                    <label for="email">Email address<span class="required">*</span></label>
                    <input type="text" wire:model="email" id="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email Address"  wire:model.lazy="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group has-placeholder">
                    <label for="message">Message</label>
                    <textarea wire:model="message" id="message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Your Message" style="height: 200px"  wire:model.lazy="message"></textarea>
                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="row mt-20">
            <div class="col-sm-12">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-wide btn-big btn-gradient">
                        <span>Send</span>
                    </button>
                </div>
            </div>
        </div>
    </form>      
</div>
