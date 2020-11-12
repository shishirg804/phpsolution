<?php
    // update cookie
    // setcookie('username','Frank',time()+(8600*30));

    // Delete cookie
    setcookie('username','Frank',time()-3600);

    // if cookies are set
    if(count($_COOKIE)){
        echo 'There are '.count($_COOKIE). " set";
    }else{
        echo 'No cookies';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username'] . ' is set<br/>';
    }else{
        echo 'username is not set.';
    }

?>