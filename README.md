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

1. crear directorio de instalacion del proyecto

```bash
mkdir ~/enviame

cd ~/enviame 
```

2. descarcagar el proyecto

```bash
git clone git@github.com:agrup/enviame.git enviame
```
o tambien

```bash

git clone https://github.com/agrup/enviame.git enviame 

```
me dirijo a la raiz del proyecto

```bash
cd enviame

```

3. crear y configurar el .env

```bash
cp .env.example .env

```
configurar el .env 

ejemplo de configuracion, tener en cuenta el puerto y el nombre de la base que se desea usar tiene que ser el mismo utilizado en docker-compose.yml



```bash

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


4. instalar las dependencias de composer

```
composer install

```

```
./vendor/bin/sail build

./vendor/bin/sail up

```

5. Luego hay que correr los migrations y llenar la base

```

./vendor/bin/sail artisan migrate --seed
```

#Uso

Lista de todas las empresas

* **URL**

    /api/empresa

* **METODO**
    GET

* **Parametros**

    sin parametros

* **Response:**

  * **Code:** 200 <br />
    **Content:** `[
                    {
                    "id": 1,
                    "name": "Lehner, Nienow and Auer",
                    "email": "griffin.berge@example.com",
                    "email_verified_at": null,
                    "address": "962 Earl Cliffs",
                    "phone": "+1 (264) 592-5808",
                    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
                    "cuil": "29083",
                    "created_at": "2021-03-23T18:13:49.000000Z",
                    "updated_at": "2021-03-23T18:13:49.000000Z"
                    }
                 ....]`

Detalle de una empresa

* **URL**

    /api/empresa/{id}

* **METODO**
    GET

* **URL Parametros**

   **Required:**
 
   `id=[integer]`

* **Response:**

  * **Code:** 200 <br />
    **Content:** `{
                    "id": 1,
                    "name": "Lehner, Nienow and Auer",
                    "email": "griffin.berge@example.com",
                    "email_verified_at": null,
                    "address": "962 Earl Cliffs",
                    "phone": "+1 (264) 592-5808",
                    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
                    "cuil": "29083",
                    "created_at": "2021-03-23T18:13:49.000000Z",
                    "updated_at": "2021-03-23T18:13:49.000000Z"
                    }`

Crear una empresa

* **URL**

    /api/empresa

* **METODO**
    POST

* **Body Parametros**
    `{
    "name": "Lehner, Nienow and Auer",
    "email": "griffin.berge@example.com",
    "address": "962 Earl Cliffs",
    "phone": "+1 (264) 592-5808",
    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
    "cuil": "29083", 
    }
    `


* **Response:**

  * **Code:** 200 <br />
    **Content:** `{
                    "id": 1,
                    "name": "Lehner, Nienow and Auer",
                    "email": "griffin.berge@example.com",
                    "email_verified_at": null,
                    "address": "962 Earl Cliffs",
                    "phone": "+1 (264) 592-5808",
                    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
                    "cuil": "29083",
                    "created_at": "2021-03-23T18:13:49.000000Z",
                    "updated_at": "2021-03-23T18:13:49.000000Z"
                    }`

Modificar una empresa

* **URL**

    /api/empresa

* **METODO**
    PUT

* **Body Parametros**
 
 * **optativos**

    `{
    "name": "Lehner, Nienow and Auer",
    "email": "griffin.berge@example.com",
    "address": "962 Earl Cliffs",
    "phone": "+1 (264) 592-5808",
    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
    "cuil": "29083", 
    }
    `


* **Response:**

  * **Code:** 200 <br />
    **Content:** `{
                    "id": 1,
                    "name": "Lehner, Nienow and Auer",
                    "email": "griffin.berge@example.com",
                    "email_verified_at": null,
                    "address": "962 Earl Cliffs",
                    "phone": "+1 (264) 592-5808",
                    "url": "http://www.becker.org/tempore-voluptatem-commodi-animi-sint",
                    "cuil": "29083",
                    "created_at": "2021-03-23T18:13:49.000000Z",
                    "updated_at": "2021-03-23T18:13:49.000000Z"
                    }`

Detalle de una empresa

* **URL**

    /api/empresa/{id}

* **METODO**
    DELETE

* **URL Parametros**

   **Required:**
 
   `id=[integer]`

* **Response:**

  * **Code:** 200 <br />
    **Content:** `{"id": 1}`

## License
[MIT](https://choosealicense.com/licenses/mit/)
