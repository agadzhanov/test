<?php

$players = [
	'Вася',
        'Коля',
	'Бубеньчик',
	'Веточка'
];

function getname ($players, $playerIndex)
{
    if (empty($playerIndex) || !is_numeric($playerIndex) || intval($playerIndex) != $playerIndex) {
        throw new Exception ('Wrong player index');
    }
    
    --$playerIndex;

    $realIndex = $playerIndex % count($players);
    
    return $players[$realIndex];
}


