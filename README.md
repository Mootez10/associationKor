
# Association Korean



## Installation

Run the project into 4 containers
- laravel_app : the laravel project .
- nginx 
- mysql_db: image mysql for managing data using mysql 8.0
- phpMyAdmin : for managing mySql databases and tables

### steps for running the app:
```bash
  docker compose build
  docker compose up -d
  docker exec -it laravel_app composer install
  docker exec -it laravel_app php artisan make:migration
```

### Manage tables in database 'assiociationKor'
```bash
    docker exec -it mysql_db mysql -u root -p
```
## Or
### Using phpMyAdmin
acces to localhost:8081
