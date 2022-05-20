<?php
    $servername = "localhost";
    $username = "root";
    $password = '';
    $databasename = "ebook";

    $con = mysqli_connect($servername, $username, $password, $databasename );

        if($con)
        {echo "";} 
        else 
        {echo "Not Conneted";}

?>