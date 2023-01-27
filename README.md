<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre este projeto

CRUD API com Laravel feita para o gerenciamento de uma loja, obtendo
as funcionalidades de listagem, cadastro, atualização e remoção
de produtos.

Além da CRUD API, há endpoints para integração da API externa de localização do IBGE, mostrando os municípios da cidade do Rio de Janeiro.

Nos endpoints de integração da API externa, há a listagem dos municípios e os itens cadastrados no banco de dados (id, ibge_id, ibge_name).

Caso o endpoint de listagem seja chamado mais de uma vez, os itens já cadastrados no banco de dados não serão duplicados.


Projeto realizado para teste técnico de BackEnd Jr.

## [**Documentação**](https://app.swaggerhub.com/apis/constpereiradev/crud-api-laravel/1.0.0#/default/)

<img src="/img/Opera Snapshot_2023-01-27_003937_app.swaggerhub.com.png"/>

A documentação completa se encontra [**aqui**](https://app.swaggerhub.com/apis/constpereiradev/crud-api-laravel/1.0.0#/default/).




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

- Configure o seu banco de dados no arquivo:
```sh
    .env 
```

- Caso não possua o insomnia, vá até o seu terminal:
```sh
    sudo apt-get install insomnia
```

- Após a instalação do insomnia, inicialize o servidor via php artisan no seu terminal:
```sh
    php artisan serve
```

- Seu servidor deve estar rodando!
- Importe o arquivo que se encontra na pasta /insomnia do projeto.
<br>
Pronto! O ambiente está configurado.


## Guia da API CRUD

Agora você está pronto para realizar suas requests. Siga o guia:

### Api CRUD

**Index**
* Clique em **Send** para listar os produtos cadastrados na base de dados.
Caso hajam dados cadastrados, será retornado o seguinte template:

```sh
[
	{
		"id": 1,
		"name": "name",
		"category": "category",
		"status": status,
		"quantity": 1,
		"created_at": "2023-01-26T23:25:25.000000Z",
		"updated_at": "2023-01-26T23:25:25.000000Z",
		"deleted_at": null
	}
]
```
Do contrário, o array estará vazio.
<br>
<br>

**Create**
* Adicione os dados nos inputs.
* Clique em **Send** para cadastrar o produtos na base de dados.
* A tratagem de erro está em dia, caso seus dados não estejam conforme o esperado, uma mensagem de erro será mostrada.
<br>
<br>

**Show**
* Acesse um produto específico pelo seu id
```sh
http://localhost:8000/api/products/{id}
```
Exemplo:
```sh
http://localhost:8000/api/products/3
```
Caso o produto de id informado não exista, uma mensagem de erro será retornada.
<br>
<br>

**Update**
* Adicione os dados nos inputs.
* Clique em **Send** para atualizar o produtos na base de dados.
* A tratagem de erro está em dia, caso seus dados não estejam conforme o esperado, uma mensagem de erro será mostrada.
<br>
<br>

**Delete**
* Delete um produto específico pelo seu id
```sh
http://localhost:8000/api/products/{id}
```
Exemplo:
```sh
http://localhost:8000/api/products/3
```
* O produto de id informado será deletado.
* Ao fazer request no *Index*, o item deletado será mostrado, dessa vez com o deleted_at informado.
<br>
<br>

## Guia da API IBGE

## Api IBGE

**IBGE Create**
* Caso seja a primeira requisição, os municípios e seus respectivos ids serão cadastrados na base de dados e os municípios serão retornados.
* Caso a requisição seja feita novamente, não será possível duplicá-los, ou seja, não serão inseridas novamente na base de dados as mesmas informações. Uma mensagem será mostrada juntamente aos municípios.
<br>
<br>

**Index**
* Clique em **Send** para listar os dados cadastrados na base de dados.
Caso hajam dados cadastrados, serão retornados os ids e os nomes dos municípios, ambos cadastrados na base de dados. Do contrário, o array estará vazio.
<br>
<br>

## License

[MIT License](https://github.com/arifszn/pandora/blob/main/LICENSE)