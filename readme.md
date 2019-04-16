<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Instalação

-   Na pasta raiz, renomeie o arquivo `.env.example` para `.env` e insira as configurações do banco (foi usado MySQL)
-   Execute `composer install` ou `php composer.phar install`
-   Execute `php artisan key:generate`
-   Execute `php artisan migrate`
-   Execute `php artisan db:seed`
-   Execute `php artisan serve` para iniciar o servidor na porta 8000.

## Rotas

#Todas as rotas utilizam JSON para inserir os dados

-   Utilize a rota '/api/register' com os dados abaixo para cadastrar um usuário e receber um token

```javascript
    {
    "name": "Teste",
    "email": "Teste@gmail.com",
    "password": "123",
    "c_password": "123"
    }
```

-   É possível utilizar a rota '/api/login' com os dados de email e senha (em JSON) para também receber um token

-   É preciso incluir no header das requisições a seguir os seguintes dados para poder visualizar os dados:

```php

    ‘headers’ => [
    ‘Accept’ => ‘application/json’,
    ‘Authorization’ => ‘Bearer ‘{token},
    ]
```
