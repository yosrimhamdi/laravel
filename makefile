git:
	git add .
	git commit -m"$m"
	git push origin master

clean:
	php artisan config:cache
	php artisan cache:clear
	php artisan view:clear