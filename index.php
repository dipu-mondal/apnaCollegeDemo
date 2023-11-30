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


//----------PHP STRING TRIMING FUNCTION------------//
// $string = 'Dipu Mondal &*';
// $charList = '-_+!@$%^&* ';
// echo trim($string, $charList);
//----------PHP STRING TRIMING FUNCTION------------//

















/*
Required. Specifies the format of the outputted date string. The following characters can be used:
d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters)
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters)
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
u - Microseconds (added in PHP 5.2.2)
e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
O - Difference to Greenwich time (GMT) in hours (Example: +0100)
P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
T - Timezone abbreviations (Examples: EST, MDT)
Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
and the following predefined constants can also be used (available since PHP 5.1.0):

DATE_ATOM - Atom (example: 2013-04-12T15:52:01+00:00)
DATE_COOKIE - HTTP Cookies (example: Friday, 12-Apr-13 15:52:01 UTC)
DATE_ISO8601 - ISO-8601 (example: 2013-04-12T15:52:01+0000)
DATE_RFC822 - RFC 822 (example: Fri, 12 Apr 13 15:52:01 +0000)
DATE_RFC850 - RFC 850 (example: Friday, 12-Apr-13 15:52:01 UTC)
DATE_RFC1036 - RFC 1036 (example: Fri, 12 Apr 13 15:52:01 +0000)
DATE_RFC1123 - RFC 1123 (example: Fri, 12 Apr 2013 15:52:01 +0000)
DATE_RFC2822 - RFC 2822 (Fri, 12 Apr 2013 15:52:01 +0000)
DATE_RFC3339 - Same as DATE_ATOM (since PHP 5.1.3)
DATE_RSS - RSS (Fri, 12 Aug 2013 15:52:01 +0000)
DATE_W3C - World Wide Web Consortium (example: 2013-04-12T15:52:01+00:00)
*/



date_default_timezone_set('ASIA/DHAKA');
echo date('jS F Y h:i:s a');
echo '<br>';
echo date('jS F Y h:i:s a e');
// -- here e for name of the time zone//



/*
mktime() returns unix "TIMESTAMP" that canbe used in date() function
because date() function receives timestamp as parameter
*/
echo '<br>';
echo mktime(0,0,0,9,3,1995);
echo '<br>';
echo date("l jS F Y", mktime(0,0,0,9,3,1995));
echo '<br>';
//--we can use mktime() to go past and future
echo date("l jS F Y", mktime(0,0,0,9,3,2054));





/*
date_create() function returns an "OBJECT"
This object can only be used in date_format() function
because date_format() function receive object as parameter
you can go past and future with this function
*/
echo '<pre>';
print_r(date_create('23rd june 2034'));
echo '</pre><br>';

echo '<pre>';
print_r(date_create('23rd june 2034', timezone_open('ASIA/DHAKA')));
echo '</pre><br>';

echo date_format(date_create('23rd june 2034'), "l jS F Y");







/*
checkdate() function takes different parameter as month, day and year
it doesnot take timestamp or object
*/
echo '<br>';
echo checkdate(12,31,2024);
/*
date_diff() function takes two date object parameter and return object as well
1st parameter is from date object and second also date objects
we can get help from date_create() function because it returns object
*/
$date_first = date_create('23rd june 2034');
$date_second = date_create('23rd june 2024');
echo '<pre>';
print_r(date_diff($date_first, $date_second));
echo '</pre><br>';
echo date_diff($date_first, $date_second)->days;
echo '<br>';
echo '<br>';




/*
date_add(), date_sub() function takes two date object and both are from date object finally returns object
1st parameter is from date object and second also date objects
so we can get help from date_create() function because it returns object
as date_add() and date_sub() function returns object so we can get help from date_format() function to show on the screen.
*/

$date_final = date_create('3rd december 2023');
date_add($date_final, date_interval_create_from_date_string('10 days'));
echo date_format($date_final, "l jS F Y");
echo '<br>';
//shorter version of date_add() function
$date_final = date_add(date_create('3rd december 2023'), date_interval_create_from_date_string('10 days'));
echo date_format($date_final, "l jS F Y");
echo '<br>';


//shorter version of date_sub() function
$date_final = date_sub(date_create('3rd december 2023'), date_interval_create_from_date_string('10 days'));
echo date_format($date_final, "l jS F Y");
echo '<br>';
echo '<br>';
echo '<br>';


//shorter version of date_modify() function working as date_add() function
echo "Example of date modify function <br>";
$date_final = date_modify(date_create('3rd december 2023'), '10 days');
echo date_format($date_final, "l jS F Y");
echo '<br>';


//shorter version of date_modify() function working as date_add() function
echo "Example of date modify function <br>";
$date_final = date_modify(date_create('3rd december 2023'), '10 days');
echo date_format($date_final, "l jS F Y");
echo '<br>';






/*
date_parse() function takes DATE STRING as parameter and returns array.
date_parse_from_format() function takes two parameters first one is FORMAT and second one is STRING DATE (unique style format)
it also returns array;
*/
echo '<pre>';
print_r(date_parse('3rd december 2023'));
echo '</pre><br>';

echo '<pre>';
print_r(date_parse_from_format('jS F Y','03rd september 2023'));
//both parameters will be same to same;
//should not be used as it is more complex
echo '</pre><br>';




?>