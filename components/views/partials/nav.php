<nav class="p-3">
    <h3 style="text-decoration:uppercase;"><a href="/home">Surfrider</a></h3>
    <?php if(!$isLogged){ ?>
    <div>
        <a href="/user/login"><button class="btn btn-outline-dark">Sign-up</button></a>
        <a href="/user/login"><button class="btn btn-dark">Sign-in</button></a>
    </div>
    <?php } else { ?>
    <div>
        <a href="/user/logout"><button class="btn btn-dark">Sign-out</button></a>
    </div>
    <?php } ?>
</nav>