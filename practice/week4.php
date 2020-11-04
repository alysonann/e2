<?php
#            0         1       2
// $moves = ['rock', 'paper','scissors']; #Array of strings
// #                0, 1, 2, 3, 4, 5
// $strawLengths = [2, 2, 2, 2, 2, 1];

// $mixed = ['rock', 1, .04, true];

// //echo $moves[0]; #rock
// //echo $moves[1]; #paper
// //echo $moves[2]; #scissors
// //echo $moves[3]; #outside the bounds of an array--undefined
// #var_dump($moves);
// #rand($min,$max);
// $randomNumber = rand(0, 2); #will get 0, 1, and 2
// //var_dump($randomNumber);

// $move = $moves[$randomNumber];
// //var_dump($move);


// # Associative Arrays
// # we can set the key (index) for each value in the array
// # we no longer need index positions--we can use the name keys

// $penny_value = .01;
// $nickel_value = .05;
// $dime_value = .10;
// $quarter_value = .25;

// $coin_values = [
//     'penny' => .01,
//     'nickel' => .05,
//     'dime' => .10,
//     'quarter' => .25
// ];

// var_dump($coin_values['penny']); # .25

// $coin_counts = [
//     'penny' => 100,
//     'nickel' => 25,
//     'dime' => 100,
//     'quarter' => 34
// ];

// asort($coin_counts); #alphabetical sort (based on VALUES, not key names...)
// var_dump($coin_counts);

// arsort($coin_counts); #reverse sort
// var_dump($coin_counts);

// ksort($coin_counts); #reverse sort
// var_dump($coin_counts); #key sort
// krsort($coin_counts); #reverse sort
// var_dump($coin_counts); #key sort



// foreach ($coin_counts as $coin => $count) { #key and value are aliases--they can be anything
//     var_dump($coin);
//     var_dump($count);
// }
// #to the left is your variable for your key, and to the right is your variable for the value
// #make code clear by choosing good names (key and value are okay, but we can pick better ones)

// $total = 0;

// foreach ($coin_counts as $coin => $count) { #key and value are aliases--they can be anything
//     $total = $total + $count * $coin_values[$coin];
// }
// var_dump($total);
// #refactoring = refiguring the code to accomplish the same goal
// #writing things in a more efficient way

// #multi-dimensional arrays
// #DRY = Don't Repeat Yourself

// $coins = [
//     'penny' => [100,.01],
//     'nickel' => [25, .05],
//     'dime' => [100, .10],
//     'quarter' => [34, .25],
//     'halfDollar' =>[10,.50]
// ];
// $total = 0;

// foreach ($coins as $coin => $info) {
//     $total = $total + ($info[0] * $info[1]);
// }
// var_dump($total);

 $total = 0;

$coins = [
    'penny' => [
        'count'=> 100,
        'value'=>.01
    ],
    'nickel' => [
        'count'=>25,
        'value' => .05
    ],
    'dime' => [
        'count'=>100,
        'value'=>.10
    ],
    'quarter'=>[
        'count'=>34,
        'value'=>.25
    ],
    'halfDollar'=>[
        'count'=>10,
        'value' =>.50
        ]
];

foreach ($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}

var_dump($total);


$cards = [1 , 2, 3, 4, 5, 6, 7, 8, 9,10, 11, 12, 13, 14];

shuffle($cards);
#var_dump($cards);
$playerCards = array_splice($cards, 0, count($cards)/2);
//$computerCards =
//var_dump($playerCards);
//var_dump($cards);
$computerCards = $cards;

//$playerDraw = $playerCards[count($playerCards)-1];
//var_dump($playerCards);
//var_dump($playerDraw);

var_dump($playerCards);

$playerDraw = array_pop($playerCards);
var_dump($playerCards);
var_dump($playerDraw);

var_dump(date('F j Y', mktime(11, 14, 54, 8, 12, 2015)));
var_dump(date('F j Y'));
var_dump(strtolower('AbC'));
var_dump(rand());
$foo = 'Cat';
$newFoo = strtoupper($foo);
var_dump($foo);
var_dump($newFoo);
