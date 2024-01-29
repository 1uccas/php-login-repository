# php-login-repository 🎯

Este repositório contém um sistema de autenticação em PHP, desenvolvido com implementações de login, cadastro, recuperação de senha, sessões e envio de e-mails de acesso único em projetos web.

## Funcionalidades Principais

- **Login Seguro**: Implementação para autenticação de usuários.
- **Cadastro de Usuários**: Facilita a inclusão de novos usuários no sistema.
- **Recuperação de Senha**: Funcionalidade para redefinir a senha esquecida.
- **Envio de E-mail de Acesso Único**: Permite o envio seguro de e-mails para acesso único.
- **Criptografia de Dados**: Cada dado sensivel, como ID, E-mail ou senha, são criptografados via URL.
- **Sessões**: Implementação de Sessões únicas para cada usuário.
- **Modo Dark e Light**: Permite o usuário escolher tema escuro ou tema claro da aplicação.

## Como Usar

1. Requisitos:

- Certifique-se de ter um servidor PHP configurado (Laragon, Xampp, etc.).
- Configure um banco de dados compatível (MySQL, PostgreSQL, etc.).

2. Configuração do Banco de Dados:

- Importe o banco de dados disponível abaixo `php-login-repository-db.sql`.
- `Login: admin_admin` 
- `Senha: admin_admin`

3. Integração no Projeto:

- Inclua os arquivos deste repositório no seu projeto PHP. 
- Utilize `https://github.com/Luccxx/php-login-repository.git`

4. Rode o projeto em sua máquina.

- Inicie seu servidor. 
- Acesse `localhost:8080` ou (caso estiver utilizando Laragon) `php-login-repository.test`

5. Primeiros passos.

- Entre com os dados abaixo:
- `Login: admin_admin`
- `Senha: admin_admin`

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas (issues) ou enviar pull requests para melhorias.

## Licença

Este projeto é licenciado sob a Licença MIT.
