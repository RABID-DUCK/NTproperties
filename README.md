В файле .env <br>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=ntproperties <br>
DB_USERNAME=root <br>
DB_PASSWORD=свой пароль <br>

Потом идёшь в phpMyAdmin создаёшь базу данных ntproperties. На неё нажимаешь, "Импорт",
Выбираешь файл бд который я положил в корне проекта <br>

<b>Запуск команд:</b>
<ul>
<li>php artisan db:seed --class=HighWaySeeder</li>
<li>php artisan db:seed --class=DirectionSeeder</li>
</ul>
