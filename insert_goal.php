<?php
    require_once 'connect.php';
    session_start();

    $category = $_REQUEST['cat'];
    $text = $_REQUEST['text'];
    $date = $_REQUEST['goaldate'];
    $complate = $_REQUEST['complate'];
    $userid = $_SESSION['userid'];

    if($complate == '' || $complate == null){
        $complate = 0;
    }

        $sql = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_complate, user_id) VALUES";
        $sql .= "('" . $category . "', '" . $text . "', '" . $date . "', '" . $complate . "', '" . $userid . "')";

        if(mysqli_query($link, $sql)){
            print("Stored");
        }else{
            print("Failed");
        }

        echo "<script>location.href='index.php'</script>";
?>