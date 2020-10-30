<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "newcricket") or die(mysqli_error($con));

    $date=$_POST['date'];
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $matchno=$_POST['matchno'];



    if(!empty($date) && !empty($team1)&& !empty($team2)&& !empty($matchno))
    {

        $query="UPDATE schedules SET ";
        $query.=(!empty($_POST['date']))? " date='$date',":"";
        $query.=(!empty($_POST['team1']))? " team1='$team1',":"";
        $query.=(!empty($_POST['team2']))? " team2='$team2',":"";

        $query=substr($query,0,-1);
        $query.=" where Match_no='$matchno'";
        // echo "Debug Objects: " . $query;

        if(mysqli_query($con,$query))
        {

            $qu="Select * from schedules where Match_no='$matchno'";
            $res=mysqli_query($con,$qu);
            if(mysqli_num_rows($res) > 0)
            {
            // echo "Debug Objects: " . $query;
            echo "<script type='text/javascript'>alert('Updated Successfully!!');</script>";
            header("refresh: 0.01; url=schedule.php");
            }
            else
            {
                // echo "Debug Objects: " . $query;
        
                echo "<script type='text/javascript'>alert('Teamname is wrong');</script>";
                header("refresh: 0.01; url=schedule.php");
                // mysqli_error($con);
            }
        }
    }
    else 
    {
        header("refresh: 0.01; url=schedule.php");
    }

  

   
    ?>

    