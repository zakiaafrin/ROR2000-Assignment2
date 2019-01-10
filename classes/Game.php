<?php

class Game {
    public static $name = "Basketball";
    public static $team = [];
    public static $season = "";
    public static $match = 0;

    public static function run() {
        // make all players trow three times
        foreach(Game::$team as $player) {
            $player->thowFreeShot();
            $player->thowFreeShot();
            $player->thowFreeShot();
        }
    }
}
