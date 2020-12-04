<div class="container mt-5 mb-5">
<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Bordeaux+(My%20Business%20Name)&amp;t=&amp;z=4&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="card home-card fst">
                <div class="card-body">
                    <div class="card-title"><?= $spots[0]['spot_name'] ?></div>
                    <i>1st</i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card home-card snd">
                <div class="card-body">
                    <div class="card-title"><?= $spots[1]['spot_name'] ?></div>
                    <i>2nd</i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card home-card thd">
                <div class="card-body">
                    <div class="card-title"><?= $spots[2]['spot_name'] ?></div>
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
                <td><?= $spot['spot_name'] ?></td>
                <td><?= $spot['lng'] ?></td>
                <td><?= $spot['lat'] ?></td>
                <td><?= SpotsLikes::getSpotLikes($spot['surf_spot_id']) ?> - 
            <?php if(isset($_SESSION['user_id'])) { ?><a href="/like/<?= $spot['surf_spot_id'] ?>"><button class="btn btn-warning"><i class="fas fa-heart"></i></button></a><?php } ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>      
</div>