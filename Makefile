
.PHONY: install brain-games brain-even brain-calc brain-gcd brain-progression brain-prime validate lint lint-fix help

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- src
	composer exec --verbose phpstan 

lint-fix:
	composer exec --verbose phpcbf -- src


