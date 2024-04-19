<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $para = "piscis.proyect@gmail.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellido: $apellido\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Envía el correo electrónico
    mail($para, $asunto, $contenido);
    
    // Redirige al usuario de vuelta a la página de contacto
    header("Location: contacto.html");
    exit;
}
?>
