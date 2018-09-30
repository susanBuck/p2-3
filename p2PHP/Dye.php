<?php

namespace P2;

class Dye
{

    // PROPERTIES
    # Fields
    private $title;
    private $color;
    private $geography;
    private $name;
    private $rgb;
    private $type;

    // METHODS
    # Constructor
    public function __construct($title, $dye)
    {
        $this->title = $title;
        $this->color = $dye['color'];
        $this->geography = $dye['geography'];
        $this->name = $dye['name'];
        $this->rgb = $dye['rgb'];
        $this->type = $dye['type'];
    }

    # Getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getGeography()
    {
        return $this->geography;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRgb()
    {
        return $this->rgb;
    }

    public function getType()
    {
        return $this->type;
    }

    # Coloring
    public function styleColor()
    {
        $rgbVal = "rgb(" . $this->rgb[0] . "," . $this->rgb[1] . "," . $this->rgb[2] . ")";

        return $rgbVal;
    }

    public function styleIndigoOverlay()
    {
        $rgbVal = "rgb(" . ceil(($this->rgb[0] + 33) / 1.5) . "," . ceil(($this->rgb[1] + 10) / 1)
            . "," . ceil(($this->rgb[2] + 146) / 2) . ")";

        return $rgbVal;
    }

    # Learning
    public function learnColor()
    {


    }
}