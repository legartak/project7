<?php

namespace App\Models;

class Driver
{
    public string $name;
    public string $current_team;
    public string $photo;
    public string $country;
    public int $years;

    public function __construct(string $name, string $current_team, string $photo, string $country, int $years)
    {
        $this->name = $name;
        $this->current_team = $current_team;
        $this->photo = $photo;
        $this->country = $country;
        $this->years = $years;
    }
}
