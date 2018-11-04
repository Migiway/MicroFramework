<?php
namespace App\Table;

use Core\Table\Table;

class CarTable extends Table{

    protected $table = 'voitures';

    /**
     * Récupère les dernieres voitures
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT voitures.id, voitures.nom, voitures.puissance, voitures.poids, voitures.prix
            FROM voitures
            ORDER BY voitures.id ASC");
    }

    /**
     * Récupère une voiture
     * @param $id int
     * @return \App\Entity\CarEntity
     */
    public function findCar($id){
        return $this->query("
            SELECT voitures.id, voitures.nom, voitures.puissance, voitures.poids, voitures.prix, voitures.img
            FROM voitures
            WHERE voitures.id = ?", [$id], true);
    }
}