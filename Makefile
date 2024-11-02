all: Main

Main:
	php src/Main.php

test:
	vendor/bin/phpunit tests

composer:
	composer install

style-lint:
	vendor/bin/php-cs-fixer fix src
