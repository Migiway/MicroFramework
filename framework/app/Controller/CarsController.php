<?php

namespace App\Controller;

use Core\Controller\Controller;

class CarsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Car');

    }

    public function index(){
        $cars = $this->Car->last();
        $this->render('cars.index', compact('cars'));
    }

    public function show(){
        $car = $this->Car->findCar($_GET['id']);
        $this->render('cars.show', compact('car'));
    }

}