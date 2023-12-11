## Start
```copy .example.env and rename .env```
***
### Build project
```docker-compose up -d --build```

### run migrations

```bash 
docker exec app_fpm php /var/www/html/bin/console doctrine:migrations:migrate
```
### install dependencies and generate users

```bash 
docker exec app_fpm composer i 
```

[//]: # (## Generate user)

[//]: # (```bash)

[//]: # (composer run-script generate-user )

[//]: # (``` )

### Generate swagger
```./vendor/bin/openapi src -o openapi.yaml```
 
## Usage

[POST] - http://localhost/api/v1/auth/login 


> **Note**:
> ##### usernames 
> user_1, user_2, user_3
> ***
> ##### password is "password"
 

 

 
