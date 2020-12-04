<div class="container">
    <div class="card mt-5 home-card login-form">
        <div class="card-body">
            <div class="row choose text-center">
                <div class="col-6" id="choose-signin" style="font-weight:bold;">Sign in</div>
                <div class="col-6" id="choose-signup">Sign up</div>
            </div>
            <div id="signin">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" placeholder="Login (email address)">
                    </div>
                    <div class="form-group">
                        <input type="password" name="passwd" class="form-control" placeholder="Password">
                    </div>
                    <div>
                        <button class="btn btn-primary float-right">Connexion</button>
                    </div>
                </form>
            </div>
            <div id="signup" style="display: none;">
                <form method="POST">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="password" name="passwd" class="form-control" placeholder="Password">
                            </div>
                            <div class="col">
                                <input type="password" name="confpasswd" class="form-control" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary float-right">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
