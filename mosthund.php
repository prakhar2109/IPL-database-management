<html>
<title></title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="index.css">

<body background="img/ball1.jpg">

    <div class="Mainindex">
        <h2><i><b></b>IPL Database Management</i></h2>
    </div>
    <div class="indexchildleft-parent">
    <div class="indexchildleft-parent-child1">
            <div class="indexchildleft-parent-child1-child1"><a href="index.html">Home</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="schedule.php">Schedules</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="rank.php">Team Ranking</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="result.php">Result</a></div>
            <div class="indexchildleft-parent-child1-child1"><a href="about.html">About</a></div>
        </div>
        <div class="indexchildleft-parent-child2">

            <table width="100%">
                <tr>
                    <th>
                        <p style="align-content: center;">
                            <h1 style="color:">Most 100s Ranking</h1>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <table align="center" width="100%">
                            <tr>
                                <th>Rank</th>
                                <th>Player Name</th>
                                <th>Team Name</th>
                                <th>100s</th>
                               


                            </tr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "newcricket");




                            $query = "SELECT playername,100s,team.name,rnk FROM team , (SELECT playername,100s,player.team_id, @rank := CASE WHEN @rankval = 100s THEN @rank WHEN (@rankval := 100s) IS NOT NULL THEN @rank + 1 END AS rnk FROM player, (SELECT @rank := 0, @rankval :=NULL) as x ORDER BY 100s DESC) as p1 WHERE p1.team_id=team.team_id";                            $result = mysqli_query($con, $query);

                            $result = mysqli_query($con, $query);
                            [$i] = floor(1);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i = $i + 1;
                                    echo
                                        "<tr>" . "<th>" .
                                            $row["rnk"] . "</th>" . "<th>" .
                                            $row["playername"] . "</th><th>" .
                                            $row["name"] . "</th><th>" .
                                            $row["100s"] . "</th>" .
                                            "</tr>";
                                }
                            } ?>
                        </table>
                    </th>
                </tr>
            </table>
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