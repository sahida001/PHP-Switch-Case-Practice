<?php

$amount = 71;
$type = 'won';

switch($type){
    case 'dollar':
        $rate = 85.34;
        break;

    case 'Pound':
        $rate = 116;
        break;
    
    case 'Euro':
        $rate = 95;
        break;  
        
    case 'Won':
        $rate = 71;
        break;    
    default : 
      $rate = 0;
      break;
}
    $bdt = $amount * $rate;
    echo " {$amount} {$type} = { $bdt} BDT ";
?>