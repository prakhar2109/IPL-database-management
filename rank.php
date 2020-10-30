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
        <div class="indexchildleft-parent-child2-update">
            <a href="rank_update.html"><button class="indexbutton indexbutton-update">Update</button></a>
            <table width="100%">
                <tr>
                    <th>
                        <p style="align-content: center;">
                            <h1 style="color:">TEAM RANKING</h1>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <table align="center" width="100%">
                            <tr>
                                <th>Rank</th>
                                <th>Name</th>
                                <th>Rating</th>
                            </tr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "newcricket");




                            $query = "select * from team order by rating desc";
                            $result = mysqli_query($con, $query);
                            [$i] = floor(1);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $i = $i + 1;
                                    $nm = $row["name"];
                                    $q = "update team set rank='$i' where name='$nm'";

                                    mysqli_query($con, $q);
                                    echo "<tr><th>"
                                        . floor($i) . "</th><th>" .
                                        $row["name"] . "</th><th>" .
                                        $row["rating"] . "</th></tr>";
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