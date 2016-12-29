<?php 
include_once("librerias/funciones.php");
$titulo_paxina="Contacto";
include('templates/header.php');

 $name = $email = $message = $result = "";
      $nameErr = $emailErr = $menssageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")  { 

  if (empty($_POST["nome"])) {
    $nameErr = "Introduza o nombre";
  } else {
    $name = test_input($_POST["nome"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Permítense só letras e espacios en branco";
    }
  }

if (empty($_POST["email"])) {
    $emailErr = "Introduza o correo electrónico";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }



  if (empty($_POST["mensaxe"])) {
    $messageErr = "";
  } else {
    $message = test_input($_POST["mensaxe"]);
  }
  

  $from = 'Web Ramón Nicolás'; 
  $to = 'sonia.b.rey@gmail.com'; 
  $subject = 'Mensaxe do formulario de contacto';
    
  $body = "De: $name\n E-Mail: $email\n Mensaxe:\n $message";

 
  if (mail ($to, $subject, $body, $from)) {

     $result='<div class="alert alert-success">Grazas! Mensaxe enviada.</div>';
   } else {
     $result='<div class="alert alert-danger">Produciuse un erro no envío da súa mensaxe. Por favor, ténteo de novo.</div>';
  }


}


?>

<div class="wrapper margen10">
         
                <div class="container">
                    <div class="row">
                        <div class="w3-card-12 col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" style="padding:5%;">
                            <div class="register-card">
                                <h3 class="title">Contacto</h3>
                                <form class="register-form" role="form" method="post" action="" >
                                	<label>Nome</label>
                                	<input class="form-control" placeholder="Nome" name="nome" id="nome" required>
                                	<?php echo "<p class='text-danger'>$namelErr</p>";?>
                                	<label>Correo electrónico</label>
                                    <input class="form-control" id="email" name="email" placeholder="Correo electrónico" type="email" required>
          							<?php echo "<p class='text-danger'>$emailErr</p>";?>

                                	<label>Consulta ou comentario</label>
                                	 <textarea class="form-control" id="mensaxe" name="mensaxe" placeholder="Mensaxe" rows="5" value="<?php echo htmlspecialchars($_POST['mensaxe']); ?>" required></textarea>
                                    <br><br>
                                   
									<div><button class="btn btn-primary btn-block" name="submit" type="submit" style="font-size:1.2em; font-weight:bold;">Enviar</button></div>
                                     <br>
                                     <div><?php echo $result; ?></div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div> 
             
        </div>
    


<?php 
include('templates/footer.php');
?>