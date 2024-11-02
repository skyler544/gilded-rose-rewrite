all: Main

Main: composer
	php src/Main.php

test: composer
	composer test

composer: vendor

vendor: composer.json composer.lock
	composer install
	touch vendor

style-lint: composer
	vendor/bin/php-cs-fixer fix src

clean:
	rm -rf vendor/
