
# *GUIDE D'INSTALLATION MODE WEBDEV*

1.  ### Cloner le projet depuis Github
``` 
git clone https://github.com/jennifer-90/car_rental.git
```

2. ### Accéder au répertoire du projet
``` 
cd car_rental 
```

3. ### Installer les dépendances avec Composer
```bash
composer install 
```

4. ### Copier le fichier .env.example et renommer le ".env"
```bash
cp .env.example .env
```

5. ### Générer la clé d'application
```bash
php artisan key:generate 
```

6. ### Configurer la db
``` 
DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD  
```

7. ### Démarrer le serveur de développement laravel
```bash
php artisan serve 
```
8. ### Effectuer la migration db
```bash
php artisan migrate 
```

