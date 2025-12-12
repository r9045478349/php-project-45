.PHONY: install brain-games brain-even brain-calc validate lint

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

help:
	@echo "Available commands:"
	@echo "  make install     - Install dependencies"
	@echo "  make brain-games - Run brain-games"
	@echo "  make brain-even  - Run brain-even game"
	@echo "  make brain-calc  - Run brain-calc game"
	@echo "  make validate    - Validate composer.json"
	@echo "  make lint        - Check code style"
	@echo "  make help        - Show this help"
