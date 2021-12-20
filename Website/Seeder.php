<?php



require_once "songClasses/VideogameOST.php";
require_once "songClasses/Track.php";


class Seeder
{

    public function seed()
    {
        $videogames[] = new VideogameOST(1, "Super Mario Bros Theme", "Super Mario Bros", "2000", [
            new Track(1, "Intro", "Koji Kondo", 1, "1:54"),
            new Track(2, "World 1", "Koji Kondo", 2, "2:33"),
            new Track(3, "World 2", "Koji Kondo", 3, "5:33")
        ]);
        $videogames[] = new VideogameOST(1, "Super Mario Bros Theme", "Super Mario Bros", "2000", [
            new Track(1, "Intro", "Koji Kondo", 1, "1:54"),
            new Track(2, "World 1", "Koji Kondo", 2, "2:33"),
            new Track(3, "World 2", "Koji Kondo", 3, "5:33")
        ]);
        $videogames[] = new VideogameOST(1, "Super Mario Bros Theme", "Super Mario Bros", "2000", [
            new Track(1, "Intro", "Koji Kondo", 1, "1:54"),
            new Track(2, "World 1", "Koji Kondo", 2, "2:33"),
            new Track(3, "World 2", "Koji Kondo", 3, "5:33")
        ]);
        
    }
}
