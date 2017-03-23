<form method="post">
    <select name="fruit">
        <option value="">Select a Fruit!</option>
        <option value="Appel">Appel</option>
        <option value="Banaan">Banaan</option>
        <option value="Aardbei">Aardbei</option>
        <input  type="submit" name="submit" value="go!">
    </select>
    </form>



<?php

$fruit = $_POST['fruit'];
switch ($fruit) {

    case 'Appel';
        echo 'Eat this Appel';
        echo '<img src="http://jungheimboomkwekerijen.nl/wp-content/uploads/2016/01/Appel-Groninger-Kroon.jpg"' ;
            break;
    case 'Banaan';
            echo 'Eat this banaan';
            echo 'http://www.jamiemagazine.nl/upload/artikel/jm/banaan-vierkant.jpg';
            break;
    case 'Aardbei';
        echo 'Eat this Aardbei';
        echo 'http://www.coovi.be/sites/www.elishout.be/files/aardbeigroot.jpg';
        break;
    default:
        echo 'I don;t know what fruit that is';
}
?>