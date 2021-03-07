<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Done</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="name">Location (<?= auth()->user()->name; ?>) :</label>
                        <input wire:model="name" type="checkbox" name="name" value="<?= auth()->user()->name; ?>" checked>
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Date <b><i>FAILED</i></b> (Cth:<?= date("Y-m-d H:i:s"); ?>) :</label>
                        <input wire:model="date" type="text" name="date" class="form-control">
                        @error('date') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="date_finish">Date <b><i>NORMAL</i></b> (Cth:<?= date("Y-m-d H:i:s"); ?>) :</label>
                        <input wire:model="date_finish" type="text" name="date_finish" class="form-control">
                        @error('date_finish') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="teknisi">PIC :</label>
                        <input wire:model="teknisi" type="text" name="teknisi" id="teknisi" class="form-control">
                        @error('teknisi') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Klik If Done</label>
                        <input wire:model="status" type="checkbox" name="status" value="DONE" checked>
                        @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click.prevent="store2()" type="button" class="btn btn-info">Submit</button>
            </div>
        </div>
    </div>
</div>