<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Envío</title>
    <link rel="stylesheet" href="styles.css"> 
</head>

<body>
    <main style="text-align: center; padding: 50px;">
        <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email']; 
        $asunto_form = $_POST['asunto'];
        $mensaje_cuerpo = $_POST['mensaje'];

       /*-----Correo---------------*/
        $destino = "info@fauvismo.com"; // <-- Tu correo
        $asunto_final = "Contacto: " . $asunto_form;
        
        $cuerpo_mensaje = "Nombre: " . $nombre . "\n";
        $cuerpo_mensaje .= "Correo: " . $email . "\n";
        $cuerpo_mensaje .= "Asunto: " . $asunto_form . "\n\n";
        $cuerpo_mensaje .= "Mensaje:\n" . $mensaje_cuerpo;

        $header = "From: " . $nombre . " <" . $email . ">";

        /*--------envio de mensaje----------*/
        $enviado = mail($destino, $asunto_final, $cuerpo_mensaje, $header);

        if($enviado == true){
            echo "<h1 style='color: #FF6347;'>¡Su correo ha sido enviado con éxito!</h1>";
            echo "<p style='font-size: 1.2em;'>Gracias, **" . $nombre . "**.</p>";
        } else {
            echo "<h1 style='color: #B22222;'>Hubo un error en el envío del mail.</h1>";
            echo "<p style='font-size: 1.2em;'>El código se ejecutó, pero el servidor no pudo enviar el correo.</p>";
        }
        ?>
        <p style="margin-top: 30px;"><a href="recursos.php">Volver al Formulario</a></p>
    </main>
</body>

</html>
