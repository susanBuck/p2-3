<?php

require 'Aux/helpers.php';
require 'Dye.php';
require 'Form.php';
require 'MyForm.php';

use P2\Dye;
use P2\MyForm;

// START SESSION

session_start();

// INSTANTIATE FORM

$myForm = new MyForm($_GET);

// CONFIRM SUBMISSION

$submitted = $myForm->isSubmitted();

// GET FORM DATA TO VARIABLES

# "C-Y-D" Choose Your Dye: get (Form.php) and validate (MyForm.php)
$face = $myForm->get('face');
$nose = $myForm->get('nose');
$lips = $myForm->get('lips');
$eyes = $myForm->get('eyes');

if ($face == "none" && $nose == "none" && $lips == "none" && $eyes == "none") {
    $matchless = "face";
    $notNone = "cdyn";
} else if ($face == $nose || $face == $lips || $face == $eyes) {
    $matchless = "cdym";
    $notNone = "face";
} else {
    $matchless = "face";
    $notNone = "face";
}

# "L-S-N" Learn Something New
$myForm->has('lsn');
$lsn = $myForm->get('lsn');

# Add Indigo Overlay
$addIndigo = $myForm->get('addIndigo');

// VALIDATE

# Errors
$errors = $myForm->validateCustom(
    [
        'lsn' => 'requiredCustom1',
        $notNone => 'notNoneCustom1',
        $matchless => 'matchlessCustom1'
    ]
);

# If Has Errors
if (!$myForm->hasErrors) {

    // LOAD DATA

    $dyesJSON = file_get_contents('../p2Assets/Data/dyes.json');
    $dyes = json_decode($dyesJSON, true);

    // CREATE INSTANCES

    # Face object
    if ($face != "none") {
        $faceDye = new Dye($dyes, $face);
    } else {
        $faceDye = "";
    }
    # Nose object
    if ($nose != "none") {
        $noseDye = new Dye($dyes, $nose);
    } else {
        $noseDye = "";
    }
    # Lips object
    if ($lips != "none") {
        $lipsDye = new Dye($dyes, $lips);
    } else {
        $lipsDye = "";
    }
    # Eyes object
    if ($eyes != "none") {
        $eyesDye = new Dye($dyes, $eyes);
    } else {
        $eyesDye = "";
    }

    // COLORING SIDE-EFFECT

    # Face
    if ($faceDye != "" && $addIndigo) {
        $faceColor = "style='border-top-color: " . $faceDye->styleIndigoOverlay() . ";'";
    } else if ($faceDye != "") {
        $faceColor = "style='border-top-color: " . $faceDye->styleColor() . ";'";
    } else {
        $faceColor = "";
    }
    # Nose
    if ($noseDye != "" && $addIndigo) {
        $noseColor = "style='border-bottom-color: " . $noseDye->styleIndigoOverlay() . ";'";
    } else if ($noseDye != "") {
        $noseColor = "style='border-bottom-color: " . $noseDye->styleColor() . ";'";
    } else {
        $noseColor = "style='border-bottom-color: rgb(255,255,255);'";
    }
    # Lips
    if ($lipsDye != "" && $addIndigo) {
        $topLipColor = "style='border-bottom-color: " . $lipsDye->styleIndigoOverlay() . ";'";
        $botLipColor = "style='border-top-color: " . $lipsDye->styleIndigoOverlay() . ";'";
    } else if ($lipsDye != "") {
        $topLipColor = "style='border-bottom-color: " . $lipsDye->styleColor() . ";'";
        $botLipColor = "style='border-top-color: " . $lipsDye->styleColor() . ";'";
    } else {
        $topLipColor = "style='border-bottom-color: rgb(255,255,255);'";
        $botLipColor = "style='border-top-color: rgb(255,255,255);'";
    }
    # Eyes
    if ($eyesDye != "" && $addIndigo) {
        $topLidColor = "style='border-bottom-color: " . $eyesDye->styleIndigoOverlay() . ";'";
        $botLidColor = "style='border-top-color: " . $eyesDye->styleIndigoOverlay() . ";'";
    } else if ($eyesDye != "") {
        $topLidColor = "style='border-bottom-color: " . $eyesDye->styleColor() . ";'";
        $botLidColor = "style='border-top-color: " . $eyesDye->styleColor() . ";'";
    } else {
        $topLidColor = "style='border-bottom-color: rgb(255,255,255);'";
        $botLidColor = "style='border-top-color: rgb(255,255,255);'";
    }

    // LEARNING SIDE-EFFECT

    if ($lsn == "type") {
        # Face
        if ($faceDye != "") {
            $faceLearn = $faceDye->learnType($face);
        }
        # Nose
        if ($noseDye != "" && $nose != $face) {
            $noseLearn = $noseDye->learnType($nose);
        }
        # Lips
        if ($lipsDye != "" && $lips != $face && $lips != $nose) {
            $lipsLearn = $lipsDye->learnType($lips);
        }
        # Eyes
        if ($eyesDye != "" && $eyes != $face && $eyes != $nose && $eyes != $lips) {
            $eyesLearn = $eyesDye->learnType($eyes);
        }
    } else if ($lsn == "color") {
        # Face
        if ($faceDye != "") {
            $faceLearn = $faceDye->learnColor($face);
        }
        # Nose
        if ($noseDye != "" && $nose != $face) {
            $noseLearn = $noseDye->learnColor($nose);
        }
        # Lips
        if ($lipsDye != "" && $lips != $face && $lips != $nose) {
            $lipsLearn = $lipsDye->learnColor($lips);
        }
        # Eyes
        if ($eyesDye != "" && $eyes != $face && $eyes != $nose && $eyes != $lips) {
            $eyesLearn = $eyesDye->learnColor($eyes);
        }
    } else if ($lsn == "name") {
        # Face
        if ($faceDye != "") {
            $faceLearn = $faceDye->learnName($face);
        }
        # Nose
        if ($noseDye != "" && $nose != $face) {
            $noseLearn = $noseDye->learnName($nose);
        }
        # Lips
        if ($lipsDye != "" && $lips != $face && $lips != $nose) {
            $lipsLearn = $lipsDye->learnName($lips);
        }
        # Eyes
        if ($eyesDye != "" && $eyes != $face && $eyes != $nose && $eyes != $lips) {
            $eyesLearn = $eyesDye->learnName($eyes);
        }
    } else if ($lsn == "geography") {
        # Face
        if ($faceDye != "") {
            $faceLearn = $faceDye->learnGeography($face);
        }
        # Nose
        if ($noseDye != "" && $nose != $face) {
            $noseLearn = $noseDye->learnGeography($nose);
        }
        # Lips
        if ($lipsDye != "" && $lips != $face && $lips != $nose) {
            $lipsLearn = $lipsDye->learnGeography($lips);
        }
        # Eyes
        if ($eyesDye != "" && $eyes != $face && $eyes != $nose && $eyes != $lips) {
            $eyesLearn = $eyesDye->learnGeography($eyes);
        }
    }
}

// FILL SESSION WITH VARIABLES

$_SESSION['results'] = [
    'errors' => $errors,
    'hasErrors' => $myForm->hasErrors,
    'face' => $face,
    'nose' => $nose,
    'lips' => $lips,
    'eyes' => $eyes,
    'lsn' => $lsn,
    'addIndigo' => $addIndigo,
    'faceColor' => $faceColor,
    'eyesColor' => $eyesColor,
    'noseColor' => $noseColor,
    'topLipColor' => $topLipColor,
    'botLipColor' => $botLipColor,
    'topLidColor' => $topLidColor,
    'botLidColor' => $botLidColor,
    'faceLearn' => $faceLearn,
    'noseLearn' => $noseLearn,
    'lipsLearn' => $lipsLearn,
    'eyesLearn' => $eyesLearn
];

// REDIRECT TO PAGE

header('Location: ../index.php');