# Tatwaa
 - Laravel ^9.2, Tatwaa project.

## Requirments

- PHP >= ^8.0.2
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- GIT
- MySQL
- Composer



## Install


- Copy **.env.example** to **.env** :

```
$ cp .env.example .env
```

- Edit Mail and Database configurations :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Tatawa
DB_USERNAME=root
DB_PASSWORD=root
```

- Installing dependecies :
```sh
$ composer install
```

- Load Schema :
```sh
$ php artisan migrate:fresh
```

- Fill Database with data :
```sh
 $ php artisan db:seed
 ```
 
- Create a symbolic link from "public/storage" to "storage/app/public"
```sh
 $ php artisan storage:link
```

- Set the application key
```sh
 $ php artisan key:generate
```


## Admin Panel

- Publish Admin Panel Assets:
```sh
 $ php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
 ```
 
 - Fill Admin Panel info. (admin / admin):
 ```sh
  $ php artisan admin:install
  ```

 - Import Admin Menus:
 ```sh
  $ php artisan db:seed --class=AdminTablesSeeder
  ```


## Development

- Install Packages :
```
 $ npm install
 ``` 
 
- Sass Watch :
```
 $ npm run dev
 ``` 

## Production
- Deployment :
- Minify files for production.
