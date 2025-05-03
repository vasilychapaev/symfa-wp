up:
	docker compose up -d

build:
	docker compose build

down:
	docker compose down

restart:
	docker compose down
	docker compose up -d

logs:
	docker compose logs -f

ps:
	docker compose ps

stop:
	docker compose stop

start:
	docker compose start

bash:
	docker compose exec wordpress /bin/bash

bashc:
	docker compose exec $(c) /bin/bash

reset:
	docker compose down -v --remove-orphans
	rm -rf ./wp_data/* ./db_data/*