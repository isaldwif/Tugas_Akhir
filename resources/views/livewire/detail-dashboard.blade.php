<!-- <div class="container-fluid"> -->
<div wire:ignore.self class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Statistik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input wire:model="ids" type="hidden" name="id">
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="name">Location</label>
                            <input wire:model="name" type="text" class="form-control" id="name" name="name" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="date">Failed</label>
                            <input wire:model="date" type="text" class="form-control" id="date" name="date" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="date_finish">Normal</label>
                            <input wire:model="date_finish" type="text" class="form-control" id="date_finish" name="date_finish" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->