init:
	docker-compose up -d --build
	docker-compose exec laravel-openapi-test_app composer install
	docker-compose exec laravel-openapi-test_app cp .env.example .env
	docker-compose exec laravel-openapi-test_app php artisan key:generate
	docker-compose exec alaravel-openapi-test_app php artisan migrate
