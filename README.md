Web Development II 2017-2018
============================

Student: CEDRIC VANHAEGENBERG

> Artevelde University College Ghent

desArt
----------------

## Backoffice 
--- 

### Configuratie

Verander .env
```
DB_DATABASE = art_auction
DB_USERNAME = root
DB_PASSWORD = secret
```

### Initialisatie

```
PS> cd laravel
PS> yarn install / npm install
PS> composer install
PS> artisan migrate --seed
PS> artisan key:generate
PS> artisan serve
```

### API
na artisan serve

- 127.0.0.1:8000/api/auctions
- 127.0.0.1:8000/api/users
- 127.0.0.1:8000/api/categories

### TEST GEBRUIKER

- test@example.com
- secret

## Frontoffice
---

### Initialisatie
Zorg dat artisan serve tegelijkertijd aanligt!

```
PS> cd angular
PS> yarn install / npm install
PS> ng serve
```

### Online dossier

 - Productiedossier <https://gdmgent-1718-webdev2.github.io/1718-webdev2-project-cedrvanh/>
