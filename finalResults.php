<?php

    include('dbConnection.php');

        // Total number of people participate on survey
        $sql="SELECT COUNT(*) AS total from survey";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);

        // Average age
        $sql = "SELECT AVG(age) AS avg FROM survey";
        $result = mysqli_query($conn, $sql);
        $data2 = mysqli_fetch_assoc($result);

        // Maximum age
        $sql="SELECT MAX(age) AS maximumAge FROM survey";
        $result = mysqli_query($conn, $sql);
        $data3 = mysqli_fetch_assoc($result);

        // Minimum age
        $sql="SELECT MIN(age) AS minimumAge FROM survey";
        $result = mysqli_query($conn, $sql);
        $data4 = mysqli_fetch_assoc($result);

        //Percentage of people who like Pizza
        $sql= "Select  (Count(survey_id) * 100 / (Select Count(*) From survey)) as percentage1 From survey where typeOfFood = 'Pizza' Group By typeOfFood";
        $result = mysqli_query($conn, $sql);
        $data5 = mysqli_fetch_assoc($result);
        
        //Percentage of people who like Pasta
        $sql=  "Select  (Count(survey_id) * 100 / (Select Count(*) From survey)) as percentage2 From survey where typeOfFood = 'Pasta' Group By typeOfFood";
        $result = mysqli_query($conn, $sql);
        $data6 = mysqli_fetch_assoc($result);

        //Percentage of people who like Pap and Wors
        $sql = "Select (Count(survey_id) * 100 / (Select Count(*)  From survey))  as percentage3 From survey where typeOfFood = 'Pap and Wors' Group By typeOfFood";
        $result = mysqli_query($conn, $sql);
        $data7 = mysqli_fetch_assoc($result);


        //People like to eat out:
        $sql = "SELECT CAST(AVG(eatOut) AS DECIMAL(10,1)) AS avgRating1 FROM survey";
        $result = mysqli_query($conn, $sql);
        $data8 = mysqli_fetch_assoc($result);

        //People like to watch movies
        $sql = "SELECT CAST(AVG(movies) AS DECIMAL(10,1)) AS avgRating2 FROM survey";
        $result = mysqli_query($conn, $sql);
        $data9 = mysqli_fetch_assoc($result);

        //People like to watch TV
        $sql = "SELECT CAST(AVG(watchTv) AS DECIMAL(10,1)) AS avgRating3 FROM survey";
        $result = mysqli_query($conn, $sql);
        $data10 = mysqli_fetch_assoc($result);

        //People like to listen to the radio
        $sql = "SELECT CAST(AVG(listenRadio) AS DECIMAL(10,1)) AS avgRating4 FROM survey";
        $result = mysqli_query($conn, $sql);
        $data11 = mysqli_fetch_assoc($result);
        
    mysqli_close($conn);

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="finalResultsCSS.css">
    </head>

    <body>

        <p>Total number of surveys: <?php echo $data['total'] ?></p>
        <p>Average age: <?php echo $data2['avg']?></p>
        <p>Oldest person who participated in survey: <?php echo $data3['maximumAge'] ?> years</p>
        <p>Youngest person who participated in survey: <?php echo  $data4['minimumAge'] ?> years</p><br>

        <p>Percentage of people who like Pizza: <?php echo  $data5['percentage1'] ?>%</p>
        <p>Percentage of people who like Pasta: <?php echo $data6['percentage2'] ?>%</p>
        <p>Percentage of people who like Pap and Wors: <?php echo $data7['percentage3'] ?>%</p></br>

        <p>People like to eat out: <?php echo $data8['avgRating1'] ?> </p>
        <p>People like to watch movies: <?php echo $data9['avgRating2'] ?></p>
        <p>People like to watch TV: <?php echo $data10['avgRating3'] ?><p>
        <p>People like to listen to the radio: <?php echo $data11['avgRating4'] ?></p>

        <form action="mainPage.html">
        <button type="submit" class="okButton" name="sub">OK</button>
        </form>
    </body>
</body> 

</html>



