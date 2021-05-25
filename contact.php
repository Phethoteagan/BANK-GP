<?php
    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "gbv" ;

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['Submit']))
    {

        if(!empty($_POST['fullName']) && !empty($_POST['age']) && !empty ($_POST['email']) && !empty($_POST['contactnum'])&& !empty($_POST['paddress']))
        {
            $fullName = $_POST['fullName'] ;
            $age = $_POST['age'] ;
            $email = $_POST['email'] ;
            $contactnum = $_POST['contactnum'] ;
            $paddress = $_POST['paddress'] ;

            $query = "INSERT into contact(fullName, age, email, contactnum, paddress) values ('$fullName', '$age', '$email', '$contactnum','$paddress')";
            
            
            $run = mysqli_query($con, $query) ;

            if($run)
            {
                echo "form submitted successfully";
            }
            else{
                echo "form not submitted";
            }
        }
        else
        {
            echo "please fill in all fields";
        }

    }
    else{
        echo "failed to submit your form ";
    }
?>