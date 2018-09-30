<?php

require 'Aux/helpers.php';
require 'Dye.php';

use P2\Dye;

// START SESSION
session_start();

// GET FORM DATA TO VARIABLES
# "C-Y-D" Choose Your Dye
$face = $_GET['face'];
$nose = $_GET['nose'];
$lips = $_GET['lips'];
$eyes = $_GET['eyes'];
# "L-S-N" Learn Something New
if (isset($_GET['lsn'])) {
    $lsn = $_GET['lsn'];
} else {
    $lsn = "";
}
# Add Indigo Overlay
$addIndigo = isset($_GET['addIndigo']);

// LOAD DATA
$dyesJSON = file_get_contents('../p2Assets/Data/dyes.json');
$dyes = json_decode($dyesJSON, true);

// CREATE INSTANCES
foreach ($dyes as $title => $dye) {
    # Face Object
    if ($face == $title) {
        $faceDye = new Dye($title, $dye);
    }
    # Nose Object
    if ($nose == $title) {
        $noseDye = new Dye($title, $dye);
    }
    # Lips Object
    if ($lips == $title) {
        $lipsDye = new Dye($title, $dye);
    }
    # Eyes Object
    if ($eyes == $title) {
        $eyesDye = new Dye($title, $dye);
    }
}

// COLORING SIDE-EFFECT
# FACE
if ($faceDye != null && $addIndigo) {
    $faceColor = "style='border-top-color: " . $faceDye->styleIndigoOverlay() . ";'";
} elseif ($faceDye != null) {
    $faceColor = "style='border-top-color: " . $faceDye->styleColor() . ";'";
} else {
    $faceDye = "";
    $faceColor = "";
}
# NOSE
if ($noseDye != null && $addIndigo) {
    $noseColor = "style='border-bottom-color: " . $noseDye->styleIndigoOverlay() . ";'";
} elseif ($noseDye != null) {
    $noseColor = "style='border-bottom-color: " . $noseDye->styleColor() . ";'";
} else {
    $noseDye = "";
    $noseColor = "";
}
# LIPS
if ($lipsDye != null && $addIndigo) {
    $topLipColor = "style='border-bottom-color: " . $lipsDye->styleIndigoOverlay() . ";'";
    $botLipColor = "style='border-top-color: " . $lipsDye->styleIndigoOverlay() . ";'";
} elseif ($lipsDye != null) {
    $topLipColor = "style='border-bottom-color: " . $lipsDye->styleColor() . ";'";
    $botLipColor = "style='border-top-color: " . $lipsDye->styleColor() . ";'";
} else {
    $lipsDye = "";
    $topLipColor = "";
    $botLipColor = "";
}
# EYES
if ($eyesDye != null && $addIndigo) {
    $topLidColor = "style='border-bottom-color: " . $eyesDye->styleIndigoOverlay() . ";'";
    $botLidColor = "style='border-top-color: " . $eyesDye->styleIndigoOverlay() . ";'";
} elseif ($eyesDye != null) {
    $topLidColor = "style='border-bottom-color: " . $eyesDye->styleColor() . ";'";
    $botLidColor = "style='border-top-color: " . $eyesDye->styleColor() . ";'";
} else {
    $eyesDye = "";
    $topLidColor = "";
    $botLidColor = "";
}

// FILL SESSION WITH VARIABLES
$_SESSION['results'] = [
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
    'botLidColor' => $botLidColor
];

// REDIRECT TO PAGE
header('Location: ../index.php');