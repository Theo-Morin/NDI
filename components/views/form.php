<div class="container mb-5">
    <form method="POST">
        <div class="card home-card mt-5">
            <div class="card-body">
                <div class="card-title">Localisation</div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="city">Ville :</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Bordeaux">
                        </div>
                        <div class="col">
                            <label for="spot_id">Spot :</label>
                            <select onchange="changeSpot()" name="spot_id" id="spot_id" class="form-control">
                                <option value="0" selected>Choose your spot</option>
                                <option value="new">Nouveau spot</option>
                            </select>
                            <div id="new-spot" style="display: none;">
                                <div class="form-group mt-2">
                                    <input type="text" name="spot['name']" class="form-control" placeholder="Spot name">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="spot['lng']" class="form-control" placeholder="Longitude">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="spot['lat']" class="form-control" placeholder="Latitude">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card home-card mt-5">
            <div class="card-body">
                <div class="card-title">Ma sortie</div>
                <div class="form-group">
                    <label for="products">Produits utilisés :</label>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="date_debut">Début de la baignade :</label>
                            <input type="datetime" name="date_debut" id="date_debut" class="form-control">
                        </div>
                        <div class="col">
                            <label for="date_fin">Fin de la baignade :</label>
                            <input type="text" name="date_fin" id="date_fin" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card home-card mt-5">
            <div class="card-body">
                <div class="card-title">Observations</div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="baigneurs">Nombre de baigneurs :</label>
                            <input type="text" name="baigneurs" id="baigneurs" class="form-control">
                        </div>
                        <div class="col">
                            <label for="praticants">Nombre de praticants d'activité nautique :</label>
                            <input type="text" name="praticants" id="praticants" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label for="bateaux_peche">Nombre de bateaux de pêche :</label>
                            <input type="text" name="bateaux_peche" id="bateaux_peche" class="form-control">
                        </div>
                        <div class="col">
                            <label for="bateaux_loisir">Nombre de bateaux de loisir :</label>
                            <input type="text" name="bateaux_loisir" id="bateaux_loisir" class="form-control">
                        </div>
                        <div class="col">
                            <label for="bateaux_voile">Nombre de bateaux à voile :</label>
                            <input type="text" name="bateaux_voile" id="bateaux_voile" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary mt-5 btn-block">Envoyer</button>
        </div>
    </form>
</div>
