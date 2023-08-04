# Curso de Introdução ao Laravel 5.3

> Projeto do curso [GuiaCódigo - Introdução ao Laravel 5.3](https://www.udemy.com/course/introducao-ao-laravel-53/)

Este projeto aborda os fundamentos do Laravel 5.3, cobrindo desde a instalação até a implementação de um sistema de login completo.

## Tópicos Estudados

- Instalação e configuração de um projeto Laravel
- Rotas do Laravel
- Template Engine Blade
- Migrações de banco de dados
- Tinker para criação de registros
- CRUD completo
- Sistema de autenticação/login

## Requisitos

- PHP >= 5.6.4
- Extensões PHP: OpenSSL, PDO, Mbstring, Tokenizer
- [Composer](https://getcomposer.org/)

## Instalação

1. Clone o repositório:
```bash
git clone <url-do-repositorio>
cd learning-laravel
```

2. Instale as dependências:
```bash
composer install
```

3. Copie o arquivo de ambiente:
```bash
cp .env.example .env
```

4. Gere a chave da aplicação:
```bash
php artisan key:generate
```

5. Execute as migrações:
```bash
php artisan migrate
```

6. Inicie o servidor:
```bash
php artisan serve
```

## Comandos Artisan

```bash
# Criar Controller
php artisan make:controller NomeController

# Criar Model
php artisan make:model NomeModel

# Criar Seeder
php artisan make:seeder NomeSeeder

# Criar Migration
php artisan make:migration create_nome_table

# Rodar migrações
php artisan migrate

# Criar chave da aplicação
php artisan key:generate

# Acessar Tinker (CLI interativo)
php artisan tinker
```

## Estrutura do Projeto

```
├── app/           # Código da aplicação (Controllers, Models, etc.)
├── bootstrap/     # Inicialização da aplicação
├── config/        # Arquivos de configuração
├── database/      # Migrações e Seeders
├── public/        # Arquivos públicos (CSS, JS, index.php)
├── resources/     # Views e assets
├── routes/        # Definição de rotas
├── storage/       # Arquivos cache e logs
└── tests/         # Testes automatizados
```
