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

$dbName ="vision";
$sql="CREATE DATABASE $dbName";
if(mysqli_query($conn,$sql)){
    echo "DATABASE CREATED";
}
$sql = "CREATE TABLE pre_register( ".
    "id INT NOT NULL AUTO_INCREMENT, ".
    "name VARCHAR(40) NOT NULL, ".
    "contact_no VARCHAR(15) NOT NULL, ".
    "tran_id VARCHAR(25) NOT NULL, ".
    "sender_name VARCHAR(40) NOT NULL, ".
    "product VARCHAR(40) NOT NULL, ".
    "address VARCHAR(40) NOT NULL, ".
    "city VARCHAR(20) NOT NULL, ".
    "state VARCHAR(20) NOT NULL, ".
    "code VARCHAR(20) NOT NULL, ".
    "alt_no VARCHAR(20) NOT NULL, ".
    "PRIMARY KEY ( id )); ";
    if(mysqli_query($conn,$sql)){
        echo "contact tabel created";
    }

    $full_name = $_POST['fullName'];
    $contact_no = $_POST['contactNumber'];
    $tran_id = $_POST['tranId'];
    $sender_name = $_POST['senderName'];
    $product = $_POST['product'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $alt_no = $_POST['AltNo'];

$sql="INSERT INTO `pre_register`(`id`, `name`, `contact_no`, `tran_id`, `sender_name`, `product`, `address`, `city`, `state`, `code`, `alt_no`) VALUES ('[]','[$full_name]','[$contact_no]','[$tran_id]','[$sender_name]','[$product]','[$address]','[$city]','[$state]','[$code]','[$alt_no]')";
$res = mysqli_query($conn,$sql);

if($res){
    header('location:confirm.php');
}

?>