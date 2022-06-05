# REPOSITORIOS

## init docker
```bash
	docker-compose up -d;
```
## download repositories
```bash
	docker-compose exec ampliffy-php ./init;
	docker-compose exec ampliffy-php composer install --working-dir=./repositorios/project1;
	docker-compose exec ampliffy-php composer install --working-dir=./repositorios/project2;
```
## scan repositories
```bash
	docker-compose exec ampliffy-php php scan.php;
```
## test project1
```bash
	docker-compose exec ampliffy-php php repositorios/project1/make.php;
```
## test project2
```bash
	docker-compose exec ampliffy-php php repositorios/project2/make.php;
```
