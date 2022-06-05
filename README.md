# REPOSITORIOS

## init docker
```bash
	docker-composer up -d;
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
