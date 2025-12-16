.PHONY: install brain-games brain-even brain-calc brain-gcd brain-progression brain-prime validate lint help

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
	composer exec --verbose phpcs -- --standard=PSR12 src bin

help:
	@echo "Brain Games - Make Commands"
	@echo "============================"
	@echo "  make install           - Install dependencies"
	@echo "  make brain-games       - Run welcome game"
	@echo "  make brain-even        - Run even/odd game"
	@echo "  make brain-calc        - Run calculator game"
	@echo "  make brain-gcd         - Run GCD game"
	@echo "  make brain-progression - Run arithmetic progression game"
	@echo "  make brain-prime       - Run prime number game"
	@echo "  make validate          - Validate composer.json"
	@echo "  make lint              - Check code style"
