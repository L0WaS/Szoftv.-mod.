<?php

//be kell �ll�tani , hogy mely almapp�ba tegye a k�pf�jlt

    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../../img/' . $_FILES['file']['name']);
    }

?>