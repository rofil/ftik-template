# Template Laravel Bootstrap

Template laravel bootstrap merupakan paket template berbasis bootstrap CSS framework. 

## Instalasi

```
composer require rofilde\bootstrap-template
```

## Konfigurasi

Tambahkan baris berikut pada `providers` pada `app.php`:

```
    Rofil\BootstrapTemplate\RofilBootstrapTemplate::class
```

## Asset
```
    php artisan vendor:publish rofilde/bootstrap-template
```

Menggunakan perintah diatas, maka asset dari template dapat dipublished pada direktori config dan public