### Work In Progress (...)

## O que é este repositório

Este repositório foi criado durante meus estudos no Curso de Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS
do professor Jorge Sant Ana, comprado na plataforma Udemy pelo link https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/

Este projeto foi desenvolvido durante as Seções 13 e 14 do Curso, uma aplicação preparada para que o aluno aprenda os 
conhecimentos sobre Autenticação Web (Session) utilizando o Bootstrap

Dentro do desenvolvimento da aplicação foram explorados conceitos como:
- Utilização do Pacote Laravel UI
- Uso e entendimento do Middleware Auth
- Implementação do envio de emails via smtp
- Utilização do pacote Laravel Excel
- Utilização do pacote DOMPDF

Ao final do Curso, pretendo refatorar este projeto (provavelmente uma V2) criando uma interface mais agradável e com recursos visuais melhorados, utilizando o conceito da TALL stack (Tailwind CSS, AlpineJS, Laravel e Livewire). Por enquanto ele está sendo utilizado apenas para fins de estudo e conhecimento.

# Como rodar o projeto e o que ele é

Este repositório contém alguns endpoints que podem ser utilizados apenas para fins de teste via Postman e também possui
uma interface de funcionamento simples, porém que não funciona sem um banco de dados no seu ambiente local. O projeto pode ser 
rodado na sua máquina local, desde que você siga a seguinte sequência de passos a seguir:

- Primeiro: clone o repositório do projeto na sua máquina com o git
- Segundo: acesse a pasta do projeto e execute via terminal o comando php artisan migrate (as migrations
foram criadas para que o seu banco de dados local seja criado com as tabelas correspondentes) - NOTA: para que o comando
funcione corretamente, é necessário configurar o serviço do mysql na sua máquina e em seguida que vocêconfigure o arquivo
.env ao clonar o projeto.
- Terceiro: rode o comando php artisan serve para servir a aplicação no seu navegador
- Quarto: instale o node e o npm na sua máquina. Após a instalação rode em outra aba via terminal, dentro da pasta do projeto,
o comando npm install e em seguida o comando npm run dev
- Por último abra no link gerado pelo seu terminal a aplicação e verifique o funcionamento via interface (
consultar o arquivo api.php) 




