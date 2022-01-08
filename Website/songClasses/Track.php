<?php

namespace M3_VideogameOST\Website\songClasses;

use JsonSerializable;

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

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'tracknumber' => $this->tracknumber,
            'duration' => $this->duration,
        ];
    }
}
