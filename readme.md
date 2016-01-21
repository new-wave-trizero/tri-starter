# Boilerplate for Trizero site!

Better high than perfect :-/

#### Backoffice access creation

Login ssh

```
ssh cool@vps
```

Run the command

```sh
php artisan tinker
```

Create access running simple laravel command!

> Here you can run php code in laravel envoirment

```php
App\Admin::create([ 'name' => 'Trizero', 'email' => 'domains@trizero.it', 'password' => bcrypt('trizero') ]);
```

When you are done simply run
```
exit
```
