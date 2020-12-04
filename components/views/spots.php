<div class="container mt-5 mb-5">
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="card home-card fst">
                <div class="card-body">
                    <div class="card-title">Plage arcachon</div>
                    <i>1st</i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card home-card snd">
                <div class="card-body">
                    <div class="card-title">Plage arcachon</div>
                    <i>2nd</i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card home-card thd">
                <div class="card-body">
                    <div class="card-title">Plage arcachon</div>
                    <i>3rd</i>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Longitude</th>
                <th scope="col">Latitude</th>
                <th scope="col">Nb likes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($spots as $spot) { ?> 
            <tr>
                <th scope="row"><?= $spot['surf_spot_id'] ?></th>
                <td><?= $spot['name'] ?></td>
                <td><?= $spot['lng'] ?></td>
                <td><?= $spot['lat'] ?></td>
                <td><?= $spot['nbLikes'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>      
</div>