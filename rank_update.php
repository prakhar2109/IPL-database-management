<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "newcricket") or die(mysqli_error($con));

    $name=$_POST['name'];
    $rating=$_POST['rating'];
  


    if(!empty($name) && !empty($rating))
    {

        $query="UPDATE team SET ";
        $query.=(!empty($_POST['rating']))? " rating='$rating',":"";
        $query=substr($query,0,-1);
        $query.=" where name='$name'";
        // echo "Debug Objects: " . $query;

        if(mysqli_query($con,$query))
        {

            $qu="Select * from team where name='$name'";
            $res=mysqli_query($con,$qu);
            if(mysqli_num_rows($res) > 0)
            {
            // echo "Debug Objects: " . $query;
            echo "<script type='text/javascript'>alert('Updated Successfully!!');</script>";
            header("refresh: 0.01; url=rank.php");
            }
            else
            {
                // echo "Debug Objects: " . $query;
        
                echo "<script type='text/javascript'>alert('Teamname is wrong');</script>";
                header("refresh: 0.01; url=rank.php");
                // mysqli_error($con);
            }
        }
    }
    else 
    {
        header("refresh: 0.01; url=rank.php");
    }

  

   
    ?>

    