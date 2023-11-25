<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo (key_exists('Ben', $age))? $age['Ben'] : 'Key not found!';
?>