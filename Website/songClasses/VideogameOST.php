<?php

class VideogameOST
{

    public function __construct(int $id, string $name, string $videoGameName, string $releaseYear, array $tracks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracks = $tracks;
    }

    
}
