<?php
include 'conexao.php';

if(isset($_GET['id'])){
$sql = "delete from usuarios where id =".$_GET['id'];
if(mysqli_query($conn , $sql)){
header('Location:listauser.php');
} else {
echo "Error ".mysqli_error($conn);
}
}