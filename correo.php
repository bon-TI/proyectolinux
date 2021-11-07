<?php
    // Esto es el correo que se enviara
    $destinatario = 'jose.tapia99@uabc.edu.mx';
    
    $nombre = $_POST['fullname'];
    $asunto = $_POST['affair'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['message'];

    $header = "Mensaje enviado desde la página de Taller de Linux";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre . $telefono;
    
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='contacto.html'\",1000)</script>";
    
?>