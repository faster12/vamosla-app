<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vamosla app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://kit.fontawesome.com/98b7efc8ef.js" crossorigin="anonymous"></script>

        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md text-danger">

                    test

                </div>

            </div>

        </div>
        <div class="jumbotron">
            <div class="container d-flex justify-content-center align-items-center full-height">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="https://dummyimage.com/300x250/000/fff.png">
                    </div>
                    <div class="col-sm-6">
                        intro e mensagem de slogan
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-info">
                                        <span class="fa fa-send"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="help-block">
                                Cadastre seu Email aqui - quando estiver tudo pronto te avisaremos!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center full-height">
                Saiba quem está online em tempo real
            </div>
            <div class="container d-flex justify-content-center align-items-center full-height">
                forme times e separe por nível de amizade e habilidade
                aqui não classificamos por elo, mas por nível de amizade
            </div>
            <div class="container d-flex justify-content-center align-items-center full-height">
                em breve - torneios
            </div>
            <div class="container d-flex justify-content-center align-items-center full-height">
                em breve - SUPER ABA - profissional separado do casual
            </div>
        </div>
        <div>
            @php 
                if(DB::connection()->getDatabaseName())
                {
                   echo "Connected to database ".DB::connection()->getDatabaseName();
                }else{
                    echo 'test failed';
                }
            @endphp
        </div>
    </body>
</html>

