<div class="row">
    <div class="col-sm-8">
        <?php foreach ($cars as $car): ?>

            <h2><a href="<?= $car->url ?>"><?= $car->nom; ?></a></h2>

            <p>Prix : <em><?= $car->prix; ?> €</em></p>

            <p>Puissance : <?= $car->puissance; ?> chevaux</p>

            <p>Poids : <?= $car->poids; ?> kg</p>

        <?php endforeach; ?>

    </div>
</div>