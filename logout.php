<?php
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['success']);

    echo "<script>location.href='login.php'</script>";

?>