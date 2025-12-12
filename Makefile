.PHONY: install validate brain-games brain-even lint

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate --strict

quick-validate:
	composer validate --no-check-publish

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin
