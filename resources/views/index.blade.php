<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
				font-size:15px;
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
                font-size: 76px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			.text{
				margin: 70px auto 0px;
				width: 800px;
				text-align:left;
				
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">                   
					API
                </div>

                <div class="links">
                    <a href="">Главная</a>
                    <a href="informationapi">Справка по API</a>
                  
                </div>
				
				<div class="text">
				
					<p>Это API ресурса. Описание API методов на странице   <a href="informationapi">Справка по API</a>.</p>
					
					<p>Сделаны все запросы, но с несколькими особенностями:</p>
					<ol> <li>Запросы сделаны через GET-праметры соотвествущих.</li>
					<li>В задании виде моделей применяются 2: Users и Groups и соотвествующие им таблицы в БД.
					Т. е. реализация групп сделана через отдельную таблицу.</li>
					
					
					<li>При создании пользователя нужно заполнить все значения параметров запроса, иначе запрос не выполниться.</li>
					<li>У пользователя создан дополнительный параметр не по заданию: password</li>
					<li>Также есть несколько отступлений от хороших практик Laravel:
					таблицы в БД названы во множественном числе, и возможно в коде несколько раз втстречается не соблюдение некоторых практик.
					В целом задание выполнялось с соблюдением этих практик.</li>
					</ol>
				</div>
            </div>
        </div>
    </body>
</html>
