<?php
    // Llamando a los campos 
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    //Datos para el correo
    $destinatario = 'jose.tapia99@uabc.edu.mx';    
    $asunto_p = 'Contacto desde el Portafolio UABC';

    $carta = "De: $nombre\n";
    $carta .= "Correo: $email\n";
    $carta .= "Telefono: $telefono\n\n";
    $carta .= "Asunto: $asunto\n";
    $carta .= "Mensaje: $mensaje\n";

    //Enviando mensaje
    mail($destinatario, $asunto_p, $carta);
    header('Location:mensaje.html');
    
?>