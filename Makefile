.PHONY: install validate brain-games lint

install:
	composer install

brain-games:
	php bin/brain-games

validate:
	composer validate --strict

quick-validate:
	composer validate --no-check-publish

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin
