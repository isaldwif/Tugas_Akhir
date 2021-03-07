<div class="container-fluid">
    @include('livewire.detail-dashboard')
    <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">All Dashboard</h1>

    @foreach ($problems as $problem)
    <div class="container ">
        <?php if ($problem->status == "DONE" && $problem->date_finish == true) : ?>
            <div class="card text-center float-left ml-4 mb-4" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>Radar {{$problem->name}}</b></h5>
                    <button wire:click.prevent="detail({{$problem->id}})" data-toggle="modal" data-target="#detailModal" type="button" class="btn btn-warning">Detail</button>
                </div>
            </div>
        <?php endif; ?>
    </div>
    @endforeach
</div>