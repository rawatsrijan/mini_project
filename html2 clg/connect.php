<?php
$firstname=$_POST['firstname'];

$lastname=$_POST['lastname'];

$email=$_POST['email'];


$zip=$_POST['zip'];


$city=$_POST['city'];

$phonenumber=$_POST['phonenumber'];


$conn=new mysqli('localhost','root','','gehu');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
$stmt=$conn->prepare("insert into form(firstname,lastname,email,zip,city,phonenumber ) values(?,?,?,?,?,?)");
$stmt->blind_param("sssisi",$firstname,$lastname,$email,$zip,$city,$phonenumber );
$stmt->execute();
echo "registration successfully";
$stmt->close(); 
$conn->close();
}
?>