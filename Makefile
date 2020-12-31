# Полный цикл пересборки проекта
init: down-clear build-pull up
# Собрать контейнеры из образов
build:
	docker-compose build
# Скачать обновления и собрать образы
build-pull:
	docker-compose build --pull
# Запуск контейнеров
up:
	docker-compose up -d
# Перезапустить контейнеры
restart:
	docker-compose restart
# Остановить и удалить все контейнеры с префиксом php-template
down:
	docker-compose down --remove-orphans
# Остановка, удаление контейнеров и удаление томов
down-clear:
	docker-compose down -v --remove-orphans
# Удалить вообще все, что есть в системе
remove-all-system:
	docker system prune -a