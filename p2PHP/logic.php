<?php

// START SESSION
session_start();

// GET SESSION DATA
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $face = $results['face'];
    $nose = $results['nose'];
    $lips = $results['lips'];
    $eyes = $results['eyes'];
    $lsn = $results['lsn'];
    $addIndigo = $results['addIndigo'];
    $faceColor = $results['faceColor'];
    $noseColor = $results['noseColor'];
    $topLipColor = $results['topLipColor'];
    $botLipColor = $results['botLipColor'];
    $topLidColor = $results['topLidColor'];
    $botLidColor = $results['botLidColor'];
    $faceLearn = $results['faceLearn'];
    $noseLearn = $results['noseLearn'];
    $lipsLearn = $results['lipsLearn'];
    $eyesLearn = $results['eyesLearn'];
}

// CLEAR SESSION
session_unset();
