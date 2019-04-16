<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Instalação

-   Na pasta raiz, renomeie o arquivo `.env.example` para `.env` e insira as configurações do banco (foi usado MySQL)
-   Execute `composer install` ou `php composer.phar install`
-   Execute `php artisan key:generate`
-   Execute `php artisan migrate`
-   Execute `php artisan db:seed`
-   Execute `php artisan serve` para iniciar o servidor na porta 8000.

## Rotas

### Todas as rotas utilizam JSON para inserir os dados

-   Utilize a rota '/api/register' com os dados abaixo para cadastrar um usuário e receber um token

```javascript
    {
    "name": "Teste",
    "email": "Teste@gmail.com",
    "password": "123",
    "c_password": "123"
    }
```

-   É possível utilizar a rota '/api/login' com os dados de `name` e `password` (em JSON) para também receber um token

-   É preciso incluir no header das requisições a seguir os seguintes dados para poder visualizar os dados:

```php

    ‘headers’ => [
    ‘Accept’ => ‘application/json’,
    ‘Authorization’ => ‘Bearer {token}‘,
    ]
```

-   Foi utilizado a [API Doc Generator](https://github.com/mpociot/laravel-apidoc-generator) para gerar a documentação de rotas da API. Disponível em `public/docs`

-   [POST] `api/login` - Faz login e recebe token
-   [POST] `api/register` - Se registra e recebe token
-   [GET] `api/events` - Busca todos os eventos
-   [GET] `api/events/search/{term}` - Busca eventos por nome
-   [GET] `api/events/date` - Busca eventos por data (ano, mês, dia e data completa)
-   [GET] `api/events/{event}` - Mostra um evento específico
-   [POST] `api/events` - Cadastra um evento
-   [PUT] `api/events/{event}` - Altera um evento
-   [DELETE] `api/events/{event}` - Deleta um evento
-   [POST] `api/submit` - Se submete a um evento
-   [POST] `api/checkin` - Faz checkin no evento
-   [GET] `api/users` - Busca todos os usuários
-   [GET] `api/users/search/{term}` - Busca usuários por nome
-   [GET] `api/users/{user}` - Busca usuário específico (id)
-   [PUT] `api/users/{user}` - Altera usuário
-   [DELETE] `api/users/{user}` - Deleta usuário

# Postman

-   Há um arquivo em `public/docs/collection.json` que pode ser importado para o Postman para testar as rotas.
