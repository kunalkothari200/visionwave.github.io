<?php
    define('A','localhost');
    define('B','root');
    define('C','');
    define('D','vision');

    $conn = mysqli_connect(A,B,C); 
        if(!$conn){
            echo "connection failed";
        }
    $db_select=mysqli_select_db($conn,D); 

    $sql = "CREATE TABLE contact_form( ".
    "id INT NOT NULL AUTO_INCREMENT, ".
    "name VARCHAR(40) NOT NULL, ".
    "contact_no VARCHAR(15) NOT NULL, ".
    "subject VARCHAR(40) NOT NULL, ".
    "Message VARCHAR(200) NOT NULL, ".
    "PRIMARY KEY ( id )); ";
    if(mysqli_query($conn,$sql)){
        echo "contact tabel created";
    }

    $full_name = $_POST['name'];
    $contact_no = $_POST['contact'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="INSERT INTO `contact_form`(`id`, `name`, `contact_no`,`subject`, `message`) VALUES ('[]','[$full_name]','[$contact_no]','[$subject]','[$message]')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:index.html');
    }
?>