<div>
    @include('livewire.create')
    @include('livewire.create1')
    @include('livewire.create2')
    @include('livewire.update')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">Problem</h1>

        @if (session()->has('message'))
        <div class="text-center h1 alert alert-primary" role="alert">
            {{ session('message') }}
        </div>
        @endif


        <div class="row justify-content-md-center">
            <div class="col-sm-3">
                <button type="button" data-toggle="modal" data-target="#createModal" class="btn btn-danger btn-lg btn-block mb-3">Klik Radar Failed</button>
            </div>
            <div class="col-sm-2">
                <button data-toggle="modal" data-target="#create2Modal" type="button" class="btn btn-secondary btn-lg btn-block mb-3">Klik If Done</button>
            </div>
            <div class="col-sm-3">
                <button data-toggle="modal" data-target="#create1Modal" type="button" class="btn btn-success btn-lg btn-block mb-3">Klik Radar Normal</button>
            </div>
        </div>


        @foreach ($problems as $problem)
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-auto">
                    <?php if ($problem->status == "FAILED") : ?>
                        <div class="card ml-2 mb-4 border-danger text-danger" style="width: 30rem;">
                            <div class="card-header">
                                <b>Radar {{$problem->name}}</b> <span class="badge badge-danger">FAILED</span>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pl-5">Tanggal : <b>{{$problem->date}}</b></li>
                                <li class="list-group-item pl-5">Teknisi : <b>{{$problem->teknisi}}</b></li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Keterangan :</h5>
                                <p class="card-text"><b>{{$problem->keterangan}}</b></p>
                            </div>
                            <div class="card-body m-auto">
                                <button wire:click.prevent="edit({{$problem->id}})" data-toggle="modal" data-target="#updateModal" type="button" class="btn btn-info">Edit</button>
                            </div>
                        </div>
                    <?php elseif ($problem->status == "OK") : ?>
                        <div class="card ml-2 mb-4 border-success text-success" style="width: 30rem;">
                            <div class="card-header">
                                <b>Radar {{$problem->name}}</b> <span class="badge badge-success">NORMAL</span>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pl-5">Tanggal : <b>{{$problem->date_finish}}</b></li>
                                <li class="list-group-item pl-5">Teknisi : <b>{{$problem->teknisi}}</b></li>
                            </ul>
                            <div class="card-body">
                                <h5 class="card-title">Keterangan :</h5>
                                <p class="card-text">{{$problem->keterangan}}</p>
                            </div>
                        </div>
                    <?php elseif ($problem->status == "DONE" && $problem->date_finish == true) : ?>
                        <div class="card ml-2 mb-4 border-secondary text-secondary" style="width: 30rem;">
                            <div class="card-header">
                                <b>Radar {{$problem->name}}</b> <span class="badge badge-secondary">FINISHED</span>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pl-5">Date <b><i>FAILED</i></b> : <b>{{$problem->date}}</b></li>
                                <li class="list-group-item pl-5">Date <b><i>NORMAL</i></b> : <b>{{$problem->date_finish}}</b></li>
                            </ul>
                            <div class="card-body text-center">
                                <h5 class="card-title">PIC :</h5>
                                <p class="card-text">{{$problem->teknisi}}</p>
                            </div>
                        </div>
                    <?php else : ?>
                        <!-- <div class="card ml-2 mb-4 bg-dark" style="width: 30rem;">
                            <div class="card-header">
                                <span class="badge badge-light btn-block">NORMAL OPERASI</span>
                            </div>
                        </div> -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>