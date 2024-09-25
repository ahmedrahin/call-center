<div>
<div>
    <form wire:submit.prevent="add" class="add">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-0">Qustion :</label>
                    <input class="form-control @error('qustion') error @enderror" type="text" name="qustion" wire:model="qustion">
                    @error('qustion')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>
 

            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label class="mb-0">Answer :</label>
                    <textarea class="form-control @error('answer') error @enderror" name="answer" wire:model="answer" style="height: 100px;"></textarea>
                    @error('answer')
                        <span class="text-danger pt-2 d-block">{{$message}}</span>
                    @enderror
                </div>
            </div>           
            

            <div class="col-12">
                <button class="btn btn-primary mt-3 d-block" style="border: none; border-radius: 0; width: 200px;">
                    <span wire:loading.remove wire:target="add"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Faq</span>
                    <span wire:loading wire:target="add">
                        <i class="fa fa-spinner fa-spin"></i> Loading...
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>

</div>
