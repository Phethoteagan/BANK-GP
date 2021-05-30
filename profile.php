<?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header("location: admin.php"); // Redirecting To Home Page
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
    <link href="backend.css" rel="stylesheet" type="text/css">
    <style>

            .nav ul li::after{


                content: '';
                width: 0%;
                height: 2px;
                background: #912A77;
                display: block;
                margin: auto;
                transition: 0.5s;
            

             }
            .nav ul li:hover::after{
                width: 100%;
            

            }
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
                margin-bottom: 30px
            }
            #dashboard table{
                margin-left:27%;
                margin-top: 5%;
            }
            #dashboard th{
                color:#2f90ff;
                font-size: 20px;
                font-weight:bold;
                font-family: algeria;
            }
            #btns{
                margin-right:40%;
                margin-top:18%;
            }
            .motto{
                color: white;
            }
    </style>
</head>

<body>
    <section>
    <div class="head">
            <header>
                <div><a href="contact.html" class="logo"><img src="images/logo.jpeg" alt="logo"></a></div>
                <div class="nav">
                  <ul class="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a class="active"href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
               
            </header>
        </div>
    
     
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <b id="logout"><a href="logout.php">Log Out</a></b>
        </div>
        <div id="dashboard">
            <table border="2">
                <tr>
                    <th>ID</th>
                    <th>Full Names</th>
                    <th>Age</th>
                    <th>Email Address</th>
                    <th>Contact</th>
                    <th>Physical Address</th>
                    <th>Comment</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "gbv");
                if ($conn-> connect_error) {
                    die("Connection failed:". $conn-> connect_error);
                }
                $sql = "SELECT id,fullName, age, email, contactnum, paddress, comment from contact";
                $result = $conn-> query($sql);
                while ($row = $result-> fetch_assoc()) 
                {
                ?>
                    </tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["fullName"];?></td>
                        <td><?php echo $row["age"];?></td>
                        <td><?php echo $row["email"];?></td>
                        <td><?php echo $row["contactnum"];?></td>
                        <td><?php echo $row["paddress"];?></td>
                        <td><?php echo $row["comment"];?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>"> Edit </a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a></td>
                    </tr>
                <?php
                }
                $conn-> close();
                ?>
            </table>
        </div>
    </section>
    <footer>
            <div id="left-footer">
                <h4>&#169 2021 Development Software Students@UJ</h4><br/>
                <em><b>contact:</b> 011 243 7563/ 083 620 5584 </em><br/><br/>
                <em><ul><b>Address:</b>Block C</ul> 
                    <ul>85 Protea Road</ul> 
                    <ul>Kingsley office park</ul>
                    <ul>Chislehurston</ul>
                    <ul>Sandton</ul></em>
                    <br/>
                    <b>Email: </b>sililocom640@gmail.com
            </div>
        
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/GBViolence">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://youtube.com/channel/UCE3ND3jdBmxWU_3fleAaTWg">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/gbvunited?s=11">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/united_against_gbv?utm_medium=copy_link">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="motto">It looks impossible until its done.Together We Can</p>
            </div>
        </footer>
</body>
</html>