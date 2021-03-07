<div>
    @include('livewire.confirm')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">All Problem</h1>
        @foreach ($problems as $problem)
        <div class="container ">
            <?php if ($problem->kondisi == 1) : ?>
                <div class="card ml-4 mb-4 mr-5 border-danger text-danger float-left" style="width: 28rem;">
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
                        <button wire:click.prevent="confirm({{$problem->id}})" data-toggle="modal" data-target="#confirmModal" type="button" class="btn btn-warning">Confirm</button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        @endforeach
    </div>
</div>