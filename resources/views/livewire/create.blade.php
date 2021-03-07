<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Failed</h5>
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
                        <label for="date">Tanggal (<?= date("Y-m-d H:i:s"); ?>) :</label>
                        <input wire:model="date" type="checkbox" name="date" value="<?= date("Y-m-d H:i:s"); ?>" checked>
                        @error('date') <span class="text-red-500">{{ $message }}</span>@enderror
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
                        <label for="kondisi">Klik If Failed</label>
                        <input wire:model="kondisi" type="checkbox" name="kondisi" value="1" checked>
                        @error('kondisi') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click.prevent="store()" type="button" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </div>
</div>