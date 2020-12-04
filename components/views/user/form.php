<div class="container">
    <div class="card home-card mt-5" id="change-infos">
        <form method="POST">
            <div class="card-body">
                <div class="card-title">Change your informations</div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col">
                            <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" name="verifpasswd" class="form-control" placeholder="Password verification">
                </div>
                <div>
                    <button class="btn btn-primary float-right">Change informations</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card home-card mt-5" id="change-passd">
        <form method="POST">
            <div class="card-body">
                <div class="card-title">Change your password</div>
                <div class="form-group">
                    <input type="password" name="passwd" class="form-control" placeholder="Actual password">
                </div>
                <div class="form-group">
                    <input type="password" name="newpasswd" class="form-control" placeholder="New password">
                </div>
                <div class="form-group">
                    <input type="password" name="confpasswd" class="form-control" placeholder="Confirm new password">
                </div>
                <div style=>
                    <button class="btn btn-primary float-right">Change password</button>
                </div>
            </div>
        </form>
    </div>
</div>
