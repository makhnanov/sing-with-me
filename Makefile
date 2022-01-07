COMPOSE=docker compose

run-build:
	$(COMPOSE) build
run-npm-i:
	$(COMPOSE) exec vue npm i
run-npm-dev:
	$(COMPOSE) exec vue npm run dev
