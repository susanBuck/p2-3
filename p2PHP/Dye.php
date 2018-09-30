<?php

namespace P2;

class Dye
{

    // PROPERTIES
    # Fields
    private $color;
    private $geography;
    private $name;
    private $rgb;
    private $type;

    // METHODS
    # Constructor
    public function __construct($dyes, $dye)
    {
        $this->color = $dyes[$dye]['color'];
        $this->geography = $dyes[$dye]['geography'];
        $this->name = $dyes[$dye]['name'];
        $this->rgb = $dyes[$dye]['rgb'];
        $this->type = $dyes[$dye]['type'];
    }

    # Getters
    public function getColor()
    {
        return $this->color;
    }

    # Coloring
    public function styleColor()
    {
        $rgbVal = "rgb(" . $this->rgb[0] . "," . $this->rgb[1] . "," . $this->rgb[2] . ")";

        return $rgbVal;
    }

    public function styleIndigoOverlay()
    {
        $rgbVal = "rgb(" . ceil(($this->rgb[0] - 33) / 1.13) . "," . ceil(($this->rgb[1] - 10) / 1.04)
            . "," . ceil(($this->rgb[2] - 146) / 1.57) . ")";

        return $rgbVal;
    }

    # Learning
    public function learnType($dye)
    {
        $dye = ucfirst($dye);

        if (substr($this->type, 0, 1) == "a" || substr($this->type, 0, 1) == "e"
            || substr($this->type, 0, 1) == "i" || substr($this->type, 0, 1) == "o"
            || substr($this->type, 0, 1) == "u") {

            $message = "<p>&#x25cf; " . $dye . " is an " . $this->type . ".</p>";
        } else {
            $message = "<p>&#x25cf; " . $dye . " is a " . $this->type . ".</p>";
        }

        return $message;
    }

    public function learnColor($dye)
    {
        $dye = ucfirst($dye);

        $colorRange = "";
        for ($i = 0; $i < count($this->color); $i++) {
            if ($i == 0) {
                $colorRange .= "from " . $this->color[$i];
            } else {
                $colorRange .= " to " . $this->color[$i];
            }
        }

        $message = "<p>&#x25cf; " . $dye . " ranges " . $colorRange . ".</p>";

        return $message;
    }

    public function learnName($dye)
    {
        $dye = ucfirst($dye);

        $message = "<p>&#x25cf; " . $dye . ", " . "<em>" . $this->name . "</em>" . ".</p>";

        return $message;
    }

    public function learnGeography($dye)
    {
        $dye = ucfirst($dye);

        $geoRange = "";
        for ($i = 0; $i < count($this->geography); $i++) {
            if ($i == 0) {
                $geoRange .= $this->geography[$i];
            } else if ($i == count($this->geography) - 1) {
                $geoRange .= " and " . $this->geography[$i];
            } else {
                $geoRange .= ", " . $this->geography[$i];
            }
        }

        $message = "<p>&#x25cf; " . $dye . " sources: " . $geoRange . ".</p>";

        return $message;
    }

}