<?php

//-------HOW TO DETACH KEYS AND VALUES FROM AN ARRAY-----------//
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo (key_exists('Ben', $age))? $age['Ben'] : 'Key not found!';
// $all_keys = array_keys($age);
// $all_values = array_values($age);
// echo '<pre>';
// print_r($all_keys);
// echo '</pre><br><br>';

// echo '<pre>';
// print_r($all_values);
// echo '</pre><br><br>';
//-------HOW TO DETACH KEYS AND VALUES FROM AN ARRAY-----------//



//-------USEFUL FUNCTION FOR MAKING MULTIPLE CHOICE APP--------//
// $multiple_choice = array('Bangladesh', 'India', 'Nepal', 'Bhutan');
// shuffle($multiple_choice);
// echo '<pre>';
// print_r($multiple_choice);
// echo '</pre><br>';
//-------USEFUL FUNCTION FOR MAKING MULTIPLE CHOICE APP--------//


//-------USEFUL FUNCTION FOR SINGLE OUTCOME FROM ARRAY--------//
// $numbers = array(2,3,4,5,6,3,5,6,7,8);
// function adder($m = 0, $incomming){
//     $m = $m + $incomming;
//     return $m;
// }
// $summation = array_reduce($numbers, 'adder');
// echo $summation . "<br>";
//-------USEFUL FUNCTION FOR SINGLE OUTCOME FROM ARRAY--------//



//----------ARRAY TRAVERSING--------------------------------//
// $fruits = array('apple', 'orange', 'banana', 'grape', 'lime'); 
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";

// next($fruits);
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";

// next($fruits);
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";

// prev($fruits);
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";

// end($fruits);
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";


// reset($fruits);
// echo "Name of the current item: ".strtoupper(current($fruits)). "<br>";
// echo "Name of the current key: ".key($fruits). "<br><br>";
// echo '<pre>';
// print_r(each($fruits), true);
// echo '</pre>';

//---------ARRAY TRAVERSING--------------------------------//



//------------------ADVANCE OPERATION WITH LIST FUNCTIONS---------//
// $names = array('one' => 'one', 'two' => 'two', 'three' => 'three');
// list('one'=> $a, 'two'=> $b,'three'=> $c) = $names;
// echo "$a <br> $b <br> $c <br>";

// $vegi = array('Couliflower', 'Cucumber', 'Potato');
// list($one, $two, $three) = $vegi;
// echo "$one <br> $two <br> $three <br>";
//------------------ADVANCE OPERATION WITH LIST FUNCTIONS---------//


//-----------PHP EXPLODE FUNCTION-------FOR CONFLICT TRY------//
// $str = 'My name is dipu mondal';
// $newArray = explode(' ', $str);
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
//-----------PHP EXPLODE FUNCTION-------------//



//--------------STRING COUNTING FUNCTIONS---------//
// $str  = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt voluptate quisquam perferendis neque iusto. Dignissimos delectus repellat quia nulla aspernatur harum vel assumenda recusandae eligendi esse dicta nihil, tempore nobis!';

// echo str_word_count($str).'<br>';
// echo strlen($str).'<br>';
// echo substr_count($str, 'Lorem');
//--------------STRING COUNTING FUNCTIONS---------//



//---------PHP SUBSTRING REPLACE-------------//
// $email = 'dipumondalsatkhira@gmail.com';
// echo substr_replace($email, '.......', 5 , -8);
//---------PHP SUBSTRING REPLACE-------------//



//----------PHP STRING COMPARISON FUNCTIONS---------//
// $name1 = 'Dipu Mondal';
// $name2 = 'Hero Hondal';
// similar_text($name1, $name2, $percentage);
// echo round($percentage, 2). '%';
//----------PHP STRING COMPARISON FUNCTIONS---------//


//---------PHP PADDING FUNCTIONS---------//
// $email = 'dipumondalsatkhira@gmail.com';
// echo str_pad(substr($email, -15), 17, '*', STR_PAD_LEFT);
//---------PHP PADDING FUNCTIONS---------//





?>