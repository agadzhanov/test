<?php
const NORTH = [0, 1];
const EAST = [1, 0];
const SOUTH = [0, -1];
const WEST = [-1, 0];

$nav = [WEST, WEST, EAST, EAST, SOUTH, SOUTH, SOUTH, NORTH, NORTH, NORTH];

function validate(array $nav)
{
    $sum = [0, 0];
    $fn = function (array $a) use $sum {
	if (!isset($a[0]) || !isset($a[1])) {
            throw new Exception('invalid arg');
        }
        $sum[0] = $a[0];
        $sum[1] = $a[1];
    }
    return count($nav) === 10 && array_walk($nav, $fn) == [0, 0];
}

header('Content-type: text/plain');
echo validate($nav) ? 'valid' : 'invalid';

