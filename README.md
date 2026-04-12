# Curso de Introducao ao Laravel 5.5

> Projeto do curso [GuiaCodigo - Introducao ao Laravel 5.3](https://www.udemy.com/course/introducao-ao-laravel-53/), atualizado para Laravel 5.5.

Este projeto aborda os fundamentos do Laravel, cobrindo desde a instalacao ate a implementacao de um sistema de login com CRUD completo.

## Topicos Estudados

- Instalacao e configuracao de um projeto Laravel
- Rotas (sintaxe moderna com `->name()`)
- Template Engine Blade
- Migracoes de banco de dados
- CRUD completo com upload de imagens
- Form Requests para validacao
- Sistema de autenticacao/login
- Build de assets com Laravel Mix

## Requisitos

- PHP >= 5.6.4 (recomendado 7.4+)
- Extensoes PHP: OpenSSL, PDO, Mbstring, Tokenizer, GD
- [Composer](https://getcomposer.org/)
- Node.js >= 8 e npm

## Instalacao

1. Clone o repositorio:

```bash
git clone <url-do-repositorio>
cd learning-laravel/App
```

2. Instale as dependencias PHP:

```bash
composer install
```

3. Instale as dependencias JavaScript:

```bash
npm install
```

4. Copie o arquivo de ambiente e configure o banco de dados:

```bash
cp .env.example .env
```

5. Gere a chave da aplicacao:

```bash
php artisan key:generate
```

6. Execute as migracoes:

```bash
php artisan migrate
```

7. (Opcional) Popule o banco com um usuario administrador:

```bash
php artisan db:seed --class=UsuarioSeeder
```

8. Compile os assets:

```bash
npm run dev
```

9. Inicie o servidor:

```bash
php artisan serve
```

Acesse em `http://localhost:8000`. Login padrao: `admin@mail.com` / `123456`.

## Estrutura do Projeto

```
App/
- app/
  - Http/
    - Controllers/
      - Admin/       # Controllers da area administrativa
      - Auth/        # Controllers de autenticacao gerados pelo Laravel
      - Site/        # Controllers do site publico
    - Requests/
      - Admin/       # Form Requests com regras de validacao
  - Curso.php        # Model de cursos
  - Contato.php      # Model de contatos
  - User.php         # Model de usuarios
- config/            # Arquivos de configuracao
- database/
  - migrations/      # Migracoes do banco de dados
  - seeds/           # Seeders
- public/            # Arquivos publicos (CSS, JS, imagens, index.php)
- resources/
  - assets/          # Fontes JS e SASS para compilacao
  - views/           # Templates Blade
- routes/
  - web.php          # Definicao de rotas web
- webpack.mix.js     # Configuracao do Laravel Mix (build de assets)
```

## Comandos Artisan

```bash
# Criar Controller
php artisan make:controller NomeController

# Criar Model
php artisan make:model NomeModel

# Criar Form Request
php artisan make:request NomeRequest

# Criar Seeder
php artisan make:seeder NomeSeeder

# Criar Migration
php artisan make:migration create_nome_table

# Rodar migracoes
php artisan migrate

# Rollback da ultima migracao
php artisan migrate:rollback

# Criar chave da aplicacao
php artisan key:generate

# Acessar Tinker (CLI interativo)
php artisan tinker
```

## Compilacao de Assets

```bash
# Desenvolvimento (unica vez)
npm run dev

# Desenvolvimento com watch (recompila automaticamente)
npm run watch

# Producao (minificado)
npm run prod
```
