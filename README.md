Simple Slides viewer using Symfony
==================================

Setting up
----------

* Install PHP dependencies
```bash
composer install
```
* Install Node (frontend development) dependencies
```bash
npm install
```
* Create configuration file `.env` by example in `.env.dist`
* Setup test database:
```bash
./bin/console doctrine:database:create
./bin/console doctrine:migrations:migrate
./bin/console doctrine:fixtures:load
```
* Start development server:
```bash
php -S 127.0.0.1:8000 -t public
```
* Recompile assets, while developing
```bash
yarn run encore dev --watch
```
* Open example page in the Browser [http://127.0.0.1:8000/slides](http://127.0.0.1:8000/slides)

Setting up for production
-------------------------

* Set environment variables from examples in `.env` to Nginx/Apache configuration (relaod http service)
* When running `./bin/console` – be sure that Server (Nginx/Apache) pass same parameters as in your bash.
```
env | grep APP_ENV
```
Should produce prod
* Setup database:
```bash
./bin/console doctrine:database:create --env=prod
./bin/console doctrine:migrations:migrate --env=prod
```
and fill with real data
* Build minified JavaScript/CSS:
```bash
yarn run encore production
```
* Update cache
```bash
./bin/console cache:clear --env=prod
./bin/console cache:warmup --env=prod
```