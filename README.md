desArt
============================

desArt is an online auctioning platform for creative minds. You can auction your art online and make money out of it or bid on other art pieces. We allow all types of art such as digital, paintings, sculptures and more.

## Backoffice 
--- 

### Config

Change .env
```
DB_DATABASE = art_auction
DB_USERNAME = root
DB_PASSWORD = secret
```

### Initialisation

```
PS> cd laravel
PS> yarn install / npm install
PS> composer install
PS> artisan migrate --seed
PS> artisan key:generate
PS> artisan serve
```

### API
after artisan serve

- 127.0.0.1:8000/api/auctions
- 127.0.0.1:8000/api/users
- 127.0.0.1:8000/api/categories

### TEST USER

- test@example.com
- secret

## Frontoffice
---

### Initialisation
Make sure you're running artisan serve

```
PS> cd angular
PS> yarn install / npm install
PS> ng serve
```

### Online guide

 - Production file <https://gdmgent-1718-webdev2.github.io/1718-webdev2-project-cedrvanh/>
