<?php

//-------HOW TO DETACH KEYS AND VALUES FROM AN ARRAY-----------//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo (key_exists('Ben', $age))? $age['Ben'] : 'Key not found!';
$all_keys = array_keys($age);
$all_values = array_values($age);
echo '<pre>';
print_r($all_keys);
echo '</pre><br><br>';

echo '<pre>';
print_r($all_values);
echo '</pre><br><br>';
//-------HOW TO DETACH KEYS AND VALUES FROM AN ARRAY-----------//



//-------USEFUL FUNCTION FOR MAKING MULTIPLE CHOICE APP--------//
$multiple_choice = array('Bangladesh', 'India', 'Nepal', 'Bhutan');
shuffle($multiple_choice);
echo '<pre>';
print_r($multiple_choice);
echo '</pre><br>';
//-------USEFUL FUNCTION FOR MAKING MULTIPLE CHOICE APP--------//





?>