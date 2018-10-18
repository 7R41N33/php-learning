install:
	composer install
	touch tests/_data/db/vacancies.db
	sqlite3 tests/_data/db/vacancies.db < tests/_data/db/vacancies.sql
	sqlite3 tests/_data/db/vacancies.db < tests/_data/db/vacancies-data.sql
