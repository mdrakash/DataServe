# Installations
Follow the steps mentioned below to install and run the project.

1. Clone or download the repository
2. Go to the project directory and run `composer install`
3. Create `.env` file by copying the `.env.example`. You may use the command to do that `cp .env.example .env`
4. Update the database name and credentials in `.env` file
5. Run the command `php artisan migrate`
6. You may create a virtualhost entry to access the application or run `php artisan serve` from the project root and visit `http://127.0.0.1:8000`

7. Run Websockets Server `php artisan websockets:serve`
8. Run queue Worker `php artisan queue:work`

9. Then call event `http://127.0.0.1:8000/api/eve`
10. give token in header the token is `eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjoiMDE0NzYyMjUifQ.M7TSyO0H8u4D01Gw-qR79oHZyTI6nuT3Z6Z1l_kdpmg`

11. Please install redis server in your local Machine