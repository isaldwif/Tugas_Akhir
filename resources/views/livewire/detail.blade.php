<!-- <div class="container-fluid"> -->
<div wire:ignore.self class="modal fade" id="detailProblemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="btn btn-block" id="exampleModalLabel">User Detail</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input wire:model="ids" type="hidden" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Location</label>
                            <input wire:model="name" type="text" class="form-control" id="name" name="name" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="penempatan">Placed</label>
                            <input wire:model="penempatan" type="text" class="form-control" id="penempatan" name="penempatan" readonly>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="alamat">Address</label>
                        <textarea wire:model="alamat" class="form-control col-md-12" id="alamat" name="alamat" rows="2" readonly></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="SIC">System Identification Code</label>
                            <input wire:model="SIC" type="text" class="form-control" id="SIC" name="SIC" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="SAC">System Area Code</label>
                            <input wire:model="SAC" type="text" class="form-control" id="SAC" name="SAC" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="latitude">Latitude</label>
                            <input wire:model="latitude" type="text" class="form-control" id="latitude" name="latitude" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="longtitude">Longtitude</label>
                            <input wire:model="longtitude" type="text" class="form-control" id="longtitude" name="longtitude" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tahun_install">Installation Year</label>
                            <input wire:model="tahun_install" type="text" class="form-control" id="tahun_install" name="tahun_install" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tahun_comm">Commisioning Year</label>
                            <input wire:model="tahun_comm" type="text" class="form-control" id="tahun_comm" name="tahun_comm" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="power_output">Output Power(KW)</label>
                            <input wire:model="power_output" type="text" class="form-control" id="power_output" name="power_output" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="power_consume">Consumption Power(KVA)</label>
                            <input wire:model="power_consume" type="text" class="form-control" id="power_consume" name="power_consume" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="merk">Merk</label>
                            <input wire:model="merk" type="text" class="form-control" id="merk" name="merk" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="negara">Country</label>
                            <input wire:model="negara" type="text" class="form-control" id="negara" name="negara" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="type">Type</label>
                            <input wire:model="type" type="text" class="form-control" id="type" name="type" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="coverage">Coverage(NM)</label>
                            <input wire:model="coverage" type="text" class="form-control" id="coverage" name="coverage" readonly>
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