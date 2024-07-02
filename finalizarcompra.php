<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'carrinho');



?>

  <html>

  <head>
<meta charset="UTF-8">
  </head>

  <STYLE type="text/css"> 
A:link {text-decoration:none;color:#1E90FF;} 
A:visited {text-decoration:none;color:#98F5FF;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#00BFFF;} 



</STYLE>
    <link rel="stylesheet" type="text/css" href="style.css">
<title> Finalizar Compra </title>


  <body style="background-image: url(parede.png)">

 <div id="main-banner">
    <img src="icone.jpg"  height=100% >
    <div id="sup_direito">

    <?php
  echo "Usuario: ". $_SESSION['usuarioNome']; 
    ?>
    </br>
    <a href="sair.php">Sair</a>
    </div>

</div> 
<?php

$login = $_SESSION['usuarioNome'];
if (!isset($_SESSION['usuarioNome'])){
  
   header('location:index.php');

  return;
} else{
  
  echo "";
}


?>

<?php

    $resultaid=mysqli_query($con,"SELECT * FROM venda ORDER BY codigovenda DESC");
    $resul=mysqli_fetch_array($resultaid);
    $codigovenda= $resul[0]+1;
    $sql = "insert into venda(codigovenda, usuario) values ('".$codigovenda."','".$login."')";

  $res = mysqli_query($con, $sql);
  $i=0;
while (!empty($_SESSION['nome'][$i])) {

     $sql = "insert into vendaproduto(codigocompra, produto, quantidade, valor) values ( ".$codigovenda.",'".$_SESSION['nome'][$i]."', ".$_SESSION['quantidade'][$i].", ".$_SESSION['valor'][$i].")";
     $res = mysqli_query($con, $sql);  
     $i++;     
}

echo '<table style="font-size:20px; font-family:Arial; color:#00BFFF;">
<tr><td> Compra realizada com sucesso ,aguarde a entrega do(s) produto(s) e volte sempre!</td></tr>
</table>';  
unset($_SESSION['nome']);

       
        unset($_SESSION['imagem']);
        unset($_SESSION['descricao']);
        unset($_SESSION['valor']);
        unset($_SESSION['quantidade']);
?>
<br>
<br>
 <center><img src="images/carrinho.png"></center>