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

    if (empty($players[$playerIndex])) {
        throw new Exception ('Player is not found');
    }
    
    return $players[$playerIndex];
}


