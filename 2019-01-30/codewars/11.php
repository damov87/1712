<?php

function bonusTime($salary, $bonus) {
    if ($bonus === true) {
        $salary = "$" . $salary * 10;
    } else {
        $salary = "$" . $salary;
    }
    return $salary;
}

var_dump(bonusTime(10, true))  ;
