<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>

    body{
        padding-top:4.2rem;
        padding-bottom:4.2rem;
        background:#26c0d8;
    }
    a{
        text-decoration:none !important;
    }
    h1,h2,h3{
        font-family: 'Kaushan Script', cursive;
    }
    .myform{
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
    }
    .tx-tfm{
        text-transform:uppercase;
    }
    .mybtn{
        border-radius:50px;
    }

    .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
    }
    .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
    }
    .google {
        color:#666;
        width:100%;
        height:40px;
        text-align:center;
        outline:none;
        border: 1px solid lightgrey;
    }
    form .error {
        color: #ff0000;
    }
    #second{display:none;}

</style>
<body>
<div class="container">
    <div class="row">
        <div style="margin-top: 0" class="col-md-5 mx-auto">
            <center>
            <img width="30%" style="margin-bottom: 30px" class="img img-fluid" src="{{asset('logo.svg')}}" alt="">
            </center>
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>
                    <form action="" method="post" name="login">
                        <h1>vai</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu CPF">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Senha</label>
                            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                            <p class="text-center">
                                Ao se inscrever você aceita nossos  <a href="#">Termos de Uso</a></p>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p class="text-center">
                                <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                    </i> Entre utilizando Google
                                </a>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Não tem conta?  <a href="#" id="signup">Cadastre aqui</a></p>
                        </div>
                    </form>

                </div>
            </div>
            <div id="second">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1 >Inscrever-se
                            </h1>
                        </div>
                    </div>
                    <form action="{{ route('register') }}" name="registration">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text"  name="name" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Digite seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text"  name="cpf" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Digite seu CPF">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone/Whatsapp</label>
                            <input type="text"  name="whatsapp" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Digite seu telefone ou whatsapp">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nascimento</label>
                            <input type="date" name="nascimento"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Senha</label>
                            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Digite uma senha">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirme sua senha</label>
                            <input type="password" name="password_confirmed" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Confirme sua senha">
                        </div>
                        <div class="col-md-12 text-center mb-3">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Cadastrar</button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <p class="text-center"><a href="#" id="signin">Já tem uma conta?
                                    </a></p>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("#signup").click(function() {
        $("#first").fadeOut("fast", function() {
            $("#second").fadeIn("fast");
        });
    });

    $("#signin").click(function() {
        $("#second").fadeOut("fast", function() {
            $("#first").fadeIn("fast");
        });
    });



    $(function() {
        $("form[name='login']").validate({
            rules: {

                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,

                }
            },
            messages: {
                email: "Please enter a valid email address",

                password: {
                    required: "Please enter password",

                }

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });



    $(function() {

        $("form[name='registration']").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },

            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>
