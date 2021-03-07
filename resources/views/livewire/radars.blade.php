@push('css_leaflet')
<!-- STYLE LEAFLET -->
<script src="{{ asset('leaflet/dist/leaflet.js') }}"></script>
<link rel="stylesheet" href="{{ asset('leaflet/dist/leaflet.css') }}">
<style>
    #map {
        height: 500px;
    }
</style>
@endpush

<div class="container-fluid">
    <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">Radar Site</h1>
    <div id="map">
    </div>
</div>

@push('scripts_leaflet')
<!-- LEAFLET -->
<script>
    var map = L.map('map').setView([<?= auth()->user()->latitude; ?>, <?= auth()->user()->longtitude; ?>], 6);
    L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
    }).addTo(map);

    L.circle([<?= auth()->user()->latitude; ?>, <?= auth()->user()->longtitude; ?>], {
        weight: 1,
        color: 'white',
        fillColor: 'white',
        fillOpacity: 0.2,
        radius: 463000
    }).addTo(map);

    <?php foreach ($problems as $problem) : ?>
        var icon = L.icon(
            <?php if ($problem->kondisi == 1) : ?> {
                    iconUrl: '<?= asset('images/1red.png'); ?>',
                    iconSize: [40, 95],
                    iconAnchor: [22, 94],
                    popupAnchor: [-3, -76]
                }
            <?php else : ?> {
                    iconUrl: '<?= asset('images/1green.png'); ?>',
                    iconSize: [40, 95],
                    iconAnchor: [22, 94],
                    popupAnchor: [-3, -76]
                }
            <?php endif; ?>
        );

        L.marker([<?= auth()->user()->latitude; ?>, <?= auth()->user()->longtitude; ?>], {
                icon: icon
            }).addTo(map)
            .bindPopup(`
                        <?php if ($problem->status == "FAILED") : ?>
                        <div class="card border-danger text-danger ml-2 mb-4" style="width: 16rem;">
                            <div class="card-header">
                                <b><i>Radar</i></b> : {{$problem->name}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b><i>Date Failed</i></b> : {{$problem->date}}</li>
                                <li class="list-group-item"><b><i>Teknisi</i></b> : {{$problem->teknisi}}</li>
                            </ul>
                            <div class="card-body">
                                <p class="card-text text-center"><b><i>Keterangan</i></b> :</p>
                                <p class="card-text">{{$problem->keterangan}}</p>
                            </div>
                        </div>
                        <?php elseif ($problem->status == "OK") : ?>
                        <div class="card border-success text-success ml-2 mb-4" style="width: 16rem;">
                            <div class="card-header">
                                <b><i>Radar</i></b> : {{$problem->name}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b><i>Date Normal</i></b> : {{$problem->date_finish}}</li>
                                <li class="list-group-item"><b><i>Teknisi</i></b> : {{$problem->teknisi}}</li>
                            </ul>
                            <div class="card-body">
                                <p class="card-text text-center"><b><i>Keterangan</i></b> :</p>
                                <p class="card-text">{{$problem->keterangan}}</p>
                            </div>
                        </div>
                        <?php elseif ($problem->status == "DONE" && $problem->date_finish == true) : ?>
                        <div class="card border-secondary text-secondary ml-2 mb-4" style="width: 16rem;">
                            <div class="card-header">
                                <b><i>Radar</i></b> : {{$problem->name}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b><i>Date Failed</i></b> : {{$problem->date}}</li>
                                <li class="list-group-item"><b><i>Date Normal</i></b> : {{$problem->date_finish}}</li>
                            </ul>
                        </div>
                        <?php else : ?>
                        <div class="card border-secondary text-secondary ml-2 mb-4" style="width: 16rem;">
                            <div class="card-header">
                                <b><i>Radar</i></b> : {{$problem->name}}
                            </div>
                        </div>
                        <?php endif; ?>
                        `)
            .openPopup();
    <?php endforeach; ?>
</script>
@endpush