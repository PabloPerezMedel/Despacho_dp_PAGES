<?php 
    $destinatario = 'despacho.dp@hotmail.com';  //Este es el correo al que se enviaran los mensajes del formulario

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $regimenfiscal = $_POST['regimenfiscal'];
    $serviciosinteres = $_POST['serviciosinteres'];
    $mensaje = $_POST['mensaje'];


    $header = "Enviado desde la página del Despacho dp";
    $mensajeCompleto = $mensaje . "\n Maneras de contactarme: " . $telefono " o tambien por correo el cual es: " . $email " \n tentamente: " . $nombre;

    mail($destinatario, $serviciosinteres, $regimenfiscal, $mensajeCompleto, $header);
    echo "<script> alert('El correo fue enviado exitosamente') </script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000) </script>";
?>