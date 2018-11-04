<div class="row">
    <div class="col-sm-6">
		<h1><?= $car->nom; ?></h1>

		<p>Prix: <em><?= $car->prix; ?> €</em></p>

		<p>Puissance : <?= $car->puissance; ?> chevaux</p>

		<p>Poids : <?= $car->poids; ?> kg</p>
    </div>
    <div class="col-sm-6">
		<img src="assets/img/<?= $car->img;?>" style="max-height: 250px;">
    </div>
</div>