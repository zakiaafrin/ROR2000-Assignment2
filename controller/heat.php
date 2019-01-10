<?php

use Halfpastfour\PHPChartJS\Chart\Bar;

// include classes
include_once "classes/Game.php";
include_once "classes/Player.php";
include_once "model/users.php";

class Heat 
{
    public function index() {
        // include the model
        $userModel = new Users();

        // create the game
        Game::$team = $userModel->getHeatPlayers();
        Game::$season = "2018";
        Game::$match = 12;

        // start game
        Game::run();

        // sort Players by points scored
        usort(Game::$team, function($a, $b) {
            return $a->score < $b->score;
        });

        // include the view
        $title = "Contest";
        include "view/heat.php";
    }

    public function add() {
        // include the view
        $title = "Add player";
        include "view/heat-add.php";
    }

    public function submit() {
        // get params from the view
        $name = $_POST['name'];
        $age = $_POST['age'];
        $accuracy = $_POST['accuracy'];

        // create new Player
        $player = new Player($name, $age, 0, $accuracy);

        // save the player
        $userModel = new Users();
        $userModel->addHeatPlayer($player);

        // redirect to the list of players
        header('Location: index.php?page=heat');
    }

    public function report() {
        // get my heat players
        $userModel = new Users();
        $players = $team = $userModel->getHeatPlayers();

        // get players info into an array
        $names = [];
        $ages = [];
        $accuracies = [];
        $speeds = [];
        foreach($players as $p) {
            $names[] = $p->name;
            $ages[] = $p->age;
            $accuracies[] = $p->accuracy;
            $speeds[] = $p->speed;
        }

        // create a new Bar type chart 
        $bar = new Bar();
        $bar->setId("myBar");

        // Set labels
        $bar->labels()->exchangeArray($names);

        // Add ages
        $cAges = $bar->createDataSet();
        $cAges->setLabel("Age")->setBackgroundColor("orange")->data()->exchangeArray($ages);
        $bar->addDataSet($cAges);

        // Add accuracies
        $cAccuracy = $bar->createDataSet();
        $cAccuracy->setLabel("Accuracy")->setBackgroundColor("blue")->data()->exchangeArray($accuracies);
        $bar->addDataSet($cAccuracy);

        // Add speeds
        $cSpeed = $bar->createDataSet();
        $cSpeed->setLabel("Speed")->setBackgroundColor("green")->data()->exchangeArray($speeds);
        $bar->addDataSet($cSpeed);

        // Render the chart
        $chart = $bar->render();

        // include the view
        include "view/heat-report.php";
    }
}
