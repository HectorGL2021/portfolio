web: vendor/bin/heroku-php-apache2 public/
release: npm install && npm install vite && npx vite build && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan storage:link 