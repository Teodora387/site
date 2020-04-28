<?php
$contact = mysqli_connect('localhost', 'root', '','contact');

if(!$contact){
    die("Connection failed: ".mysqli_connect_error());
}