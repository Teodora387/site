<?php
function setContact($contact){
    session_start();
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
        $result = $contact->query($sql);
    }
}