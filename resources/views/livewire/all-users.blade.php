<div class="container-fluid">
    @include('livewire.detail')
    <style>
        nav svg {
            max-height: 20px;
        }
    </style>
    <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">User List</h1>
    <div class="col-md-4">
        <input wire:model="searchTerm" class="form-control" type="text" name="" id="" placeholder="Search..">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-striped text-center table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Location</th>
                        <th scope="col">Placed</th>
                        <th scope="col">SIC</th>
                        <th scope="col">SAC</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profiles as $profile) : ?>
                        <tr>
                            <td><b>Radar <?= $profile->name; ?></b></td>
                            <td><?= $profile->penempatan; ?></td>
                            <td><?= $profile->SIC; ?></td>
                            <td><?= $profile->SAC; ?></td>
                            <td><?= $profile->latitude; ?></td>
                            <td><?= $profile->longtitude; ?></td>
                            <td>
                                <button wire:click.prevent="detail({{$profile->id}})" data-toggle="modal" data-target="#detailProblemModal" type="button" class="btn btn-info">Detail</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            {{$profiles->links()}}
        </div>
    </div>
</div>