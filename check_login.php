<?php
    require_once 'connect.php';
    $errors = array();

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $en_password = md5($pass);

    // validation
    if(empty($email)){array_push($errors, "Email is required");}
    if(empty($pass)){array_push($errors, "Password is required");}

    // check if user exist
    $exist_query = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1";
    $data = mysqli_query($link, $exist_query) or die(mysqli_error($link));

   
    
    $user = mysqli_fetch_assoc($data); 
    if(empty($user)){
        array_push($errors, "Wrong email or password!");
    }
    if($user){
        if($user['user_email'] != $email){array_push($errors, "Email is not exist!");}
        if($user['user_pass'] != $en_password){array_push($errors, "pass is not correct!");}
    }

    if(count($errors) == 0){
        $select_query = "SELECT * FROM users WHERE user_email='$email' AND user_pass = '$en_password'";
        $data = mysqli_query($link, $select_query) or die(mysqli_error($link));

        if(mysqli_num_rows($data)){
                session_start();
                $user = mysqli_fetch_assoc($data);
                $_SESSION['username'] = $user['username'];
                $_SESSION['success'] = "You are now logged in";
                $_SESSION['userid'] = $user['user_id'];
                
                echo "<script>location.href='index.php'</script>";
        }
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            echo $error . "<br>";
        }
        echo  "<a href='login.php'><button>Try Again</button></a>";
    }

?>