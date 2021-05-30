<?php
    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "gbv" ;

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['Submit']))
    {

        if(!empty($_POST['fullName']) && !empty($_POST['age']) && !empty ($_POST['email']) && !empty($_POST['contactnum'])&& !empty($_POST['paddress'])&& !empty($_POST['comment']))
        {
            $fullName = $_POST['fullName'] ;
            $age = $_POST['age'] ;
            $email = $_POST['email'] ;
            $contactnum = $_POST['contactnum'] ;
            $paddress = $_POST['paddress'] ;
            $comment = $_POST['comment'] ;

            $query = "INSERT into contact(fullName, age, email, contactnum, paddress, comment) values ('$fullName', '$age', '$email', '$contactnum','$paddress','$comment')";
            
            
            $run = mysqli_query($con, $query) ;

            if($run)
            {
                echo '<script>alert("Thank you, your case was reported successfully.")</script>';
            }
            else{
                echo '<script>alert("form not submitted")</script>';
            }
        }
    }
    else{
        echo '<script>alert("ERROR 404: failed to submit form.")</script>';
    }
?>