<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KR Asesoría Contable</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/kr.css">
    <style>
        body { background: #f8f9ff; }
        .kr-mail-screen {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
        }
        .kr-mail-box {
            text-align: center;
            max-width: 480px;
            background: #fff;
            border: 1px solid #e8eaf6;
            border-radius: 20px;
            padding: 56px 48px;
            box-shadow: 0 4px 24px rgba(111,126,219,0.1);
        }
        .kr-mail-icon {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 24px;
        }
        .kr-mail-icon.ok { background: rgba(111,126,219,0.1); color: #6f7edb; }
        .kr-mail-icon.err { background: rgba(255,115,97,0.1); color: #ff7361; }
        .kr-mail-title {
            font-size: 1.7rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            margin-bottom: 10px;
            color: #1e2140;
        }
        .kr-mail-sub {
            color: #6c757d;
            font-size: 0.92rem;
            line-height: 1.7;
            margin-bottom: 28px;
        }
        .kr-mail-sub a { color: #6f7edb; }
        .kr-mail-note {
            font-size: 0.75rem;
            color: #aaa;
            margin-top: 16px;
        }
    </style>
</head>
<body>
<div class="kr-mail-screen">
    <div class="kr-mail-box">
<?php
    $to      = "no-reply@c2450293.ferozo.com";
    $subject = "Contacto desde asesoriacontablekr.com.ar";

    $nombre  = htmlspecialchars($_POST['nombre'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');

    $body = "<html><body>
        <p><strong>Nombre:</strong> {$nombre}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Mensaje:</strong> {$mensaje}</p>
    </body></html>";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Contacto Web <no-reply@c2450293.ferozo.com>\r\n";

    $ok = mail($to, $subject, $body, $headers);

    if ($ok) {
        echo '<div class="kr-mail-icon ok"><i class="fas fa-check" aria-hidden="true"></i></div>';
        echo '<h1 class="kr-mail-title">Mensaje enviado</h1>';
        echo '<p class="kr-mail-sub">Nos pondremos en contacto a la brevedad. ¡Gracias por escribirnos!</p>';
        echo '<a href="index.html" class="kr-btn-primary" style="margin:0 auto;">Volver al inicio</a>';
        echo '<p class="kr-mail-note">Serás redirigido automáticamente en unos segundos...</p>';
        echo '<script>setTimeout(function(){ window.location.href="/"; }, 4000);</script>';
    } else {
        echo '<div class="kr-mail-icon err"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i></div>';
        echo '<h1 class="kr-mail-title">Algo salió mal</h1>';
        echo '<p class="kr-mail-sub">Ocurrió un error al enviar tu mensaje. Por favor escribinos directamente a <a href="mailto:info@asesoriacontablekr.com.ar">info@asesoriacontablekr.com.ar</a></p>';
        echo '<a href="contacto.html" class="kr-btn-primary" style="margin:0 auto;">Volver al formulario</a>';
        echo '<script>setTimeout(function(){ window.location.href="/contacto.html"; }, 6000);</script>';
    }
?>
    </div>
</div>
</body>
</html>
