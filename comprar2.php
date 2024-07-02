  <?php
	session_start();
	?>

  <html>
	<STYLE type="text/css"> 
A:link {text-decoration:none;color:#1E90FF;} 
A:visited {text-decoration:none;color:#98F5FF;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#00BFFF;} 



</STYLE>
    <link rel="stylesheet" type="text/css" href="style.css">
<title> Tela de login World Smart </title>
<head>
<meta charset="UTF-8">
  </head>
  <body style="background-image: url(parede.png)">
  <table>
<tr>
<td> <div>
 <div id="main-banner">
<img src="icone.jpg"  height=100% >
<div id="sup_direito">
<?php
	echo "Usuario: ". $_SESSION['usuarioNome'];	
?>
</br>
<a href="sair.php">Sair</a>
</div> </td>
</tr>
</table>
<br>
<body><div align="center">

	<br>
<?php     
    $con = mysqli_connect('localhost','root', '','carrinho');
	$id = $_GET['id'];
      $sql = "SELECT * FROM produtos WHERE id = $id";
        $res = mysqli_query($con, $sql);
		
			  if ($itens = mysqli_fetch_array($res, MYSQL_BOTH)) {
		
		     echo "<h2> $itens[1]  </h2>";
		        echo " <h2> Imagem do produto:</h2>";
				  echo"<img src='imagens/".$itens[4]."'> <br>";
					 echo"<br>Descrição do produto: ".$itens[2];
					   echo"<br> <br> Valor unitário: <br>".$itens[3];
			    echo "<form method='GET' action='comprarproduto.php?id=".$id."'>";
				   echo" <br>Quantidade: <br> <input type = 'text' name='quantidade' <br><br>";
				     echo'<button type = "submit" > Adicionar ao carrinho</button';
					    echo'</form>';
			    
			  }
			   
		   ?>

</div>
</body>
</html>		  
		   
		   
		   