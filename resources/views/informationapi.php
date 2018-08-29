<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Справка по API</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
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
		div.text{
			width:800px;
		}
		.text{
			margin:150px auto 100px;			
		}	
		.parametr{
			font-weight:bold;
		}	
		.string{
			height:5px;
			margin:2px 0;
		}
		</style>
		 </head>
    <body>
	
		<div class="text">
		
			<p style="text-align:center; margin-bottom:50px; font-size: 20px;">Справка по API</p>
			<p>API методы, далее запросы.<br>
			Результат работы запросов оборачивается в JSON массив,
			запросы привидены виде примеров:</p>
			<div class="string"></div>
			<p style="text-align:center; font-size: 17px;">Пользователи</p>
			<p>Получение списка пользователей:
			
			<br>/users?get=list</p>
			<p>Параметр <span class="parametr">get</span>,  значение list</p>
			<div class="string"></div>
			
			<p>Получение списка пользователей с полной информацией:
			<br>/users?get=fulllist</p>
			<p>Параметр <span class="parametr">get</span>, значение fulllist</p>
			<div class="string"></div>
			<p>Создание нового пользователя: 
			<br>/users?new=true&email=mail1@mail.ru&last_name=Family&first_name=Name&state=nonactive&password=12345678</p>
			<p>Параметры: <br>
			<span class="parametr">new</span> - основной, со значением true,<br>
			остальные для описания значений полей, постоянные, запрос не срабьотает, если какого-то параметра не будет:<br> 
			<span class="parametr">email</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">last_name</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">first_name</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">state</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">password</span>, с любым текстовым значением до 191 символов<br>
			</p>
			<div class="string"></div>
			
			<p>Получение полной информации о пользователе:
			<br>/users/id?get=fullinfo&id=2</p>
			<p>Параметры: <br>
			<span class="parametr">get</span>, значение fullinfo<br>
			<span class="parametr">id</span>, id пользователя, целое числовое значение<br>			
			</p>
			<div class="string"></div>
			
			<p>Изменение профиля пользователя:
			<br>/users/id?modify=true&id=2&email=mail4@mail.ru&last_name=Ivanov&first_name=Pavel&state=active&password=43523452345</p>
			<p>Параметры: <br>
			<span class="parametr">modify</span> - основной, со значением true,<br>
			остальные для описания значений полей, не постоянные, запрос сработает, если какого-то параметра не будет:<br> 
			<span class="parametr">email</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">last_name</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">first_name</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">state</span>, с любым текстовым значением до 191 символов<br>
			<span class="parametr">password</span>, с любым текстовым значением до 191 символов<br>
			<br>
			<br>
			<p style="text-align:center; font-size: 17px;">Группы</p>
			<p>Получение спиcка групп, просто названия: 
			<br>/groups?get=list</p>
			<p>Параметр <span class="parametr">get</span>,  значение list</p>
			<div class="string"></div>
			<p>Получение полного спиcка групп, полная информация по ролям по каждой группе: 
			<br>/groups?get=fulllist</p>
			<p>Параметр <span class="parametr">get</span>,  значение fulllist</p>
			<div class="string"></div>
			<p>Создание группы: 
			<br>/groups?new=true&name=users3</p>
			<p>Параметры: <br>
			<span class="parametr">new</span>, значение true<br>
			<span class="parametr">name</span>, название новой группы на английском языке, с длиной до 191 символов<br>			
			</p>
			<div class="string"></div>
			<p>Изменение группы:
			<br>/groups/id?modify=true&group=users&idstring=2&value=true</p>
			<p>Параметры: <br>
			<span class="parametr">modify</span>, со значением true,<br>
			остальные для описания изменяемого значения поля у группы <br> 
			<span class="parametr">group</span>, название группы<br>
			<span class="parametr">idstring</span>, номер строки или по-другому строка пользователя, целое числовое значение<br>
			<span class="parametr">value</span>, значение поля, текстовое<br>			
			</p>
		</div>
		
	
	</body>
	</html>