<?php

class Track
{

    public function __construct(int $id, string $name, string $artist, int $tracknumber, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->tracknumber = $tracknumber;
        $this->duration = $duration;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function getTracknumber()
    {
        return $this->tracknumber;
    }
}
