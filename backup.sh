rm -rf /www/storage/app/private/stock/

php artisan db:clear_invalid_data
php artisan backup:run

rm -rf /www/database/install/
mkdir -p /www/database/install/
mv /www/storage/app/private/stock/ /www/database/install/
