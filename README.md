Simple Slides viewer using Symfony
==================================

Setting up
----------

* Create configuration file `.env` by example in `.env.dist`
* Setup test database:
```
./bin/console doctrine:database:create
./bin/console doctrine:migrations:migrate
./bin/console doctrine:fixtures:load
```
* Start development server:
```
php -S 127.0.0.1:8000 -t public
```
* Open example page in the Browser [http://127.0.0.1:8000/slides](http://127.0.0.1:8000/slides) 