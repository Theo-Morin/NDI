<div class="container menu">
    <div class="form">
        <form method="POST">
            <div class="row">
                <div class="col-xl-8 col-lg-6 col-md-0"></div>
                <div class="col-xl-4 col-lg-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" name="city" placeholder="Choisir une ville" value="<?php if(isset($_SESSION['city'])) echo $_SESSION['city']; ?>" class="form-control">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row m-3">
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title"><?= date("D d") ?>, <?= date("H") ?>h<?= date("i") ?></div>
                    <h1 style="display: inline;"><?= $weather['temp'] ?></h1><span style="vertical-align: top;">°c</span>
                    <h4 class="bottom"><?= $weather['location'] ?></h4>
                    <img src="https:<?= $weather['icon'] ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <div class="card home-card">
                <div class="card-body">
                    <div class="card-title">Wind</div>
                    <h1 style="display: inline;"><?= $weather['wind_kph'] ?></h1><span style="vertical-align: top;">kph</span>
                    <h4 class="bottom"><?= $weather['location'] ?></h4>
                    <i class="fas fa-wind right"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <a href="/user/change-informations">
                <div class="card home-card">
                    <div class="card-body">
                        <i class="fas fa-user-alt"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-6 mt-3">
            <a href="/informations-surf">
                <div class="card home-card">
                    <div class="card-body">
                        <i class="fas fa-clipboard"></i>
                    </div>
                </div>
            </a>
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
                    <div class="card-title">Referenced spots</div>
                    <i><?= $nbSpots ?></i>
                </div>
            </div>
        </div>
    </div>
</div>
