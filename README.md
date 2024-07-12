# TEMPLATE LARAVEL PHP

> [!NOTE]
>
> nome repo: templete_laravel-php

#### Impostazioni per utilizzare il template:

1. Duplicare il file `.env.exemple` e rinominarlo `.env`, o da terminale eseguire il comando:
```
cp .env.example .env
```

2. Da terminale eseguire il comando: 
```
composer install
```

4. Da terminale eseguire il comando:
```
php artisan key:generate
```

5. Da terminale eseguire il comando:
```
npm install
```

6. Da terminale eseguire il comando:
```
php artisan serve
```

7. Aprire secondo terminale ed eseguire il comando:
```
npm run dev
```

- È stato già creato il `Controller` con il comando da terminale:
```
php artisan make:controller Guest/PageController
```
Il file `PageCntroller.php` si occuperà di ritornare la **view** della pagina, andrà aggunta questa riga di codice:
```
return view('index', $data);
```
- Il file `web.php` gestirà solamente la chiamata che verrà girata alla `pageController`, nel caso non ci fosse andrà aggiunta questa righa di codice:
```
Route::get('/', [PageController::class, 'index']);
```

8. Resta da creare il **Model** secondo esigenze con il comando da terminale:
```
php artisan make:model NomeModel
```


##### © byHYONS™
