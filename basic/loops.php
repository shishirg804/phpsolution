<?php
    echo 'Hello World!';
    # Loops

    // FOR Loops
    // @params - initializer(init),condition and inc
    // for($i=0;$i<10;$i++){
    // echo "$i\n";
    // // echo '<hr>';
    // echo "<h1> hey</h1>";    
    // }

    # While Loop
    $i=0;
    while($i<10){
        $r=$i+1;
        echo "<br>$r<br>";
        $i++;
    }

    # For Each
    $people=['Varun','is','trustworthy'];
    foreach($people as $person){
        echo "$person ";
    }
// Associative array
    $people=['Varun'=>1,'is'=>2,'trustworthy'=>3];
    foreach($people as $person => $value){
        echo "$person : $value ";
    }

?>