<?php 

    $objDirectory = new DirectoryIterator('../cursophp4linux');
    
    foreach ($objDirectory as $item)
    {
        echo $item->getFilename() . '<br>';
    }


?>