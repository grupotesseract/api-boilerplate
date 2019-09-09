<h1 align="center">Fibra API</h1>

<p align="center">
  Criado com muito ☕ por <a href="https://grupotesseract.com.br">Grupo Tesseract</a><br>
  <img src="https://img.shields.io/badge/version-0.0.1-5B7587.svg" align="center" alt="Version 0.1.1"><br>
  <br>
  <a href="#requisitos">Requisitos</a> •
  <a href="#instalação">Instalação</a> •
  <a href="#deploy">Deploy</a><br>
</p>

<small align="center"></small>

## Requisitos

- Docker
- Docker Compose

## Instalação

``` sh
git clone https://github.com/grupotesseract/fibra-api
cd fibra-api

cp .env.example .env
./vessel start
./vessel comp i
./vessel art key:generate
./vessel art migrate

./vessel yarn
./vessel yarn watch
```

## Comando para gerar um CRUD
- Criar model_schema na pasta database/model_schemas referente a entidade desejada
- Importante rodar o comando abaixo ao gerar algum CRUD, para gerar factories, seeds, e deixar os nomes das rotas e views semânticos de acordo com o plural

```
php artisan infyom:api_scaffold TipoMaterial --tableName=tipos_materiais --fieldsFile=TipoMaterial.json --datatables=true --factory --seeder --plural=TiposMateriais
```

## Testes
- Para rodar os testes, executar

```
./vessel exec app vendor/bin/phpunit tests
```

## Deploy

> Em breve...
