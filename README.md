<h1 align="center">Laravel API Boilerplate</h1>

<p align="center">
  Criado com muito ☕ por <a href="https://grupotesseract.com.br">Grupo Tesseract</a><br>
  <img src="https://img.shields.io/badge/version-0.1.0-5B7587.svg" align="center" alt="Version 0.1.0"><br>
  <br>
  <a href="#requisitos">Requisitos</a> ·
  <a href="#instalação">Instalação</a> ·
  <a href="#troubleshooting">Troubleshooting</a>
</p>

<br>

## Requisitos

- [Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/#install-using-the-convenience-script)  

  ``` sh
  curl -fsSL https://get.docker.com | bash
  ```

- [Docker Compose](https://docs.docker.com/compose/install/)

  ``` sh
  sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
  sudo chmod +x /usr/local/bin/docker-compose
  ```

<br>

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
v art migrate --seed
v art passport:install

v y
v y watch
```

A partir de agora, você já deve conseguir visualizar a página inicial através do endereço http://localhost/. Tente efetuar login através do acesso:

```
Email: admin@grupotesseract.com.br
Senha: admin
```

<br>

### Comando para gerar um CRUD

- Criar arquivo na pasta `database/model_schemas` referente a entidade desejada. Nesta pasta, é possível visualizar exemplos de como criar a entidade e seus relacionamentos;
- Executar o comando abaixo ao gerar algum CRUD, para gerar factories, seeds, e deixar os nomes das rotas e views semânticos de acordo com o plural. SUBSTITUIR a entidade de exemplo com o nome da nova entidade a ser criada, assim como o novo arquivo relacionado criado

``` sh
v art \
  infyom:api_scaffold Cidade \
  --tableName=cidades \
  --plural=cidades \
  --fieldsFile=Cidade.json \
  --datatables=true \
  --factory \
  --seeder
```

<br>

### Testes

Para rodar os testes, executar:

``` sh
v test tests
```

- Sendo `test` o comando do Vessel
- E `tests` a pasta de testes da raiz do projeto

<br>

## Troubleshooting

- Caso encontre problemas ao iniciar o ambiente, talvez seja necessário verificar as versões do Docker e do Docker Compose. Verifique as versões com:

  ```sh
  docker -v           # Docker version 20.10.14, build a224086
  docker-compose -v   # docker-compose version 1.29.2, build 5becea4c
  ```

  Caso tenha problemas, você pode utilizar as mesmas versões que citamos em <a href="#requisitos">**Requisitos**</a>.

- A partir do Docker **`18.09`**, a nova arquitetura de build [`BuildKit`](https://docs.docker.com/develop/develop-images/build_enhancements/) passou a ser utilizada, e o mesmo não está 100% compatível com o projeto no momento. Verifique se o BuildKit está habilitado nos arquivos `~/.docker/config.json` ou `/etc/docker/daemon.json`. Algo como:

  ```json
  {
    "features": {
      "buildkit": true
    }
  }
  ```

  Se estiver `true`, altere para `false` e reinicie o serviço do Docker com:

  ```sh
  sudo service docker restart
  ```

  Ou o comando da sua distro de preferência.

- Pode ser também que nada disso resolveu, então recomendamos fazer uma limpeza completa no seu Docker (CUIDADO: esse comando vai deletar tudo do Docker: containers, imagens, volumes e networks)

  ```sh
  docker system prune -a -f
  ```

  Alguns bons gigabytes serão liberados após esse comando.
