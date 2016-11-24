<?php
$input = ['west', 'west', 'east', 'east', 'south', 'south', 'south', 'north', 'north', 'north'];
function convertData (array $input)
{
    static $mapping = [
        'north' => [0, 1],
	'east'  => [1, 0],
	'south' => [0, -1],
	'west'  => [-1, 0]
    ];
	
    $fn = function($a) use ($mapping) {
	if (!isset($mapping[$a])) {
		throw new Exception('invalid data');
	}
	    
        return $mapping[$a];
    };
	
    return array_map($fn, $input);
}
function validate(array $nav)
{
    $steps = convertData($nav);
	
    if (count($steps) != 10) {
	return false;
    }
	
    $sum = [0, 0];
	
    foreach ($steps as $step) {
        $sum[0] += $step[0];
	$sum[1] += $step[1];
    }
	
    return $sum == [0, 0];
}
header('Content-type: text/plain');
echo validate($nav) ? 'valid' : 'invalid';
