<?php
function setComments($conn){
    session_start();
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comment (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}

function getComment($conn) {
    $sql = "SELECT * FROM comment";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='commentBox'><p>";
            echo $row['uid']."<br>";
            echo nl2br($row['message']);
        echo "</p></div>";
    }
}
