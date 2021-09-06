<?php
    require_once 'connect.php';

    $id = $_REQUEST['id'];
    $userid = $_REQUEST['userid'];

    $sql = "UPDATE goals SET goal_complate = '1' WHERE goal_id = '" . $id . "'";

    if(mysqli_query($link, $sql)){
        print("<center>Stored</center>");
    }else{
        print("<center>Failed</center>");
    }

    echo "<script>location.href='index.php?id=".$userid."'</script>";
?>