<?php

//$text = readfile('ex.txt');
//echo $text

$file = 'ex.txt';

if(file_exists($file)){

    echo readfile($file) . '<br />';

    copy($file, 'heeeey.txt') ;

//    echo realpath($file) . '<br />';
//    echo filesize($file) . '<br />';

    rename($file , 'test.txt');

}else{
    echo "file doesn't exit" ;
};


?>