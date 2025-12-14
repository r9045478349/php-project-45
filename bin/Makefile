.PHONY: install brain-games brain-even brain-calc brain-gcd validate lint help

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

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

help:
	@echo "Available commands:"
	@echo "  make install     - Install dependencies"
	@echo "  make brain-games - Run brain-games"
	@echo "  make brain-even  - Run even/odd game"
	@echo "  make brain-calc  - Run calculator game"
	@echo "  make brain-gcd   - Run GCD game"
	@echo "  make validate    - Validate composer.json"
	@echo "  make lint        - Check code style"
