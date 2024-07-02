<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'carrinho');

$quantidade= $_GET['quantidade'];
$id= $_GET['id'];

$sql = "select nome, descricao, valor, imagem from produtos where id=$id";
$res = mysqli_query($con, $sql);
$itens = mysqli_fetch_array($res, MYSQLI_NUM);

?>

  <html>

  <head>
<meta charset="UTF-8">
  </head>

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
    <link rel="stylesheet" type="text/css" href="style.css">
<title> Tela de login World Smart </title>


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

		$_SESSION['id'][] = $id;
       	$_SESSION['nome'][] = $itens[0];
        $_SESSION['descricao'][]=$itens[1];
        $_SESSION['valor'][]=$itens[2];              
        $_SESSION['imagem'][]=$itens[3];
        $_SESSION['quantidade'][]= $quantidade;

		$i = 0;
        
        echo "<table width=100%'>";
         
         
         echo "<tr>";
         echo "<td>Id:</td>";
         echo "<td>Nome:</td>";
         echo "<td>Descrição:</td>";
         echo "<td>Valor:</td>";
         echo "<td>Imagem:</td>";
         echo "<td>Quantidade:</td>";
         echo "</tr>";

        while(!empty( $_SESSION['nome'][$i])){
            echo "<tr>";
            echo "<td>".$_SESSION['id'][$i]."</td>";
           	echo "<td>".$_SESSION['nome'][$i]."</td>";
           	echo "<td>".$_SESSION['descricao'][$i]."</td>";
           	echo "<td>".$_SESSION['valor'][$i]."</td>";
           	echo "<td><center><img src='".$_SESSION['imagem'][$i]."' width=60px></center></td>";
           	echo "<td>".$_SESSION['quantidade'][$i]."</td>";
            echo "</tr>";
            $i++;
        }
              echo "</table>"; 
       	?><br>
       	<center> <a href= "finalizarcompra.php"> Finalizar Compra </a> </center><br>
        <center><a href= "cliente.php">  continuar comprando </a></center>

