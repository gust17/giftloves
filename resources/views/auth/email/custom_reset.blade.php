{{-- resources/views/email/reset_password.blade.php --}}

    <!DOCTYPE html>
<html>
<head>
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados para o e-mail */
        /* email-style.css */

        /* Estilos globais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            color: #333333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos do cabeçalho do e-mail */
        .email-header {
            background-color: #1384ad;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .email-header h1 {
            font-size: 24px;
            margin: 0;
        }

        /* Estilos do conteúdo do e-mail */
        .email-content {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }

        /* Estilos do botão */
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #1384ad;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #18ace3;
        }

        /* Estilos do rodapé do e-mail */
        .email-footer {
            text-align: center;
            margin-top: 20px;
        }

        .email-footer p {
            margin: 0;
        }

    </style>
</head>
<body>

<body>
<div class="container text-center">
    <img style="margin-bottom: 10px" width="250px" src="{{ $message->embed(public_path('logo.png')) }}" alt="Logo" class="logo">
    <div class="email-header">

        <h1>Recuperação de Senha</h1>
    </div>
    <div class="email-content">
        <p>Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.</p>
        <p>
            Clique no botão abaixo para redefinir sua senha:
            <br>
            <a class="btn" href="{{ $resetUrl }}">Redefinir Senha</a>
        </p>
        <p>Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.</p>
    </div>
    <div class="email-footer">
        <p>© {{ date('Y') }} Infoconsig. Todos os direitos reservados.</p>
    </div>
</div>
</body>

</body>
</html>
