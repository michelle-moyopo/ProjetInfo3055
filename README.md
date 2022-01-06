### CENTRE DE TRANFUSION SANGUINE App
#### PRESENTATION OF THE DATABASE
1. Role table
2. User table
3. Groupe table
4. Groupe user table
5. Sos table
6. User sos signal table
7. Blood Bank table
8. Blood Bank Manager tablet
9. Blood Bank Affiliations table
10. Slider table


#### HOW TO RUN THE App
1. Clone the repository from Heroku CLI
2. Install all the necessary packages by: `$ composer install` or `$ composer update `
3. Create the .env file by typing the command:`$ cp .env.example .env`
4. Generate Application key with: `$ php artisan key:generate`
5. Run the migration (create the database): `$ php artisan migrate`
6. Insert dumy data: `$ php artisan db:seed`
7. Run the app: `$ php artisan serve` and launch your browser on the url from your local machine
8. Enjoy !!!
