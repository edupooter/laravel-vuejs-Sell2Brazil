# laravel-vuejs-Sell2Brazil
Desenvolvido para avaliação da Sell2Brazil

CRUD de Clientes e Contatos, baseado em Laravel 7 (PHP 7.4) + API JWT (Sanctum) + Vue.js

## Ambiente local

### Vagrant
Para montar o ambiente, foi utilizado Vagrant com a box laravel/homestead:

https://laravel.com/docs/7.x/homestead

Para usar Homestead, é necessário ter Vagrant (HashiCorp) instalado na máquina local e então configurar o arquivo de exemplo na raíz do projeto:

`cp Homestead.yaml.example Homestead.yaml`

`vim Homestead.yaml`

### Laragon
Também é possível executar o projeto no Windows com Laragon:
https://laragon.org/

## Instalar dependências
```
cp .env.example .env
vi .env
```

É necessário definir esta variável no arquivo `.env`, para que o Sanctum reconheça a URL padrão:
`SANCTUM_STATEFUL_DOMAINS=homestead.test`

Então:
```
composer install

php artisan key:generate

php artisan migrate --seed

npm install
```

## Execução

Para abrir o projeto:

```
npm run dev
```

http://192.168.10.10

*(ou conforme estiver configurado no arquivo Homestead.yaml / Laragon)*

Credenciais padrão:
- Email: admin@admin.com
- Pass: password
