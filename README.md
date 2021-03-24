# Enviame Challenge

## Especificaciones 

● Lenguajes usados: Php 8.0

● Frameworks usados: Laravel 8.12

● Instrucciones de cómo correr una instancia de su aplicación.


## Requerimientos

●  Docker

●  Docker-compose

●  Composer

## Instalacion

crear directorio de instalacion del proyecto
```
mkdir ~/enviame

cd ~/enviame 
```

descarcagar el proyecto

```
git clone git@github.com:agrup/enviame.git enviame
```
o tambien

```

git clone https://github.com/agrup/enviame.git enviame 

```
me dirijo a la raiz del proyecto

```
cd enviame

```

crear y configurar el .env
```
cp .env.example .env

```
configurar el .env 

ejemplo de configuracion, tener en cuenta el puerto y el nombre de la base que se desea usar tiene que ser el mismo utilizado en docker-compose.yml



```
# .env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=enviame_challenge
DB_USERNAME=agrup
DB_PASSWORD=agrup

```


```
# docker-compose.yml
    mysql:
        image: 'mysql:8.0'
        ports:
            - '3306:3306'
        environment:
            MYSQL_ROOT_PASSWORD: 'xxxx'
            MYSQL_DATABASE: 'enviame_challenge'

```


instalr las dependencias de composer

```
composer install

```

```
./vendor/bin/sail build

./vendor/bin/sail up

```

Luego hay que correr los migrations y llenar la base

```

./vendor/bin/sail artisan migrate --seed
```
