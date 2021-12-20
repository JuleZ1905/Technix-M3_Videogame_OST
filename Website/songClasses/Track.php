<?php

class Track implements JsonSerializable
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

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return[
            'id'=> $this->id,
            'name'=> $this->name,
            'artist'=> $this->artist,
            'tracknumber'=> $this->tracknumber,
            'duration'=> $this->duration,
        ];
    }
}
