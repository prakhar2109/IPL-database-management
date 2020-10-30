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


    if(!empty($age) ||!empty($runs) || !empty($id) ||!empty($wickets) ||!empty($num) ||!empty($rank) ||!empty($batting) ||!empty($bowling) 
    ||!empty($avg)||!empty($Hundred)||!empty($Fifties)||!empty($sixes)||!empty($fours))
    {

        $query="UPDATE player SET ";
        $query.=(!empty($_POST['runs']))? " runs='$runs',":"";
        $query.=(!empty($_POST['age']))? " age='$age',":"";
        $query.=(!empty($_POST['id']))? " team_id='$id',":"";
        $query.=(!empty($_POST['wickets']))? " wickets='$wickets',":"";
        $query.=(!empty($_POST['num']))? " num='$num',":"";
        $query.=(!empty($_POST['rank']))? " rank='$rank',":"";
        $query.=(!empty($_POST['batting']))? " batting='$batting',":"";
        $query.=(!empty($_POST['bowling']))? " bowling='$bowling',":"";
        $query.=(!empty($_POST['avg']))? " avg='$avg',":"";
        $query.=(!empty($_POST['Hundred']))? " Hundred='$Hundred',":"";
        $query.=(!empty($_POST['Fifties']))? " Fifties='$Fifties',":"";
        $query.=(!empty($_POST['sixes']))? " sixes='$sixes',":"";
        $query.=(!empty($_POST['fours']))? " fours='$fours',":"";
        $query=substr($query,0,-1);
        $query.=" where playername='$playername'";
        // echo "Debug Objects: " . $query;

        if(mysqli_query($con,$query))
        {

            $qu="Select * from player where playername='$playername'";
            $res=mysqli_query($con,$qu);
            if(mysqli_num_rows($res) > 0)
            {
            // echo "Debug Objects: " . $query;
            echo "<script type='text/javascript'>alert('RECORD UPDATED SUCCESSFULLY!!');</script>";
            header("refresh: 0.01; url=player_update.html");
            }
            else
            {
                // echo "Debug Objects: " . $query;
        
                echo "<script type='text/javascript'>alert('Playername is wrong');</script>";
                header("refresh: 0.01; url=player_update.html");
                // mysqli_error($con);
            }
        }
    }
    else 
    {
        header("refresh: 0.01; url=player_update.html");
    }

  

   
    ?>

    