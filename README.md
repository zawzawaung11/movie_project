## About Movie Project

Movie project is created by laravel framework version 8. It has front-end and back-end admin. It has used laravel auth feature. In back-end, admin can create,update and delete movies file. There are few step to run this project on localhost  

- Download or git clone from https://github.com/zawzawaung11/movie_project.git to your web server root.
- Need to install composer.exe on computer.
- Need to install node.js on computer. 
- Run this command on your project directory root/ composer install   
- Run this command on your project directory root/ npm install  
- Run this command on your project directory root/ php artisan key:generate
- Run this command on your project directory root/ php artisan storage:link
- Create database movie in your database. Modify .env file. For example
-  # Add params into .env file
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=movie
    DB_USERNAME=root
    DB_PASSWORD=
- Run this command on your project directory root/ php artisan migrate
- Run this command on your project directory root/ php artisan serve

