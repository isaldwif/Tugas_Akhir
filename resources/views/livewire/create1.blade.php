<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Normal</h5>
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
                        <label for="date_finish">Tanggal (<?= date("Y-m-d H:i:s"); ?>) :</label>
                        <input wire:model="date_finish" type="checkbox" name="date_finish" value="<?= date("Y-m-d H:i:s"); ?>" checked>
                        @error('date_finish') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="teknisi">Teknisi :</label>
                        <input wire:model="teknisi" type="text" name="teknisi" id="teknisi" class="form-control">
                        @error('teknisi') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan :</label>
                        <input wire:model="keterangan" type="text" name="keterangan" class="form-control">
                        @error('keterangan') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Klik If Normal</label>
                        <input wire:model="status" type="checkbox" name="status" value="OK" checked>
                        @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click.prevent="store1()" type="button" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>