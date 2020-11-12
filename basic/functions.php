<?php
  echo 'Hello World!';

  function simpleFunction($value = "World!"){
    //   echo "<br>Hello $value<br>";
      return "<br>Hello $value<br>";
  }


  $greeting="Varun";


  echo simpleFunction($greeting);
  echo simpleFunction("Charu");
  echo simpleFunction();

    //   By Refrence
    $myNum=10;

    function addFive($num){
        $num+=5;
    }

    function addTen(&$num){
        $num+=10;
    }

    addFive($myNum);

    echo "$myNum<br>";

    addTen($myNum);

    echo "$myNum<br>";
?>