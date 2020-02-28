Things that need to be done after pulling from the github:
1. set up the environment
    - create a new file named .env or copy
    - copy the env.examlple file and paste it in .env file

2. Create an empty database

3. run the following command in sequence :
    - composer install
    - php artisan key:generate
    
4. set the database confiquration in .env file

5. run the following command in sequence :
    -php artisan migrate
    -php artisan db:seed
    -composer require intervention/image

6. Email
    -changes in .env files:
        MAIL_DRIVER=smtp
        MAIL_HOST=smtp.gmail.com
        MAIL_PORT=587
        MAIL_USERNAME=youremail@gmail.com
        MAIL_PASSWORD=your_app_password
        MAIL_ENCRYPTION=TLS
        MAIL_FROM_ADDRESS=laravel@gmail.com
        MAIL_FROM_NAME="${APP_NAME}"

7. Queue 
    -change in .env file
        QUEUE_CONNECTION=database
    -run the following command in sequence :
        php artisan make:job jobName
        php artisan queue:table ///job migration banaucha
        php artisan migrate

8. Laravel Email
    -run the following command in sequence :
        composer require maatwebsite/excel
