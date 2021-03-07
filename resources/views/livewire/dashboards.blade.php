<div class="container-fluid">
    <h1 class="h1 mt-3 mb-4 text-light bg-primary text-center rounded shadow-lg">Dashboard</h1>

    <div class="container">
        <table class="mt-3 table table-striped table-bordered text-center table-hover">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">No</th>
                    <th scope="col">Location</th>
                    <th scope="col">Failed</th>
                    <th scope="col">Normal</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($problems as $problem) : ?>
                    <tr>
                        <?php if ($problem->status == "DONE" && $problem->date_finish == true) : ?>
                            <th scope="row"><?= $i++; ?></th>
                            <td>{{$problem->name}}</td>
                            <td>{{$problem->date}}</td>
                            <td>{{$problem->date_finish}}</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>