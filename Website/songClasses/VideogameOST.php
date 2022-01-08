<?php

class VideogameOST implements JsonSerializable
{

    public function __construct(int $id, string $name, string $videoGameName, string $releaseYear, array $tracks)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracks = $tracks;
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return[
            'id'=> $this->id,
            'name'=> $this->name,
            'videoGameName'=> $this->videoGameName,
            'releaseYear'=> $this->releaseYear,
            'tracks'=> $this->tracks,
        ];
    }
}
