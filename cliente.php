
<html>
	<STYLE type="text/css"> 
A:link {text-decoration:none;color:#00BFFF;} 
A:visited {text-decoration:none;color:#98F5FF;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#FFFFFF;} 


body header {
 background: #CD5555;
  padding: 30px 20px;
  color: white;
  font-weight: 600;
}
body img{
	height:120px;
}
<STYLE type="text/css"> 
A:link {text-decoration:none;color:#1E90FF;} 
A:visited {text-decoration:none;color:#00CD00;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#00BFFF;} 
#Barrinha{

z-index:9;

position: absolute;

left: 1110px; top:150px;

width: 200px; height: 50px;



}
#Barrinha2{

z-index:9;

position: absolute;

left: 10px; top:150px;

width: 200px; height: 50px;



}



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
</STYLE>
    
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title> Tela de Produtos </title>
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



<br><br>
	<div id="fundo">

<h2>Lista de Produtos </h2>


<table class="responstable">
<tr>
   <td> Codigo do produto</td>
   <td> Nome</td>
     <td>Descrição </td>
    <td> Valor </td>
     <td> Imagem </td>
	 <td> Opção</td>
</tr>

</div>
</div>
<?php
$con = mysqli_connect('localhost','root', '','carrinho');
$sql ='SELECT id, nome, descricao, valor, imagem FROM produtos';
$res = mysqli_query($con, $sql); 



while ($itens = mysqli_fetch_array($res, MYSQLI_NUM)){
	
echo'<tr>';
	echo'<td>'.$itens[0].' </td>';	
	echo'<td>'.$itens[1].'</td>';
	echo'<td>'.$itens[2].'</td>';
	echo'<td>'.$itens[3].'</td>';
	echo '<td>'.'<img src="imagens/'.$itens[4].'">'.'</td>';
	echo'';
	echo"<td><a href='comprar.php?id=".$itens[0]."'> Adicionar ao carrinho </a> ";
     

	  echo '</tr>'; 
	  
}	
	   
?> 

</table>

   
</body>
</html>