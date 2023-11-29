<?php
include"config.php";

$title=$_POST['title_note'];
$note=$_POST['note_note'];
$query="INSERT INTO tb_note VALUES(null,'$title','$note')"; 
$sql=mysqli_query($conn,$query);

if($sql){
    header("location:index.php");
}else{
    echo $query;
}
?>