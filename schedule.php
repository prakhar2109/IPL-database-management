<html>
<title></title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="index.css">

<body background="img/ball1.jpg">

    <div class="Mainindex">
        <h2><i><b></b>IPL Database Management</i></i></h2>
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
        <a href="schedule_update.html"><button class="indexbutton indexbutton-update">Update</button></a>

            <table width="100%">
                <tr>
                    <th>
                        <p style="align-content: center;">
                            <h1 style="color:">SCHEDULES</h1>
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <table align="center" width="100%">
                            <tr>
                            <th>Match_no</th>
                                <th>Date</th>
                                <th>Team1</th>
                                <th>Team2</th>
                                <th>Venue</th>
                                <th>City Name</th>
                                <th>Country Name</th>




                            </tr>
                            <?php
                            $con = mysqli_connect("localhost", "root", "", "newcricket");
                            $query = "SELECT schedules.Match_no,schedules.team1 as team1,schedules.team2 as team2,schedules.date,venue.Venue_Name,city.City_Name,country.Country_Name FROM schedules,city,country,venue WHERE city.Country_id=country.Country_Id and venue.City_Id=city.City_Id and schedules.Venue_Id=venue.Venue_Id";
                            $result = mysqli_query($con, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><th>" . $row["Match_no"] . "</th><th>" . $row["date"] . "</th><th>" .
                                        $row["team1"] . "</th><th>" .
                                        $row["team2"] . "</th><th>" .
                                        $row["Venue_Name"] . "</th><th>" .
                                        $row["City_Name"] . "</th><th>" .
                                        $row["Country_Name"] . "</th>" . "</tr>";
                                }
                            }
                            mysqli_close($con);
                            ?>
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