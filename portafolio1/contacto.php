<?php 
include 'includes/header.php'; 
?>

    <main>
        <form class="formulario" method="POST">

            <fieldset>
                <legend>Digite todos sus datos</legend> 

                <div class="campos">

                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Digite nombre completo" required autofocus>
                    </div>            
                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="+57 **********">
                    </div>                                  
                    <div class="campo">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="pepitoperez@correo.com">
                    </div>                                 
                    <div class="campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje"></textarea>
                    </div>

                    <input type="submit" class="btn" onclick="enviarFormulario()">
    
                </div>

            </fieldset>
        </form>
    </main>

<?php 
require __DIR__.('/includes/conexion_bd.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $sql = "INSERT INTO formulario(nombre, telefono, correo, mensaje) 
    VALUES ('$nombre', '$telefono', '$email', '$mensaje')";

    $consult = mysqli_query($coneccion, $sql);

    if($consult){
        echo"<script> alert('se envio el formulario')";
    }
}


include 'includes/footer.php'; 


?>

