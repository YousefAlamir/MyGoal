
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://fonts.googleapies.com/css?family=Roboto:300,300italic,800,800italic">
        <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        <link rel="stylesheet" href="goals.css">
        <title>MyGoal.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            session_start();
            require_once 'connect.php';
            $id = $_SESSION['userid'];
        ?>
    </head>
    <body id="body">

        <div id="container1">
            <h2 style="color: purple">Welcome 
                <?php
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }
                ?>
            </h2>
            <hr style="color: purple">
            <h2>New Goal</h2>
            <form action="insert_goal.php" method="POST" enctype="multipart/form-data">

                <label for="cat">Category</label>
                <select name="cat" id="cat">
                    <option value="0">Personal</option>
                    <option value="1">Professional</option>
                    <option value="2">Others</option>
                </select>

                <label for="text">Goal</label>
                <textarea name="text" id="text"></textarea>

                <label for="goaldate">Date</label>
                <input type="date" id="goaldate" name="goaldate" />

                <label for="complate">Goal Complated</label>
                <input type="checkbox" id="complate" name="complate" value="1" /><br>

                <input type="hidden" name="userid" value="<?php $id ?>" >

                <button type="submit" style='color: white'>Submit Goal</button>
            </form>

            <?php
            
            $query = "SELECT * FROM goals WHERE user_id='$id'";
            $data = mysqli_query($link, $query) or die(mysqli_error($link));

            // Incomplate Goals: 
            print("<h2>Incomplate Goals</h2>");
            while($row = mysqli_fetch_array($data)){
                if($row['goal_complate'] == 0){
                    if($row['goal_category'] == 0){
                        $cat = "Personal";
                    }else if($row['goal_category'] == 1){
                        $cat = "Professional";
                    }else{
                        $cat = "Others";
                    }
                    echo "<div class='goal'>";
                    echo "<a href='complate.php?id=" . $row['goal_id'] ."&userid=".$id."'>
                    <button class='btnComplate' style='color: white'>Complate</button></a><strong>" ;
                    echo $cat . "</strong><p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date'];
                    echo "</div>";
                }
            }

            // complate Goals: 
            print("<h2>Complate Goals</h2>");
            $data = mysqli_query($link, $query) or die(mysqli_error($link));
            while($row1 = mysqli_fetch_array($data)){
                if($row1['goal_complate'] == 1){
                    if($row1['goal_category'] == 0){
                        $cat = "Personal";
                    }else if($row1['goal_category'] == 1){
                        $cat = "Professional";
                    }else{
                        $cat = "Others";
                    }
                    echo "<div class='goal'>";
                    echo "<a href='delete.php?id=" . $row1['goal_id'] ."&userid=".$id."'>
                    <button class='btnDelete' style='color: white'>Delete</button></a><strong>" ;
                    echo $cat . "</strong><p>" . $row1['goal_text'] . "</p>Goal Date: " . $row1['goal_date'];
                    echo "</div>";
                }
            }

            ?>
            <a href="logout.php" style="float: right; margin-top: 50px;margin-bottom: 50px"><button style='color: white'>Logout</button></a>
        </div>
        <div id="container2">
            <?php include 'slider.php'; ?>
        </div>
        
        <!-- <div id="container3">
            <?php //include_once 'footer.php'; ?>
            <h2>Contact us</h2>
            <form action="" method="POST">

                <label for="msg">Your Message</label>
                <textarea name="msg" id="msg"></textarea>

                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" />

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email"/><br>

                <input type="hidden" name="userid" value="<?php //$id ?>" >

                <button type="submit" style='color: white'>Submit Goal</button>
            </form>
        </div> -->
    </body>
</html>