git:
	git add .
	git commit -m"$m"
	git push origin master

clean:
	php artisan config:cache
	php artisan cache:clear
	php artisan view:clear

heroku:
	git push heroku master

env:
	node updateHerokuEnv.js
	heroku open

both:
	$(MAKE) git
	$(MAKE) heroku