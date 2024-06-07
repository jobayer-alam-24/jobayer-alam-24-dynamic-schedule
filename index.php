<?php 
    include("./database/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>School Routine</title>
</head>
<body>
    <h1>Class Schedule</h1>
    <div class="routine">
        <table>
            <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
            <?php
              $query = "SELECT * FROM class_schedule";
              $data = mysqli_query($databse_connection, $query);
              
              if($data){
                while($row = mysqli_fetch_array($data)){
                    $time = $row['time'];
                    $day1 = $row['day1'];
                    $day2 = $row['day2'];
                    $day3 = $row['day3'];
                    $day4 = $row['day4'];
                    $day5 = $row['day5'];
                    $day6 = $row['day6'];
                    $day7 = $row['day7'];

                    echo '<tr>
                <td>'.$time.'</td>
                <td>'.$day1.'</td>
                <td>'.$day2.'</td>
                <td>'.$day3.'</td>
                <td>'.$day4.'</td>
                <td>'.$day5.'</td>
                <td>'.$day6.'</td>
                <td>'.$day7.'</td>
                </tr>';
                }
              }
            ?>
        </table>
    </div>
</body>
</html>
