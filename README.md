### FASTBLOOD App
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

#### PACKAGES INSTALL
1. arielmejiadev/larapex-charts: for diagram, charts
2. artesaos/seotools: for Seach Engine Optimization (SEO)
3. barryvdh/laravel-dompdf: to generate PDF file
4. brian2694/laravel-toastr: for Toast notification
5. intervention/image: for image creation while uploading
6. spatie/laravel-sitemap: generating the sitemap of the application
7. jorenvanhocht/laravel-share: to share to social networks

#### HOW TO RUN THE App
1. Clone the repository from Heroku CLI
2. Install all the necessary packages by: `$ composer install` or `$ composer update `
3. Create the .env file by typing the command:`$ cp .env.example .env`
4. Generate Application key with: `$ php artisan key:generate`
5. Run the migration (create the database): `$ php artisan migrate`
6. Insert dumy data: `$ php artisan db:seed`
7. Run the app: `$ php artisan serve` and launch your browser on the url from your local machine
8. Enjoy !!!
