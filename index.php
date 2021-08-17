<?php
$x=23;
$y=24;

function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];

}
addition();
echo $z;
?>