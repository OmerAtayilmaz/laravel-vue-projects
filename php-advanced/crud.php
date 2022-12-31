<?php
$host="localhost";
$user="root";
$password="";
$dbname="testdb";

$connection=mysqli_connect($host,$user,$password,$dbname);
if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

$message= "Hello as an PHP AWESOME DEVELOPER";

#CREATE
$sql="INSERT INTO test (message) VALUES('$message')";
if(mysqli_query($connection,$sql)){
    echo "CREATED GRACEFULLY!";
}else{
    echo mysqli_error();
}

#READING DATA
$readData="SELECT * FROM test";
$dataList=mysqli_query($connection,$readData);
if(mysqli_num_rows($dataList)>0){
    while ($row=mysqli_fetch_assoc($dataList)){
        echo "id:".$row['id']. " - Message => ". $row["message"] . "\n";
    }
}

#UPDATING DATA
$newMessage="Here is updated awesoem data!";

$updateQuery="UPDATE test SET message='$newMessage' where id=3";
if(mysqli_query($connection,$updateQuery)){
    echo "Record updated gracfully!";
}

#DELETING DATA

$id=2;
$deleteQuery="DELETE FROM test where id=$id";
if(mysqli_query($connection,$deleteQuery)){
    echo "Record Deleted Gracefully!";
}

mysqli_close($connection);
?>