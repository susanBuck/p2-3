<?php
require('p2PHP/helpers.php');
require('p2PHP/logic.php');
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
    <a id="myName" href="#"></a>
</nav>

<main>
    <div id='maskBox'>
        <div class='frameBrace fB1'></div>
        <div class='frameBrace fB2'></div>
        <div class='frameBrace fB3'></div>
        <div class='frameBrace fB4'></div>
        <div id='face'></div>
        <div id='nose'></div>
        <div id='topLip'></div>
        <div id='botLip'></div>
        <div id='leftLidTop'></div>
        <div id='leftLidBot'></div>
        <div id='rightLidTop'></div>
        <div id='rightLidBot'></div>
    </div>
    <form method='GET' action='/p2PHP/dye.php'>
        <section class='formFloat fF1'>
            <h1>"C-Y-D" (Choose Your Dyes)</h1>
            <label>Face ::
                <select name='face'>
                    <option value='none'>none</option>
                    <option value='alkanet'>alkanet</option>
                    <option value='brazilwood'>brazilwood</option>
                    <option value='chamomile'>chamomile</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='henna'>henna</option>
                    <option value='indigo'>indigo</option>
                    <option value='lac'>lac</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho'>quebracho</option>
                </select>
            </label>
            <label>Eyes ::
                <select name='eyes'>
                    <option value='none'>none</option>
                    <option value='alkanet'>alkanet</option>
                    <option value='brazilwood'>brazilwood</option>
                    <option value='chamomile'>chamomile</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='henna'>henna</option>
                    <option value='indigo'>indigo</option>
                    <option value='lac'>lac</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho'>quebracho</option>
                </select>
            </label>
            <label>Nose ::
                <select name='nose'>
                    <option value='none'>none</option>
                    <option value='alkanet'>alkanet</option>
                    <option value='brazilwood'>brazilwood</option>
                    <option value='chamomile'>chamomile</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='henna'>henna</option>
                    <option value='indigo'>indigo</option>
                    <option value='lac'>lac</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho'>quebracho</option>
                </select>
            </label>
            <label>Lips ::
                <select name='lips'>
                    <option value='none'>none</option>
                    <option value='alkanet'>alkanet</option>
                    <option value='brazilwood'>brazilwood</option>
                    <option value='chamomile'>chamomile</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='henna'>henna</option>
                    <option value='indigo'>indigo</option>
                    <option value='lac'>lac</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho'>quebracho</option>
                </select>
            </label>
        </section>

        <section class='formFloat fF2'>
            <h1>"L-S-N" (Learn Something New)</h1>
            <fieldset>
                <label>
                    <input type='radio' name='lsn' value='type' checked>
                    <span>Description&nbsp;Type</span>
                </label>
                <label>
                    <input type='radio' name='lsn' value='name'>
                    <span>Scientific&nbsp;Name</span>
                </label>
                <label>
                    <input type='radio' name='lsn' value='color'>
                    <span>Color&nbsp;Range</span>
                </label>
                <label>
                    <input type='radio' name='lsn' value='geography'>
                    <span>Geographical&nbsp;Region</span>
                </label>
            </fieldset>
        </section>

        <div class='formFloat fF3'>
            <label>
                <input type='checkbox' name='addIndigo'>
                <span>Add an indigo overlay</span>
            </label>
        </div>

        <input class='formFloat fF4' type='submit' value='Dye It!'>

    </form>
</main>

</body>
</html>



