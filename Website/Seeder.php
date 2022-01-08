<?php

namespace M3_VideogameOST\Website;
use M3_VideogameOST\Website\songClasses\VideogameOST;
use M3_VideogameOST\Website\songClasses\Track;

require_once "songClasses/VideogameOST.php";
require_once "songClasses/Track.php";


class Seeder
{

    public static function seed()
    {
        $videogames[] = new VideogameOST(1, "Super Mario Bros Theme", "Super Mario Bros", "2000", [
            new Track(1, "Intro", "Koji Kondo", 1, "1:54"),
            new Track(2, "World 1", "Koji Kondo", 2, "2:33"),
            new Track(3, "World 2", "Koji Kondo", 3, "5:33"),
            new Track(4, "World 3", "Koji Kondo", 3, "1:33")
        ]);
        $videogames[] = new VideogameOST(2, "Minecraft", "Minecraft Lets Play", "2011", [
            new Track(1, "Key", "Daniel Rosenfeld", 1, "1:05"),
            new Track(2, "Door", "Daniel Rosenfeld", 2, "1:51"),
            new Track(3, "Subwoofer Lullaby", "Daniel Rosenfeld", 3, "3:28"),
            new Track(4, "Death", "Daniel Rosenfeld", 4, "0:41")
        ]);
        $videogames[] = new VideogameOST(1, "Far Cry 5 OST", "Far Cry 5", "2018", [
            new Track(1, "The Resistance", "Dan Romer", 1, "3:54"),
            new Track(2, "The Sinful Life", "Dan Romer", 5, "4:33"),
            new Track(3, "Let the Water Wash Away Sins", "Dan Romer", 10, "6:33"),
            new Track(4, "You cannot Trust a Liar", "Dan Romer", 3, "2:18")
        ]);

        $allOSTs = array('Super Mario'=>$videogames[0], 'Minecraft'=>$videogames[1], 'Far Cry 5'=>$videogames[2]);

        return $allOSTs;
    }
}
