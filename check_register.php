<?php
    require_once 'connect.php';
    $errors = array();

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $conpass = $_REQUEST['conpass'];

    // validation
    if(empty($username)){array_push($errors, "Usernamr is required");}
    if(empty($email)){array_push($errors, "Email is required");}
    if(empty($pass)){array_push($errors, "Password is required");}
    if($pass != $conpass){array_push($errors, "Passwords do not match!");}

    // check if user exist
    $exist_query = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1";
    $data = mysqli_query($link, $exist_query) or die(mysqli_error($link));

    $user = mysqli_fetch_assoc($data);
    if($user){
        if($user['user_email'] === $email){array_push($errors, "Email is already used!");}
    }

    if(count($errors) == 0){
        $en_password = md5($pass);
        $insert_query = "INSERT INTO users (username, user_email, user_pass) VALUES ('$username', '$email', '$en_password')";
        mysqli_query($link, $insert_query) or die(mysqli_error($link));
    
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        
    

        $id_query = "SELECT user_id FROM users WHERE user_email = '$email' LIMIT 1";
        $iddata = mysqli_query($link, $id_query) or die(mysqli_error($link));

        $userid = mysqli_fetch_assoc($iddata);
        $_SESSION['userid'] = $userid['user_id'];
        echo "<script>location.href='index.php'</script>";
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            echo $error . "<br>";
        }
        echo  "<a href='registration.php'><button>Try Again</button></a>";
    }

?>