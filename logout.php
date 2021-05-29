<?php
    session_start();
    if(session_destroy()) 
    {// Destroying All Sessions {
    header("Location: contact.html"); // Redirecting To Home Page
    }
?>