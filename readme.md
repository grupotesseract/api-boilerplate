# Tesseract Laravel Boilerplate

Projeto Laravel 5.5 para facilitar a criacao de novos projetos

- Laravel 5.5
- Laravel Generator
- Adminlte
- Yajra DataTables v8
- Languages / locale pt-BR

## Clone com submodulos (Laradock)

`git clone --recursive https://github.com/grupotesseract/laravel-tesseract-boilerplate.git`

## Rodando e instalando o projeto

## Buildar Laradock
- `cd laradock`
- `cp env-example .env` (editar caso seja necessario portas / BD's diferentes)
- `docker-compose up -d nginx php-fpm postgres`
- `docker-compose exec --user=laradock workspace composer install`
- `docker-compose exec --user=laradock workspace php artisan key:generate`

### Setup .env
Acertar .env do projeto de acordo com as configs do Laradock
- `cp .env-example .env`

### Front-end packages
- `npm install`
- `npm run dev`

### Migration e seed's
- `docker-compose exec--user=laradock workspace php artisan migrate --seed`

Se pá GGWP :+1:
