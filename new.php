<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello";
   /*$array = array("1","2","3","sd");
    //echo count($array);

    echo "<br><h1> Loops <br> for each rule </h1><br>";
     foreach($array as $value)
     {
        echo $value;
     }*/
     /*function print5($number)
     {
        echo "<br> print five</br>" ;
        echo $number;
     }
     print5(12);
     print5(65);
     print5(85);
     print5(12);*/
     $string = "this is a string";
     $size = strlen($string);// gives size of string
// two strings are added in php using "."
echo "<br> the length of string is :- ". $size . "Move to next line <br>";

echo "<br> the no of woeds in  string is :- ". str_word_count($string) . "  Move to next line <br>";
echo "<br> reverse string is :- ". strrev($string) . "Move to next line <br>";
echo "<br> the position of word in  of string is :- ". strpos($string, "a") . "<br>Move to next line <br>";
echo "<br> to replace a word of string is :- ".str_replace("a","hello",$string) . "Move to next line <br>";

?>
</body>
</html>