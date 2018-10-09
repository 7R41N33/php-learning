### Подготовка проекта:
```
composer install
```

### Запуск тестов:
##### 1. Запуск всех тестов
```
php vendor/bin/codecept run unit
```
##### 2. Запуск конкретного теста
```
php vendor/bin/codecept run unit FilterVacanciesTest
```

### Запуск линтера:
```
php vendor/bin/phpcs --standard=PSR2 -p -v ./app
```
