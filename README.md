# SrCalabreso

## Descrição

SrCalabreso é um projeto fullstack utilizando Laravel no backend e React no frontend, integrados via Inertia.js. O objetivo é fornecer uma base moderna, robusta e produtiva para o desenvolvimento de aplicações web, aproveitando o melhor das duas tecnologias.

## Tecnologias Utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** React 19, TypeScript
- **Estilização:** Tailwind CSS
- **Componentes UI:** shadcn/ui, radix-ui
- **Build:** Vite
- **Autenticação:** Laravel Sanctum

## Instalação

### Pré-requisitos

- PHP >= 8.1
- Composer
- Node.js >= 18
- npm ou yarn
- Banco de dados (MySQL, PostgreSQL, SQLite, etc.)

### Passos

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/SrCalabreso.git
   cd SrCalabreso
   ```

2. **Instale as dependências do backend:**
   ```bash
   composer install
   ```

3. **Instale as dependências do frontend:**
   ```bash
   npm install
   # ou
   yarn
   ```

4. **Copie o arquivo de ambiente e configure:**
   ```bash
   cp .env.example .env
   ```
   Edite o arquivo `.env` com as configurações do seu banco de dados e outras variáveis.

5. **Gere a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```

6. **Execute as migrações:**
   ```bash
   php artisan migrate
   ```

7. **Inicie o servidor de desenvolvimento:**
   ```bash
   php artisan serve
   ```

8. **Inicie o frontend:**
   ```bash
   npm run dev
   # ou
   yarn dev
   ```

## Estrutura do Projeto

- `app/` - Código backend Laravel (controllers, models, etc.)
- `resources/js/` - Código frontend React (componentes, páginas, hooks)
- `routes/` - Rotas Laravel
- `database/` - Migrations, seeders e factories

## Funcionalidades

- Autenticação de usuários
- Gerenciamento de produtos (CRUD)
- Perfil de usuário e configurações
- Interface moderna e responsiva

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## Licença

Este projeto está licenciado sob a licença MIT.
