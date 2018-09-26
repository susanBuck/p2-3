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
    <form method='GET'>
        <section class='formFloat fF1'>
            <h1>"C-Y-D" (Choose Your Dyes)</h1>
            <label>Face ::
                <select name='face'>
                    <option value='none'>none</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='cutch'>cutch</option>
                    <option value='gall_tannin'>gall tannin</option>
                    <option value='himalayan_rhubarb'>himalayan rhubarb</option>
                    <option value='indigo'>indigo</option>
                    <option value='kamala'>kamala</option>
                    <option value='laca'>laca</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho_roho'>quebracho roho</option>
                    <option value='tara'>tara</option>
                    <option value='wattle'>wattle</option>
                    <option value='weld'>weld</option>
                </select>
            </label>
            <label>Eyes ::
                <select name='eyes'>
                    <option value='none'>none</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='cutch'>cutch</option>
                    <option value='gall_tannin'>gall tannin</option>
                    <option value='himalayan_rhubarb'>himalayan rhubarb</option>
                    <option value='indigo'>indigo</option>
                    <option value='kamala'>kamala</option>
                    <option value='laca'>laca</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho_roho'>quebracho roho</option>
                    <option value='tara'>tara</option>
                    <option value='wattle'>wattle</option>
                    <option value='weld'>weld</option>
                </select>
            </label>
            <label>Nose ::
                <select name='nose'>
                    <option value='none'>none</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='cutch'>cutch</option>
                    <option value='gall_tannin'>gall tannin</option>
                    <option value='himalayan_rhubarb'>himalayan rhubarb</option>
                    <option value='indigo'>indigo</option>
                    <option value='kamala'>kamala</option>
                    <option value='laca'>laca</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho_roho'>quebracho roho</option>
                    <option value='tara'>tara</option>
                    <option value='wattle'>wattle</option>
                    <option value='weld'>weld</option>
                </select>
            </label>
            <label>Lips ::
                <select name='lips'>
                    <option value='none'>none</option>
                    <option value='chesnut'>chesnut</option>
                    <option value='cochineal'>cochineal</option>
                    <option value='cutch'>cutch</option>
                    <option value='gall_tannin'>gall tannin</option>
                    <option value='himalayan_rhubarb'>himalayan rhubarb</option>
                    <option value='indigo'>indigo</option>
                    <option value='kamala'>kamala</option>
                    <option value='laca'>laca</option>
                    <option value='logwood'>logwood</option>
                    <option value='madder'>madder</option>
                    <option value='pomegranate'>pomegranate</option>
                    <option value='quebracho_roho'>quebracho roho</option>
                    <option value='tara'>tara</option>
                    <option value='wattle'>wattle</option>
                    <option value='weld'>weld</option>
                </select>
            </label>
        </section>

        <section class='formFloat fF2'>
            <h1>"L-S-N" (Learn Something New)</h1>
            <fieldset>
                <label>
                    <input type='radio' name='lsn' checked>
                    <span>Description&nbsp;Type</span>
                </label>
                <label>
                    <input type='radio' name='lsn'>
                    <span>Scientific&nbsp;Name</span>
                </label>
                <label>
                    <input type='radio' name='lsn'>
                    <span>Color&nbsp;Range</span>
                </label>
                <label>
                    <input type='radio' name='lsn'>
                    <span>Geographical&nbsp;Region</span>
                </label>
            </fieldset>
        </section>

        <div class='formFloat fF3'>
            <label>
                <input type='checkbox' name='lsn'>
                <span>Add an indigo overlay</span>
            </label>
        </div>

        <input class='formFloat fF4' type='submit' value='Dye It!'>

    </form>
</main>

</body>
</html>



