<?php
    session_start();
    require_once 'connect.php';

    $userid = $_SESSION['userid'];

    if(isset($_POST['submit'])){
        $extentions = array('jpeg', 'jpg', 'gif', 'png');
        
        for( $i = 0; $i < 4; $i++ ){
            $filename = $_FILES['imgs']['name'][$i];
            $tempfilepath = $_FILES['imgs']['tmp_name'][$i];
            $newfilename = $i+1 . ".jpg";

            echo $filename . "<br>" . $tempfilepath . "<br>". $newfilename . "<br><br>";

            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(in_array($ext, $extentions)){
                $createtime = date('Y-m-d h:i:s');
                move_uploaded_file($tempfilepath, 'imgs/'.$newfilename);

                //insert into DB
                $insertquery = "INSERT INTO imgs (img_name, old_img_name, img_create_date, user_id) VALUES";
                $insertquery .= "('" . $newfilename . "', '" . $filename ."', '" . $createtime . "', '" . $userid . "')"; 
                mysqli_query($link, $insertquery) or die(mysqli_error($link));

                echo "<script>location.href='index.php?id=" . $userid ."'</script>";
            }else{
                echo "You cannot upload this type of files.";
            }
        }






        //     foreach($_FILES['imgs']['tmp_name'] as $key => $value ){
                
        //         $filename = $_FILES['imgs']['name'][$key];
        //         $tempfilename = $_FILES['imgs']['tmp_name'][$key];

        //         $newfilename = '';
        //         
        //         if(in_array($ext, $extentions)){
        //             if(!file_exists('imgs/'.$filename)){
        //                 $newfilename = $key+1 . ".jpg";
        //             }
        //             $createtime = date('Y-m-d h:i:s');
        //             move_uploaded_file($tempfilename, 'imgs/'.$newfilename); 
        //             // insertion
        //             $insertquery = "INSERT INTO imgs (img_name, img_create_date, user_id) VALUES";
        //             $insertquery .= "('" . $newfilename . "', '" . $createtime . "', '" . $userid . "')"; 
        //             mysqli_query($link, $insertquery) or die(mysqli_error($link));
                    
        //             echo "<script>location.href='index.php?id=" . $userid ."'</script>";
        //         }else{
        //             echo "You cannot upload this type of files.";

        //         }
            
        // }
    }


?>