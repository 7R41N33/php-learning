install:
	composer install
	touch tests/_data/db/vacancies.db
	sqlite3 tests/_data/db/vacancies.db < tests/_data/db/vacancies.sql
	sqlite3 tests/_data/db/vacancies.db < tests/_data/db/vacancies-data.sql

cs:
	php vendor/bin/phpcs --standard=PSR2 -p -v ./app

serve:
	php -S localhost:8000 -t app/web/

test:
	php vendor/bin/codecept run ${type} ${name}
