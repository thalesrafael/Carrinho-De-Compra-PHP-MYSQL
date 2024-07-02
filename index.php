<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
   <meta charset="UTF-8">
  <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
    <meta charset="utf-8">
   <STYLE type="text/css"> 
A:link {text-decoration:none;color:#FFFFFF;} 
A:visited {text-decoration:none;color:#98F5FF;} 
A:active {text-decoration:none;color:#FFFFFF;} 
A:hover {text-decoration:underline;color:#FFFFFF;} 
</STYLE>

    <link rel="stylesheet" type="text/css" href="style.css">
<title> Tela de login World Smart </title>


  </head>

  <body style="background-image: url(parede.png)">
  <table>
<tr>
<td> <div>

 <div id="main-banner">
<img src="icone.jpg"  height=100% >

<div id="sup_direito">

      <form class="form-signin" method="POST" action="valida.php">
     
        <label for="inputEmail" class="sr-only">Email:</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
		</br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
		</br>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> </td>
</tr>
</table>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  <div class="div1"><h2>Seja Bem Vindo!</h2>
        <p>
    </div>
    <div id="sliderFrame">
        <div id="slider">
		
	<!-- 	Append this section to change the images -->
            
			
            <img src="images/imagem1.jpg" alt="Nova linha Iphone 6S garanta já o seu!" />
            <img src="images/imagem2.png" alt="Não perca a nova linha Iphone 5SE." />
            <img src="images/imagem3.jpg" alt="Galaxy S6." />
            <img src="images/imagem4.jpg" alt="Galaxy S5." />
			    
       
	   </div>
        <div id="htmlcaption" style="display: none;">
            
        </div>
    </div>

    <div class="div2">
       
    </div>
</body>
</html>