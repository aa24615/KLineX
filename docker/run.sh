#php composer.phar install


#php artisan migrate
#php artisan update:tables
#php artisan queue:work &

cd /www/

php artisan horizon &
php artisan schedule:work &

php artisan serve --port=8018 --host=0.0.0.0



#sleep 10000;
