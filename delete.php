<?php
    require_once 'connect.php';

    $id = $_REQUEST['id'];  
    $userid = $_REQUEST['userid'];

    $sql = "DELETE FROM goals WHERE goal_id = '" . $id . "'";

    if(mysqli_query($link, $sql)){
        print("<center>Deleted</center>");
    }else{
        print("<center>Failed</center>");
    }

    echo "<script>location.href='index.php?id=".$userid."'</script>";
?>