RUN = docker compose run --rm php

build:
	docker compose build

install:
	$(RUN) composer install

test:
	$(RUN) vendor/bin/phpunit

watch:
	$(RUN) sh -c 'while true; do vendor/bin/phpunit; sleep 2; done'

shell:
	$(RUN) bash
