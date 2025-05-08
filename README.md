# Crud-Laravel

Este é um projeto de exemplo de um sistema **CRUD (Create, Read, Update, Delete)** desenvolvido com o framework **Laravel**. Ele demonstra como criar, listar, editar e deletar registros de uma entidade utilizando as melhores práticas do Laravel.

## 🔧 Tecnologias Utilizadas

- [Laravel](https://laravel.com/) 10.x  
- PHP 8.x  
- Composer  
- MySQL
- Bootstrap

## 📁 Estrutura do Projeto

```
app/
├── Http/
│   ├── Controllers/
│   └── Requests/
resources/
├── views/
│   └── [sua-entidade]/
routes/
├── web.php
database/
├── migrations/
└── seeders/
```

## 🚀 Como executar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-projeto-crud-laravel.git
cd seu-projeto-crud-laravel
```

### 2. Instale as dependências

```bash
composer install
```

### 3. Configure o `.env`

Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

Edite o arquivo `.env` com os dados do seu banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 5. Execute as migrations

```bash
php artisan migrate
```

### 6. Inicie o servidor local

```bash
php artisan serve
```

Acesse o projeto em: [http://localhost:8000](http://localhost:8000)

## 📌 Funcionalidades

- ✅ Cadastro de registros  
- ✅ Listagem de registros com paginação  
- ✅ Edição de registros  
- ✅ Exclusão de registros  
- ✅ Validação de dados

## 📄 Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

---

> Desenvolvido por **Julio Gabriel** 💻