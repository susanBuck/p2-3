<?php
require 'p2PHP/logic.php';
?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/p2CSS/styles.css">

    <title>Dyed Mask</title>

</head>

<body>

<nav>
    <a id='diyDye' href='index.php'><img src='/p2Assets/p2_diyDyeLab.svg' alt='DIY DYE LAB' /></a>
</nav>

<main>
    <div id='maskBox'>
        <div class='frameBrace fB1'></div>
        <div class='frameBrace fB2'></div>
        <div class='frameBrace fB3'></div>
        <div class='frameBrace fB4'></div>
        <div id='face' <?php if (isset($face, $faceColor)) echo $faceColor ?>></div>
        <div id='nose' <?php if (isset($nose, $noseColor)) echo $noseColor ?>></div>
        <div id='topLip' <?php if (isset($lips, $topLipColor)) echo $topLipColor ?>></div>
        <div id='botLip' <?php if (isset($lips, $botLipColor)) echo $botLipColor ?>></div>
        <div id='leftLidTop' <?php if (isset($eyes, $topLidColor)) echo $topLidColor ?>></div>
        <div id='leftLidBot' <?php if (isset($eyes, $botLidColor)) echo $botLidColor ?>></div>
        <div id='rightLidTop' <?php if (isset($eyes, $topLidColor)) echo $topLidColor ?>></div>
        <div id='rightLidBot' <?php if (isset($eyes, $botLidColor)) echo $botLidColor ?>></div>
    </div>
    <form method='GET' action='/p2PHP/process.php'>
        <section class='formFloat fF1'>
            <h1>"C-Y-D" (Choose Your Dyes)*</h1>
            <label>Face ::
                <select name='face'>
                    <option value='none'>none</option>
                    <option value='alkanet' <?php if (isset($face) && $face == "alkanet") echo "selected" ?>>
                        alkanet
                    </option>
                    <option value='brazilwood' <?php if (isset($face) && $face == "brazilwood") echo "selected" ?>>
                        brazilwood
                    </option>
                    <option value='chamomile' <?php if (isset($face) && $face == "chamomile") echo "selected" ?>>
                        chamomile
                    </option>
                    <option value='chesnut' <?php if (isset($face) && $face == "chesnut") echo "selected" ?>>
                        chesnut
                    </option>
                    <option value='cochineal' <?php if (isset($face) && $face == "cochineal") echo "selected" ?>>
                        cochineal
                    </option>
                    <option value='henna' <?php if (isset($face) && $face == "henna") echo "selected" ?>>
                        henna
                    </option>
                    <option value='indigo' <?php if (isset($face) && $face == "indigo") echo "selected" ?>>
                        indigo
                    </option>
                    <option value='lac' <?php if (isset($face) && $face == "lac") echo "selected" ?>>
                        lac
                    </option>
                    <option value='logwood' <?php if (isset($face) && $face == "logwood") echo "selected" ?>>
                        logwood
                    </option>
                    <option value='madder' <?php if (isset($face) && $face == "madder") echo "selected" ?>>
                        madder
                    </option>
                    <option value='pomegranate' <?php if (isset($face) && $face == "pomegranate") echo "selected" ?>>
                        pomegranate
                    </option>
                    <option value='quebracho' <?php if (isset($face) && $face == "quebracho") echo "selected" ?>>
                        quebracho
                    </option>
                </select>
            </label>
            <label>Nose ::
                <select name='nose'>
                    <option value='none'>none</option>
                    <option value='alkanet' <?php if (isset($nose) && $nose == "alkanet") echo "selected" ?>>
                        alkanet
                    </option>
                    <option value='brazilwood' <?php if (isset($nose) && $nose == "brazilwood") echo "selected" ?>>
                        brazilwood
                    </option>
                    <option value='chamomile' <?php if (isset($nose) && $nose == "chamomile") echo "selected" ?>>
                        chamomile
                    </option>
                    <option value='chesnut' <?php if (isset($nose) && $nose == "chesnut") echo "selected" ?>>
                        chesnut
                    </option>
                    <option value='cochineal' <?php if (isset($nose) && $nose == "cochineal") echo "selected" ?>>
                        cochineal
                    </option>
                    <option value='henna' <?php if (isset($nose) && $nose == "henna") echo "selected" ?>>
                        henna
                    </option>
                    <option value='indigo' <?php if (isset($nose) && $nose == "indigo") echo "selected" ?>>
                        indigo
                    </option>
                    <option value='lac' <?php if (isset($nose) && $nose == "lac") echo "selected" ?>>
                        lac
                    </option>
                    <option value='logwood' <?php if (isset($nose) && $nose == "logwood") echo "selected" ?>>
                        logwood
                    </option>
                    <option value='madder' <?php if (isset($nose) && $nose == "madder") echo "selected" ?>>
                        madder
                    </option>
                    <option value='pomegranate' <?php if (isset($nose) && $nose == "pomegranate") echo "selected" ?>>
                        pomegranate
                    </option>
                    <option value='quebracho' <?php if (isset($nose) && $nose == "quebracho") echo "selected" ?>>
                        quebracho
                    </option>
                </select>
            </label>
            <br/>
            <label>Lips ::
                <select name='lips'>
                    <option value='none'>none</option>
                    <option value='alkanet' <?php if (isset($lips) && $lips == "alkanet") echo "selected" ?>>
                        alkanet
                    </option>
                    <option value='brazilwood' <?php if (isset($lips) && $lips == "brazilwood") echo "selected" ?>>
                        brazilwood
                    </option>
                    <option value='chamomile' <?php if (isset($lips) && $lips == "chamomile") echo "selected" ?>>
                        chamomile
                    </option>
                    <option value='chesnut' <?php if (isset($lips) && $lips == "chesnut") echo "selected" ?>>
                        chesnut
                    </option>
                    <option value='cochineal' <?php if (isset($lips) && $lips == "cochineal") echo "selected" ?>>
                        cochineal
                    </option>
                    <option value='henna' <?php if (isset($lips) && $lips == "henna") echo "selected" ?>>
                        henna
                    </option>
                    <option value='indigo' <?php if (isset($lips) && $lips == "indigo") echo "selected" ?>>
                        indigo
                    </option>
                    <option value='lac' <?php if (isset($lips) && $lips == "lac") echo "selected" ?>>
                        lac
                    </option>
                    <option value='logwood' <?php if (isset($lips) && $lips == "logwood") echo "selected" ?>>
                        logwood
                    </option>
                    <option value='madder' <?php if (isset($lips) && $lips == "madder") echo "selected" ?>>
                        madder
                    </option>
                    <option value='pomegranate' <?php if (isset($lips) && $lips == "pomegranate") echo "selected" ?>>
                        pomegranate
                    </option>
                    <option value='quebracho' <?php if (isset($lips) && $lips == "quebracho") echo "selected" ?>>
                        quebracho
                    </option>
                </select>
            </label>
            <label>Eyes ::
                <select name='eyes'>
                    <option value='none'>none</option>
                    <option value='alkanet' <?php if (isset($eyes) && $eyes == "alkanet") echo "selected" ?>>
                        alkanet
                    </option>
                    <option value='brazilwood' <?php if (isset($eyes) && $eyes == "brazilwood") echo "selected" ?>>
                        brazilwood
                    </option>
                    <option value='chamomile' <?php if (isset($eyes) && $eyes == "chamomile") echo "selected" ?>>
                        chamomile
                    </option>
                    <option value='chesnut' <?php if (isset($eyes) && $eyes == "chesnut") echo "selected" ?>>
                        chesnut
                    </option>
                    <option value='cochineal' <?php if (isset($eyes) && $eyes == "cochineal") echo "selected" ?>>
                        cochineal
                    </option>
                    <option value='henna' <?php if (isset($eyes) && $eyes == "henna") echo "selected" ?>>
                        henna
                    </option>
                    <option value='indigo' <?php if (isset($eyes) && $eyes == "indigo") echo "selected" ?>>
                        indigo
                    </option>
                    <option value='lac' <?php if (isset($eyes) && $eyes == "lac") echo "selected" ?>>
                        lac
                    </option>
                    <option value='logwood' <?php if (isset($eyes) && $eyes == "logwood") echo "selected" ?>>
                        logwood
                    </option>
                    <option value='madder' <?php if (isset($eyes) && $eyes == "madder") echo "selected" ?>>
                        madder
                    </option>
                    <option value='pomegranate' <?php if (isset($eyes) && $eyes == "pomegranate") echo "selected" ?>>
                        pomegranate
                    </option>
                    <option value='quebracho' <?php if (isset($eyes) && $eyes == "quebracho") echo "selected" ?>>
                        quebracho
                    </option>
                </select>
            </label>
        </section>

        <section class='formFloat fF2'>
            <h1>"L-S-N" (Learn Something New)*</h1>
            <fieldset>
                <label>
                    <input type='radio'
                           name='lsn'
                           value='type' <?php if (isset($lsn) && $lsn == "type") echo "checked" ?>>
                    <span>Description&nbsp;Type</span>
                </label>
                <label>
                    <input type='radio'
                           name='lsn'
                           value='name' <?php if (isset($lsn) && $lsn == "name") echo "checked" ?>>
                    <span>Scientific&nbsp;Name</span>
                </label>
                <br/>
                <label>
                    <input type='radio'
                           name='lsn'
                           value='color' <?php if (isset($lsn) && $lsn == "color") echo "checked" ?>>
                    <span>Color&nbsp;Range</span>
                </label>
                <label>
                    <input type='radio'
                           name='lsn'
                           value='geography' <?php if (isset($lsn) && $lsn == "geography") echo "checked" ?>>
                    <span>Geographical&nbsp;Region</span>
                </label>
            </fieldset>
        </section>

        <div class='formFloat fF3'>
            <label>
                <input type='checkbox' name='addIndigo' <?php if (isset($addIndigo) && $addIndigo) echo "checked" ?>>
                <span>Add an indigo overlay&nbsp;</span><a>&#9432;</a><a>+ bluish tint</a>
            </label>
        </div>

        <input class='formFloat fF4' type='submit' value='Dye It!'>

        <?php if (isset($hasErrors) && $hasErrors): ?>
            <div class='formFloat fF5 fF5A'>
                <?php foreach ($errors as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if (isset($face, $eyes, $nose, $lips) && isset($hasErrors) && !$hasErrors): ?>
            <div class='formFloat fF5 fF5B'>
                <?php if ($face != "none" && isset($faceLearn)) echo $faceLearn ?>
                <?php if ($nose != "none" && isset($noseLearn)) echo $noseLearn ?>
                <?php if ($lips != "none" && isset($lipsLearn)) echo $lipsLearn ?>
                <?php if ($eyes != "none" && isset($eyesLearn)) echo $eyesLearn ?>
            </div>
        <?php endif ?>


    </form>
</main>

</body>
</html>



