




----instructions 
git clone repo-link
cd your-repo

to bulid 
docker-compose up --build

to access the app container -----

docker-compose exec app bash



----to run the migrations 
php artisan migrate



DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=screenon
DB_USERNAME=root
DB_PASSWORD=123



to stop the docker ----------

docker-compose down

to rebulid the container---------------
docker-compose up --build




