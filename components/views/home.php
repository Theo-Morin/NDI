<div class="container menu">
    <div class="row m-3">
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title">Friday 4, 21h00</div>
                    <h1 style="display: inline;"><?= $weather['temp'] ?></h1><span style="vertical-align: top;">°c</span>
                    <h4 class="bottom"><?= $weather['location'] ?></h4>
                    <img src="https:<?= $weather['icon'] ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <i class="fas fa-user-alt"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title">Nb app users</div>
                    <i><?= $nbUsers ?></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title">Houle</div>
                    <h1 style="display: inline;">10</h1><span style="vertical-align: top;">cm</span>
                    <h4 class="bottom"><?= $weather['location'] ?></h4>
                    <i class="fas fa-water right"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <i class="fas fa-clipboard"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title">Referenced spots</div>
                    <i><?= $nbSpots ?></i>
                </div>
            </div>
        </div>
    </div>
</div>
