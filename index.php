<?php
$films = [
    "Les aventuriers de l'arche perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman"] ,
    "Indiana Jones et le tombeau de l'empereur" => [ "David Esch", "Vivian Wu", "Keone Young" ],
    "Indiana Jones et la machine infernale" => ["Doug Lee", "Tasia Valenza", "Victor Raider-Wexler" ]

];

foreach($films as $title => $film){
    echo "Dans le film <strong>". $title ."</strong> les principaux acteurs sont :<br>" ;
    foreach ($film as $actor => $actornme){
        echo " $actornme .<br>" ;
    } 
}
