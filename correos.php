<?php   
    //$destinatario = 'leadshhv@bolsarosa.com';

    $destinatario = 'ulisesmercer9@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $compañia = $_POST['compañia'];
    $posicion = $_POST['posicion'];
    $estado = $_POST['estado'];

    $asunto = 'Lead landing BT';
    $mensaje = "La información puede ser consultada en: https://docs.google.com/spreadsheets/d/1i08cVO5DVdFfXGTHSq-5RQm1gy0olsUvBCFgzXVGDzE/edit#gid=0";

    $header = "Lead landing BT";
    $contenido = "Email: " . $email ."\nTelefono: " . $telefono . "\nCompañia: " . $compañia . "\nPosición: " . $posicion . "\nEstado: " . $estado . "\nAtentamente: " . $nombre . "\n" . $mensaje;

    mail($destinatario, $asunto, $contenido, $header);
    echo "<script>alert('Solicitud de contacto enviada exitosamente, nos pondremos en contacto contigo muy pronto ya puedes cerrar esta página.')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>