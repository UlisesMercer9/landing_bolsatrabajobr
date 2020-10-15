<?php   
    $destinatario = 'leadshhv@bolsarosa.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $state = $_POST['state'];

    $asunto = 'Lead landing BT';

    $header = "Lead landing BT";
    $contenido = "Email: " . $email ."\nTelefono: " . $phone . "\nCompañia: " . $company . "\nPosición: " . $position . "\nEstado: " . $state . "\nAtentamente: " . $name;

    mail($destinatario, $asunto, $contenido, $header);
    echo "<script>alert('Solicitud de contacto enviada exitosamente, nos pondremos en contacto contigo muy pronto ya puedes cerrar esta página.')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>