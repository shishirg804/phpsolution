<?php

// three types
// 1.Indexed
// 2.Associative
// 3.Multi-Dimensional

// Indexed Arrays
$people=array('Varun','Ramnani','Bad');

//echo $people[1];
$numbers=array(1,2,3,4);
echo "$numbers[3]\n";
$numbers[4]=7;
$numbers[]=10;// add it to last one if index not specified.
echo $numbers[5];

// Array Functions
echo count($numbers);// counts total length of array
print_r($numbers);// it is echo for array will show you the whole array, handy funtion for debugging

var_dump($numbers);// usend to tell the data type, can be used with others too not only array

// Associative Arrays - consists of key value pairs

$new=array('Henry'=>35,'Rita'=>45,'William'=>89);
$ids=array(22=>'Varun',45=>"jvec");
// to access them we use
echo $new['Henry'];
var_dump($new);
var_dump($ids);
$new[22]='ihfih';
var_dump($new);
echo "hi there";
// Multi-Dimensional Arrays
$matrix=array(
    array(1,2,3),
    array("kfhe",1,'hfieh'),
    array('Henry'=>35,'Rita'=>45,'William'=>89)
);
var_dump($matrix);
echo $matrix[0][2];
?>
