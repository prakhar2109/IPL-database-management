<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "newcricket") or die(mysqli_error($con));

    $playername=$_POST['playername'];
    
    
    $query="delete from player where playername='$playername'";
    if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('Player deleted Successfully!!');</script>";
       header("refresh: 0.01; url=index.html");
    }
    else
    {
    	echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=index.html");
    	mysqli_error($con);
    }
    ?>

    