## Laravel send mail with queue (sample)

Requirements :
* Laravel 5.4
* MySQL
* Redis

How to :
* Install Redis for queue driver [https://redis.io/download#installation](https://redis.io/download#installation)
* Run `composer install`
* Config db connection in `.env` (MySQL connection and Redis connection)
* Config driver `QUEUE_DRIVER=redis` and `MAIL_DRIVER=mailgun` 
* Config mailgun `MAILGUN_DOMAIN=MailgunDomain.com` `MAILGUN_SECRET=MailgunSecretKey` `MAIL_FROM_ADDRESS=Sender Email` `MAIL_FROM_NAME=Sender Name`
* Run `php artisan migrate --seed` to seed db
* Run `php artisan queue:work` to start queue daemon
* Run `php artisan serve`
* Enter `localhost:3000/email/send`, it will queue the email test sending from `emails` db table

_PS : email must be added to Authorized Recipients in the Mailgun if you are using Mailgun sanbox_
