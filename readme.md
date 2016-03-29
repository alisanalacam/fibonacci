
## Kurulum

Framework ve paketlerin kurulumu için

Eğer composer yüklü değilse; <a href="https://getcomposer.org/download/" rel="nofollow">Composer</a> yükleyiniz.

```cli
composer install
```

# PhpUnit kurulum

```cli
composer global require "phpunit/phpunit=5.2.*"
composer global require "phpunit/php-invoker=~1.1."
```

phpunit komutunu kısayol olarak kullanabilmek için;
```cli
sudo ln -s  ~/.composer/vendor/phpunit/phpunit/phpunit   /usr/bin/
```
yazmanız yeterlidir.

```cli
phpunit
```
yazarak test işlemini gerçekleştirebilirsiniz.

## Yardım

- FibonacciController içindeki getListOfFibonacci metodu sayı girelecek ekranı ve girilen sayıya göre fibonacci dizisini ekrana badge içinde gösterir

- FibonacciController içindeki getFibonacciByCount metodu verilen sayı kadar fibonacci dizisi değeri döndürür.
