<?php

// Another php comments option
/*php comments option
*/
# Define 4 different variables, which will
# each represent how much a given coin is worth
# These are terrible comments b/c this is obvious,ban
# but just useful for super beginners!
$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$half_dollar_value = .50;
$lunch_money = 4;



# Define 4 more variables, which will each
# represent how many of each coin is in the bank
$pennies = 300;
$nickels = 5;
$dimes = 0;
$quarters = 125;
$half_dollar = 33;

# Add up how much money is in the piggy bank
$total = ($pennies * $penny_value) + ($nickels * $nickel_value) +
($dimes * $dime_value) + ($quarters * $quarter_value) + ($half_dollar * $half_dollar_value);

require 'bank-view.php';
