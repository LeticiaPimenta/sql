#/bin/bash
rm storage/dev.sqlite
touch storage/dev.sqlite
rm database/migrations/*.php
rm app/*.php
cp routes/web.php routes/web1.php
php artisan wn:resources schema.yaml --force
rm -rf routes/web.php
mv routes/web1.php routes/web.php