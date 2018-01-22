## Task by demoMedia

- There are 3 parts to this task 1) a registration page 2) a login form which user can log into the system 3) once being logged in, there is a contact form which allows user to send out emails
- I did not use Laravel's authentication scaffolding for this task (otherwise it would be too easy!).
- Due to time constraint there is currently no logout feature, once user sends out email it will redirect back to login page
- I have used Laravel's Mailable class to configure my email layouts as well as for the email sending features.
- For testing email sending with the contact form, you have to configure your email settings in the env file, I have used Mailtrap which is a test email account for sending and receiving real emails.

## How to run the project
- Clone this repository into your local machine.
- Download composer.
- Make sure that you configure your env file properly so that in the end you will have your app key, database and email credentials ready to go.
- Migrate your database i.e. php artisan migrate.
- Boot up your server i.e. php artisan serve or for Mac/Linux users you can use valet link.
- On the browser hit the url to access to the login page.  


#Application pictures

To register
<p align="center"><img src="https://image.ibb.co/e3Z6KG/demo_Media2.jpg"></p>

To Log in
<p align="center"><img src="https://image.ibb.co/bQ0kDb/demo_Media1.jpg"></p>

To send email with contact form
<p align="center"><img src="https://image.ibb.co/mTQrmw/demo_Media3.jpg"></p>

To receive receive from Mailtrap
<p align="center"><img src="https://image.ibb.co/c8TcRw/demo_Media4.jpg"></p>
