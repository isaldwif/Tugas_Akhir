@foreach ($profiles as $profile)
<div class="container-fluid">
    @include('livewire.edit')
    <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">My Profile</h1>
    @if(session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="container">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Location</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$profile->name}}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="penempatan">Placed</label>
                    <input type="text" class="form-control" id="penempatan" name="penempatan" value="{{$profile->penempatan}}" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label for="alamat">Address</label>
                <textarea class="form-control col-md-12" id="alamat" name="alamat" rows="2" readonly>{{$profile->alamat}}</textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="SIC">System Identification Code</label>
                    <input type="text" class="form-control" id="SIC" name="SIC" value="{{$profile->SIC}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="SAC">System Area Code</label>
                    <input type="text" class="form-control" id="SAC" name="SAC" value="{{$profile->SAC}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="{{$profile->latitude}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="longtitude">Longtitude</label>
                    <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{$profile->longtitude}}" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tahun_install">Installation Year</label>
                    <input type="text" class="form-control" id="tahun_install" name="tahun_install" value="{{$profile->tahun_install}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="tahun_comm">Commisioning Year</label>
                    <input type="text" class="form-control" id="tahun_comm" name="tahun_comm" value="{{$profile->tahun_comm}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="power_output">Output Power</label>
                    <input type="text" class="form-control" id="power_output" name="power_output" value="{{$profile->power_output}} KW" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="power_consume">Consumption Power</label>
                    <input type="text" class="form-control" id="power_consume" name="power_consume" value="{{$profile->power_consume}} KVA" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk" value="{{$profile->merk}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="negara">Country</label>
                    <input type="text" class="form-control" id="negara" name="negara" value="{{$profile->negara}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$profile->type}}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label for="coverage">Coverage</label>
                    <input type="text" class="form-control" id="coverage" name="coverage" value="{{$profile->coverage}} NM" readonly>
                </div>
            </div>
            <div class="form-row float-right">
                <button wire:click.prevent="detail({{$profile->id}})" data-toggle="modal" data-target="#editProfileModal" type="button" class="btn btn-info">Edit</button>
            </div>
        </form>
    </div>
</div>
@endforeach