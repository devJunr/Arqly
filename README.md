
---

<div align="center">
    <img src="https://github.com/devJunr/Arqly/blob/main/public/images/icons/icon.png?raw=true" alt="Logo" width="200"/>

     Arqly - Facilita os Estudos
</div>

---

Este é um projeto de uma aplicação web desenvolvida para hospedar arquivos, como artigos e outros materiais de estudo, com o objetivo de ajudar estudantes a organizarem e acessarem seus recursos de estudo de forma prática e eficiente.

## Funcionalidades
- **Upload e armazenamento de arquivos.**
- **Organização de materiais de estudo.**
- **Interface amigável para estudantes.**

---

## Requisitos para Executar o Projeto
Para executar esta aplicação, é necessário ter as seguintes dependências instaladas:

- [Node.js](https://nodejs.org/)
- [PHP](https://www.php.net/)
- [Laravel Framework](https://laravel.com/)
- [Composer](https://getcomposer.org/)

---

## Instalação e Configuração

Siga as etapas abaixo para configurar e executar o projeto localmente:

1. Clone o repositório para sua máquina local:
    ```bash
    git clone https://github.com/devJunr/Arqly
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd <Arqly>
    ```

3. Instale as dependências do Node.js:
    ```bash
    npm install
    ```

4. Instale as dependências do PHP utilizando o Composer:
    ```bash
    composer install
    ```

5. Configure o arquivo `.env` com as informações necessárias, como banco de dados. Um exemplo do arquivo pode ser encontrado em `.env.example`.

6. Execute as migrações para configurar o banco de dados local:
    ```bash
    php artisan migrate
    ```

7. Inicie o servidor de desenvolvimento do Laravel:
    ```bash
    php artisan serve
    ```

8. Paralelamente, inicie o servidor de desenvolvimento do Node.js:
    ```bash
    npm run dev
    ```

Agora, a aplicação estará disponível em um endereço local, geralmente `http://localhost:8000` para o servidor PHP e outra porta para o servidor Node.js.

---

## Tecnologias Utilizadas

<div align="center">

![HTML](https://img.shields.io/badge/HTML-5-orange?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-3-blue?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.4-blue?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-8-red?style=for-the-badge&logo=laravel&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-2-darkblue?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-6.14.4-red?style=for-the-badge&logo=npm&logoColor=white)

</div>

---

## Licença
Este projeto está licenciado sob a [MIT License](LICENSE).

---
