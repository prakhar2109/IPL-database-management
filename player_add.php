<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "newcricket") or die(mysqli_error($con));

    $playername=$_POST['playername'];
    $id=$_POST['id'];
    
    $age=$_POST['age'];
    $runs=$_POST['runs'];
    $wickets=$_POST['wickets'];
    $type=$_POST['type'];
    $num=$_POST['no_of_matches'];
    $rank=$_POST['rank'];
    $batting=$_POST['batting_best'];
    $bowling=$_POST['bowling_best'];
    $avg=$_POST['avg'];
    $Hundred=$_POST['Hundred'];
    $Fifties=$_POST['Fifties'];
    $sixes=$_POST['sixes'];
    $fours=$_POST['fours'];



    $query="insert into player(playername,team_id,age,runs,wickets,type,no_of_matches,rank,batting_best,bowling_best,avg,100s,50s,6s,4s) values('$playername','$id','$age','$runs','$wickets','$type','$num','$rank','$batting','$bowling',
    '$avg','$Hundred','$Fifties','$sixes','$fours')";
    if(mysqli_query($con,$query))
    {
        echo "<script type='text/javascript'>alert('NEW RECORD CREATED SUCCESSFULLY!!');</script>";
      header("refresh: 0.01; url=player_add.html");
    }
    else
    {
    	echo "<script type='text/javascript'>alert('ERROR');</script>";
        header("refresh: 0.01; url=player_add.html");
    	mysqli_error($con);
    }
    ?>

    