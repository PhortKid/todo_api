<?php
include 'connection.php';

$sql='SELECT * FROM todos';
$query=mysqli_query($conn,$sql);


while($data=$query->fetch_assoc()){
   echo json_encode($data);
}