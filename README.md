<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre este projeto

CRUD API com Laravel feita para o gerenciamento de uma loja, obtendo
as funcionalidades de listagem, cadastro, atualização e remoção
de produtos.

Além da CRUD API, há endpoints para integração da API externa de localização do IBGE, mostrando os municípios da cidade do Rio de Janeiro.

Nos endpoints de integração da API externa, há a listagem dos municípios e os itens cadastrados no banco de dados (id, ibge_id, ibge_name).

Caso o endpoint de listagem seja chamado mais de uma vez, os itens já cadastrados no banco de dados não serão duplicados.


Projeto realizado para teste técnico de BackEnd Jr.

## Documentação



## Instalação

**Prerequisitos**
- PHP 8.1
- Laravel
- Banco de dados MySQL
- Insomnia

- Você deve clonar este projeto via git e entrar no diretório:

```sh
    git clone https://github.com/constpereiradev/crud-api-laravel.git
    cd crud-api-laravel
    
```

- Caso não possua o insomnia, vá até o seu terminal:

```sh
    
    apt-get install insomnia
    
```

- Após a instalação do insomnia, inicialize o servidor via php artisan no seu terminal:


```sh
    
    php artisan serve
    
```

- Copie o link gerado e abra o insomnia.
- Importe o arquivo que se encontra na pasta /insomnia do projeto.


## Guia da API


