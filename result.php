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
                            <h1 style="color:">RESULT</h1>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <table align="center" width="100%">
                            <tr>
                                <th>Match No</th>
                                <th>team1</th>
                                <th>team2</th>
                                <th>Winning Name</th>
                                <th>Man of the match</th>
                            </tr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "newcricket");




                            $query = "select result.Match_no,team1,team2,`Winning Team`,`Man of The Match` from result natural join schedules";
                            $result = mysqli_query($con, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {


                                    echo "<tr><th>" .
                                        $row["Match_no"] . "</th><th>" .
                                        $row["team1"] . "</th><th>" .
                                        $row["team2"] . "</th><th>" .
                                        $row["Winning Team"] . "</th><th>" .
                                        $row["Man of The Match"] . "</th></tr>";
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