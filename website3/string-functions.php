<?php

    #substr() creates a substring

    $str=substr("Hello",1,3);//str,starting index,ending index
    // echo $str;
    $str2=substr("Hello2",-2);//starts from back
    echo $str2;

    #strlen() give str length
    echo strlen('Hello');

    #strpos()  find the postion of the first occurence of a sub string
    echo strpos("hello",'l');

    #strrpos()  find the postion of the last occurence of a sub string
    echo strrpos("hello",'l');

    #trim() trims white space
    $str3="Hello World          ";

    var_dump($str3);

    $trim=trim($str3);
    var_dump($trim);
    echo "<br>";

    #strtoupper() makes uppercase

    #strtolower() makes lowercase

    #ucwords() capitalize first letter of each word
    echo ucwords("hwllo iry eiy ");

    #str_replace() replaces all occurences of a serach string with a replacement
    echo str_replace('l','v', "Hello World");


    #is_string() check if string
    echo is_string(97);// if true return 1 otherwise if false returns nothing
  
    $values=array("hof",'ifgr',22);
    foreach($values as $value){
        if(is_string($value)){
            echo "<br/>$value is a string<br/>";
        }
    }
    echo is_array(array("hof",'ifgr'));

    #gzcompress() compresses a string
    $str4="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit iusto perferendis accusamus vel modi, eaque quas quia assumenda eveniet aliquid.";
    $compress= gzcompress($str4);
    echo $compress;
    $uncompress=gzuncompress($compress);
    echo $uncompress;

?>