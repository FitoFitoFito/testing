<?php

    include('./functions.php');


    if(isset($_POST['submit'])){

        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
        $comentario = filter_var($_POST['comentario'], FILTER_SANITIZE_STRING);

        if(empty($nombre)){
            $errores .= '<li>Rellena el nombre</li>';
        };

        if(empty($correo)){
            $errores .= '<li>Rellena el correo</li>';
        }else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= '<li>Introduce un correo correcto</li>';
        };

        

        if(empty($errores)){
            $to='rodolfodelafuentelopez@gmail.com';
            $subject='<h1>Enviado desde la web de palo</h1>';
            $message='<h2>Enviado por: ' . $nombre .'- Correo: '. $correo . '</h2>'."\r\n";
            $message.='<p>Mensaje: ' . $comentario.'</p>';
            $header='MIME-Version: 1.0'."\r\n";
            $header.='Content-type: text/html; charset=UTF-8'."\r\n";

            if(mail($to, $subject, $message, $header)){
                $enviado = true;
            }else{
                $enviado = false;
            };
        };

        
        
        
    };




    require_once('./views/formulario.view.php');
?>