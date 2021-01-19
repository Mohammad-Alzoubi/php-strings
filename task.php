<!-- 1. php string 1. Write a PHP script to : 
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase. -->

<!-- answer 1 -->
<?php

$str = strtoupper("PHP script");
echo $str;
echo '<br>';

$str = strtolower("PHP script");
echo $str;

echo '<br>';
$str = ucfirst(strtolower("PHP script"));
echo $str;

echo '<br>';
$str = ucwords("PHP script");
echo $str;
?>

<!-- answer 2 -->
<?php echo '<br>'?>

<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>

<!-- answer 3 -->
<?php echo '<br>'?>

<?php
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The jumps contains';
 }
else
 {
    echo 'The jumps not contains';
 }
?>

<!-- answer 4 -->
<?php echo '<br>'?>

<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n";
?>

<!-- answer 5 -->
<?php echo '<br>'?>

<?php
$mailid  = 'Orange@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>

<!-- answer 6 -->
<?php echo '<br>'?>

<?php
$str1 = 'Orange@example.com';
echo substr($str1, -3)."\n";
?>

<!-- answer 7 -->
<?php echo '<br>'?>

<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>


<!-- answer 8 -->
<?php echo '<br>'?>

<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>


<!-- answer 9 -->
<?php echo '<br>'?>

<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>




<!-- answer 10 -->
<?php echo '<br>'?>

<?php
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>


<!-- answer 11 -->
<?php echo '<br>'?>

<?php
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
    $next_cha = $next_cha[0];
}
echo $next_cha."\n";
?>


<!-- answer 12 -->
<?php echo '<br>'?>

<?php
$sub_string = 'orange@';
$str = 'orange@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";
?>

<!-- answer 13 -->
<?php echo '<br>'?>

<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>

<!-- answer 18 -->
<?php echo '<br>'?>

<?php
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
?>


<!-- answer 14 -->
<?php echo '<br>'?>

<?php
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>

<!-- answer 15 -->
<?php echo '<br>'?>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>

<!-- answer 16 -->
<?php echo '<br>'?>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
?>

<!-- answer 17 -->
<?php echo '<br>'?>

<?php
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
?>

<!-- answer 18 -->
<?php echo '<br>'?>

<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>

<!-- answer 19 -->
<?php echo '<br>'?>

<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

<!-- answer 20 -->
<?php echo '<br>'?>

<?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>

<!-- answer 21 -->
<?php echo '<br>'?>

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>