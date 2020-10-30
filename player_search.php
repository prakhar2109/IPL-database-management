<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<link rel="stylesheet" href="index.css">
<style type="text/css">

</style>

<body>
    <div class="Mainindex">
        <h2><i><b></b>IPL Database Management</i></h2>
    </div>
    <div class="indexchildleft-parent">
        <div class="indexchildleft-parent-child1">
            <div class="indexchildleft-parent-child1-child1"><a href="index.html">HOME</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="schedule.php">SCHEDULES</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="rank.php">RANKINGS</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="result.php">RESULT</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="cricket_boards.php">CRICKET BOARDS</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="about.html">ABOUT</a></div>
        </div>
        <div class="indexchildleft-parent-child2">

            <?php

            $con = mysqli_connect("localhost", "root", "", "newcricket") or die(mysqli_error($con));
            $player = $_POST['playername'];
             
            $query = "SELECT * FROM player,team WHERE player.team_id=team.team_id and playername like '%$player%'";
            $res = mysqli_query($con, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {

                    echo "
                    <table class=" . "indextable" . ">
                        <tr><th>PLAYERNAME</th><th>" . $row["playername"] . "</th></tr>
                        <tr><th>RANK</th><th>" . $row["rank"] . "</th></tr>
                        <tr><th>TEAM</th><th>" . $row["name"] . "</th></tr>
                        <tr><th>RUNS</th><th>" . $row["runs"] . "</th></tr>
                        <tr><th>TYPE</th><th>" . $row["type"] . "</th></tr>
                        <tr><th>BATTING BEST</th><th>" . $row["batting_best"] . "</th></tr>
                        <tr><th>BOWLING BEST</th><th>" . $row["bowling_best"] . "</th></tr>
                    </table>";
                }
            } else {
                echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
                header("refresh: 0.01; url=index.html");
            }

            mysqli_close($con);    ?>
        </div>
        <div class="indexchildleft-parent-child1">
            <div class="indexchildleft-parent-child1-child1"><a href="highscorer.php">Highest Scorer</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="bestavg.php">Best Batting Avg</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="mosthund.php">Most Hundred</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="mostfifty.php">Most Fifties</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="mostfour.php">Most Fours</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="mostsix.php">Most Sixes</a></div>
        </div>
    </div>




</body>

</html>