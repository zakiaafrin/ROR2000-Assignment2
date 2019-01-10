<?php 

include_once "classes/Player.php";

class Users 
{
    /**
     * Get the list of users
     */
    public function getUsers() {
        // $employees = [
        //     ['id' => 1, 'name' => 'Alfred Hitchcock', 'age' => 30, 'salary' => 8500],
        //     ['id' => 2, 'name' => 'Stanley Kubrick', 'age' => 33, 'salary' => 8000],
        //     ['id' => 3, 'name' => 'Martin Scorsese', 'age' => 29, 'salary' => 7900],
        //     ['id' => 4, 'name' => 'Mohammad', 'age' => 33, 'salary' => 8500],
        //     ['id' => 5, 'name' => 'Zara', 'age' => 28, 'salary' => 8200]
        // ];
        $employees = array(
            array(
              "id" => 1,
              "name" => "Alfred Hitchcock",
              "age" => 30,
              "salary" => 8000
            ),
            array(
              "id" => 2,
              "name" => "Stanley Kubrick",
              "age" => 29,
              "salary" => 7500
            ),
            array(
              "id" => 3,
              "name" => "Martin Scorsese",
              "age" => 33,
              "salary" => 8500
            ),
            array(
              "id" => 4,
              "name" => "Mohammad",
              "age" => 31,
              "salary" => 8200
            ),
            array(
              "id" => 5,
              "name" => "Zara",
              "age" => 28,
              "salary" => 8800
            )
          );
        return $employees;
    }

    /**
     * Get the list of Heat players
     */
    public function getHeatPlayers() {
        global $db;
        $res = $db->query("SELECT name, age, speed, accuracy FROM players");

        // translating from generic object to a Player object
        $players = [];
        foreach($res as $r) {
            $players[] = new Player($r->name, $r->age, $r->speed, $r->accuracy);
        }

        return $players;
    }

    /**
     * Save a new Heat player
     */
    public function addHeatPlayer($player) {
        global $db;
        $db->query("
            INSERT INTO players (`name`, `age`, `speed`, `accuracy`) 
            VALUES ('{$player->name}', {$player->age}, {$player->speed}, {$player->accuracy})");
    }
}
