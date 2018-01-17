## Task by demoMedia

- There are 2 parts to this task 1) a login form which user can log into the system 2) once being logged in, there is a contact form which allows user to send out emails
- I did not use Laravel's authentication scaffolding for this task (otherwise it would be too easy!).
- Due to time constraint there are no registration or logout features.
- I have used Laravel's Mailable class to configure my email layouts as well as for the email sending features.
- To test it out you can either 1) setup a database then create a new user to your user's table 2) use Laravel's php artisan tinker to create a user.
- Once your user is being created in your database you can then log into the system.
- For testing email sending with the contact form, you have to configure your email settings in the env file, I have used Mailtrap which is a test email account for sending and receiving real emails.

## How to run the project
- Clone this repository into your local machine.
- Download composer.
- Make sure that you configure your env file properly so that in the end you will have your app key, database and email credentials ready to go.
- Migrate your database i.e. php artisan migrate.
- Create a user in your database so that you can log into the system later on.
- Boot up your server i.e. php artisan serve or for Mac/Linux users you can use valet link.
- On the browser hit the url APP_NAME/login to access to the login page.  
