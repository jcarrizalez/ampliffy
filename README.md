# REPOSITORIOS

## inicial docker
```bash
	docker-composer up -d;
```

## descargar repositorios
```bash
	docker-compose exec ampliffy-php ./init;
	docker-compose exec ampliffy-php composer install --working-dir=./repositorios/project1;
	docker-compose exec ampliffy-php composer install --working-dir=./repositorios/project2;
```

## scan repositorios
```bash
	docker-compose exec ampliffy-php php scan.php;
```
