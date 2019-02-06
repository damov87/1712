<?php

// Build a function that takes in two arguments (salary, bonus). 
// Salary will be an integer, and bonus a boolean.

// If bonus is true, the salary should be multiplied by 10. 
// If bonus is false, the fatcat did not make enough money 
// and must receive only his stated salary.

function bonusTime($salary, $bonus) {
    if ($bonus === true) {
        $salary = "$" . $salary * 10;
    } else {
        $salary = "$" . $salary;
    }
    return $salary;
}

var_dump(bonusTime(10, true))  ;
