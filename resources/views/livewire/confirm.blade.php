<!-- Modal -->
<div wire:ignore.self class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Problem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input wire:model="ids" type="hidden" name="id">
                    <div class="form-group">
                        <label for="name">Location :</label>
                        <input wire:model="name" type="text" name="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal :</label>
                        <input wire:model="date" type="text" name="date">
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
                        <label for="kondisi">Apakah Radar Site Normal Operasi ???</label>
                        <input wire:model="kondisi" type="checkbox" name="kondisi" value="0" checked>
                        @error('kondisi') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click.prevent="update()" type="button" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</div>