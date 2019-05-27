<?php

// Let's play! You have to return which player won!
// In case of a draw return Draw!.

// Examples:
// rps('scissors','paper') // Player 1 won!
// rps('scissors','rock') // Player 2 won!
// rps('paper','paper') // Draw!


function rpc ($p1, $p2) {
    if ($p1 === $p2) {
    	$result = 'Draw!';
    } elseif (($p1 == 'scissors' && $p2 == 'paper') || ($p1 == 'paper' && $p2 == 'rock') || ($p1 == 'rock' && $p2 == 'scissors')) {
    	$result = 'Player 1 won!';
    } elseif (($p2 == 'scissors' && $p1 == 'paper') || ($p2 == 'paper' && $p1 == 'rock') || ($p2 == 'rock' && $p1 == 'scissors')) {
    	$result = 'Player 2 won!';
    }
    return $result;
}
