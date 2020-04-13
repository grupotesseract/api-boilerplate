<h1 align="center">Laravel API Boilerplate</h1>

<p align="center">
  Criado com muito ☕ por <a href="https://grupotesseract.com.br">Grupo Tesseract</a><br>
  <img src="https://img.shields.io/badge/version-0.0.3-5B7587.svg" align="center" alt="Version 0.0.3"><br>
  <br>
  <a href="#requisitos">Requisitos</a> •
  <a href="#instalação">Instalação</a>
</p>

<small align="center"></small>

## Requisitos

- [Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/#install-using-the-convenience-script)  

``` sh
curl -fsSL https://get.docker.com | bash
```

- [Docker Compose](https://docs.docker.com/compose/install/)

``` sh
sudo curl -fL https://github.com/docker/compose/releases/download/1.24.1/run.sh -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

## Instalação

``` sh
git clone https://github.com/grupotesseract/api-boilerplate
cd api-boilerplate
```

É altamente recomendada a criação do alias abaixo. Inclua no seu arquivo `~/.zshrc` ou `~/.bashrc`:

``` sh
alias v='./vessel'
```

Em seguida, com o alias acima habilitado no terminal, executar:

``` sh
cp .env.example .env
v start
v comp i
v art key:generate
v art migrate
v art passport:install

v y
v y watch
```

### Comando para gerar um CRUD

- Criar arquivo na pasta `database/model_schemas` referente a entidade desejada;
- Executar o comando abaixo ao gerar algum CRUD, para gerar factories, seeds, e deixar os nomes das rotas e views semânticos de acordo com o plural

``` sh
v art \
  infyom:api_scaffold TipoMaterial \
  --tableName=tipos_materiais \
  --plural=TiposMateriais \
  --fieldsFile=TipoMaterial.json \
  --datatables=true \
  --factory \
  --seeder
```

### Testes

Para rodar os testes, executar:

``` sh
v test tests
```
