

  <html>
	<STYLE type="text/css"> 
A:link {text-decoration:none;color:#1E90FF;} 
A:visited {text-decoration:none;color:#00CD00;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#00BFFF;}
.responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}



</STYLE>
    <link rel="stylesheet" type="text/css" href="style.css">
<title> Comprar </title>
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
session_start();
if ( !isset($_SESSION['usuarioNome'])) {


    //Destrói
    session_destroy();
    
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
}else{
	echo "Usuario: ".$_SESSION['usuarioNome'];	
}
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
			 echo" <input hidden type = 'text' name='id' value='$id'> ";
				   echo" <br>Quantidade: <br> <input type = 'text' name='quantidade' <br><br>";
				     echo'<button type = "submit" > Adicionar ao carrinho</button';
					    echo'</form>';
			    
			  }
			   
		   ?>

</div>
</body>
</html>		  
		   
		   
		   