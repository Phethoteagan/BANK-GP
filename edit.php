<?php
    include "session.php"; // Using database connection file here
    $id = $_GET['id']; // get id through query string
    $qry = mysqli_query($conn,"SELECT * FROM contact WHERE id='$id'"); // select query
    $row = mysqli_fetch_array($qry); // fetch data

    if(isset($_POST['update'])) // when click on Update button
    {
        $fullName = $_POST['fullName'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $contactnum = $_POST['contactnum'];
        $paddress = $_POST['paddress'];
        $edit = mysqli_query($conn,"UPDATE contact SET fullName='$fullName', age='$age',email='$email', contactnum='$contactnum',paddress='$paddress' WHERE id='$id'");

        if($edit)
        {
            mysqli_close($conn); // Close connection
            header("location: profile.php"); // redirects to all records page
            exit;
        }
        else
        {
            echo mysqli_error($conn);
        }    	
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <title>Gender Based violence Victim</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="images/logo.jpeg">
    <style>
            body {
                background-image: url("images/white.jpg");
                background-repeat: no-repeat;
                background-size:cover;
                font-family: "Roboto", sans-serif;
                margin: 0;
            }
            button {
                font-size: 1em;
                color: rgb(255, 255, 255);
                background: rgb(82, 29, 68);
                /*This keeps affecting the float right line 33 display: inline-block; */
                padding: 7px 30px;
                margin-top: 25px;
                text-transform: uppercase;
                text-decoration: none;
                letter-spacing: 2px;
                transition: 0.5s;
                border-radius: 10px;
                float:right;
            }
            button:hover {
            letter-spacing: 6px;
            }
            .container input{
                padding: 7px;
                border-radius: 4px;
                padding-right: 2px;
                margin-left: 70px;
                width: 350px;
            }
            .container{
                border: 2px solid rgb(141, 141, 141);
                border-radius: 8px;
                width: 500px;
                background-color:rgb(129, 49, 108);
            }
            .placeholder{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            
            footer {
                background: black;
                margin-top: 25%;
                margin-left: -0px;
                margin-right: -0px;
                padding: 8px;
                color: rgb(238, 238, 238);
                display: flex;
            }
            footer a {
                color: white;
            }
            
            footer #left-footer {
                flex: 1;
                border-right: 1px solid red;
                padding-left: 32px;
            }
            
            footer #left-footer ul {
                padding: 0;
                list-style: none;
                line-height: 1.5;
            }
            
            footer #right-footer {
                flex: 2;
                padding: 8px;
                text-align: center;
            }
            
            footer #social-media-footer a .fa-facebook,
            footer #social-media-footer a .fa-youtube,
            footer #social-media-footer a .fa-twitter,
            footer #social-media-footer a .fa-instagram {
                color: white;
                transition: 0.4s;
            }
            
            footer #social-media-footer ul {
                display: flex;
                list-style: none;
                justify-content: center;
                padding: 0;
            }
            
            footer #social-media-footer ul li {
                font-size: 48px;
                padding: 16px;
                transition: 0.4s;
            }
            
            footer #social-media-footer ul li:hover a .fa-youtube {
                color: red;
            }
            
            footer #social-media-footer ul li:hover a .fa-facebook {
                color: #3B5998;
            }
            
            footer #social-media-footer ul li:hover a .fa-twitter {
                color: #00ACEE;
            }
            footer #social-media-footer ul li:hover a .fa-instagram {
                background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                background-clip: text;
                border-radius: 10px;
            }
            /* Media Queries */
            
            @media (max-width: 900px) {
                nav ul {
                display: none;
                }
            
                #menu-icon {
                display: flex;
                }
            
                #slideout-menu {
                display: block;
                }

                #searchbox {
                display: none;
                }
            
                #blogpost{
                width:100%;
                border-left:0;
                }
            
                #sidebar{
                display: none;
                }
            }
            
            @media (max-width: 719px) {
                main {
                width: 95%;
                }
            
                section {
                flex-direction: column;
                }
            
                .card,
                .card .card-image img {
                width: 100%;
                }
            
                footer {
                flex-direction: column;
                text-align: center;
                }
            
                footer #left-footer {
                flex: 1;
                border-right: 0;
                padding-left: 0;
                }
            
                footer #right-footer {
                background: black;
                color: black;
                }
            
                footer #right-footer a {
                color: black;
                }
            
                footer #social-media-footer a .fa-facebook,
                footer #social-media-footer a .fa-youtube,
                footer #social-media-footer a .fa-twitter
                footer #social-media-footer a .fa-instagram {
                color: black;
                transition: 0.4s;
                }
            }
            
            @media (max-width: 600px) {
                main {
                width: 100%;
                }
            
                h1 {
                font-size: 48px;
                }
            
                #banner h3 {
                font-size: 20px;
                }
            
                .card {
                text-align: center;
                }
            
            }
            
            @media (min-width: 720px) {
                main {
                width: 95%;
                }
                .card {
                width: 45%;
                }
                .card .card-image img {
                width: 100%;
                }
            }
            
            @media (min-width: 1200px) {
                main {
                width: 85%;
                }
            }
            .logo img{
                width: 60px;
                height: 60px;
            }
            .contact{
                text-align: center;
                font-size: 30px;
                margin-bottom: 30px;
            }
            #dashboard table{
                margin-left:27%;
                margin-top: 5%;
            }
            #dashboard th{
                color:#6495ed;
                font-size: 20px;
                font-weight:bold;
                font-family: algeria;
            }
            #btns{
                margin-right:40%;
                margin-top:10%;
            }
            form label{
                font-weight:bold;
                font-size: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            form{
                margin-left:35%;
                margin-right:35%;
                margin-top: 10px;
                margin-bottom:-18%;
                border: 2px solid white;
            }
            input[type=text]
            {
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            padding-left:30px;
            padding-right:30px;
            font-size:20px;
            }
            input[type=submit]
            {
            width:100%;
            background-color:#2f90ff;
            color:#fff;
            border:2px solid white;
            padding:10px;
            font-size:20px;
            cursor:pointer;
            border-radius:5px;
            margin-top: 5px;
            }
            #update{
                font-weight:bold;
                font: 30px sans-serif;
                color: purple;
                background-color:snow;

            }
    </style>
</head>

<body>
    <section>
        <div class="head">
            <header>
                <div><a href="index.html" class="logo"><img src="images/logo.jpeg" alt="logo"></a></div>
                <ul class="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a class="active"href="contact.html">Contact Us</a></li>
                </ul>
            </header>
        </div>
    </section>
        <div id="update">
            <h3>Update Data</h3>
        </div>
        <form method="POST">
            <label>Full Name:</label>
            <input type="text" name="fullName" value="<?php echo $row['fullName'] ?>" placeholder="Enter Full Name" Required><br>
            <label>Age:</label>
            <input type="text" name="age" value="<?php echo $row['age'] ?>" placeholder="Enter Age" Required><br>
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter Email" Required><br>
            <label>Contact No:</label>
            <input type="text" name="contactnum" value="<?php echo $row['contactnum'] ?>" placeholder="Enter Contact" Required><br>
            <label>Home Address:</label>
            <input type="text" name="paddress" value="<?php echo $row['paddress'] ?>" placeholder="Enter Address" Required><br>
            <input type="submit" name="update" value="Update">
        </form>
    <footer>
        <div id="left-footer">
            <h4>&#169 2021 Development Software Students</h4>
        </div>
    
        <div id="right-footer">
            <h3>Follow us on</h3>
            <div id="social-media-footer">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/Real-life-comming-soon-455037398231464">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/gbvunited?s=11">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/wbankgp?utm_medium=copy_link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p></p>
        </div>
    </footer>
</body>

</html>