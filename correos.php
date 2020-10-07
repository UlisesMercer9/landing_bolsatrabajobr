<?php   
    $destinatario = 'ulisesmercer9@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $state = $_POST['state'];

    $asunto = 'Información enviada desde HeadHunter';

    $header = "Enviado desde la página de Landing page HeadHunter";
    $contenido = "Email: " . $email ."\nTelefono: " . $phone . "\nCompañia: " . $company . "\nPosición: " . $position . "\nEstado: " . $state . "\nAtentamente: " . $name;

    mail($destinatario, $asunto, $contenido, $header);
    echo "<script>alert('correo enviado existosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";

?>