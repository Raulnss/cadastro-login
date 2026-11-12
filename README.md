🛒 Loja Virtual - Projeto Web

Uma aplicação web de comércio eletrônico desenvolvida com PHP, MySQL, HTML, CSS e JavaScript. O projeto simula uma loja virtual, permitindo o cadastro e autenticação de usuários, navegação por produtos, simulação de orçamentos e interação por meio de comentários.

!Status do Projeto !PHP !MySQL !License

Funcionalidades
Cadastro de usuários: Criação de contas com nome, nome de usuário, e-mail e senha.
Autenticação de usuários: Login utilizando e-mail ou nome de usuário.
Validação de dados: Verificação de campos obrigatórios, formato de e-mail e tamanho mínimo de senha.
Criptografia de senhas: Utilização de password_hash() e password_verify() para proteção das senhas.
Gerenciamento de sessões: Controle de autenticação e acesso às páginas da aplicação.
Catálogo de produtos: Exibição de produtos com imagens, descrições e preços.
Páginas de produtos: Visualização individual dos produtos disponíveis na loja.
Simulação de orçamento: Cálculo do valor total conforme a quantidade de produtos selecionados.
Sistema de comentários: Possibilidade de publicar e visualizar comentários.
Página de contatos: Exibição de informações de contato e localização da loja.
Página sobre: Apresentação da história e proposta do projeto.
Tecnologias Utilizadas

Este projeto foi desenvolvido utilizando as seguintes tecnologias:

PHP - Linguagem utilizada no processamento do servidor.
MySQL - Banco de dados relacional.
PDO - Conexão e comunicação com o banco de dados.
HTML5 - Estrutura das páginas.
CSS3 - Estilização das interfaces.
JavaScript - Interatividade da aplicação.
jQuery - Manipulação do DOM e requisições AJAX.
Bootstrap - Framework utilizado na construção das interfaces.
phpMyAdmin - Administração do banco de dados.
Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:

Git - Para clonar o repositório.
PHP (versão 8.0 ou superior).
MySQL (versão 8.0 ou superior).
XAMPP - Recomendado para executar o ambiente local.
Navegador web de sua preferência.
Como instalar e rodar

Siga o passo a passo abaixo para executar o projeto localmente:

Clone este repositório:
bash
git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git

Acesse a pasta do projeto:
bash
cd SEU-REPOSITORIO

Configure o ambiente:

Coloque a pasta do projeto dentro do diretório htdocs do XAMPP.

Inicie os serviços:

Abra o painel do XAMPP e inicie o Apache e o MySQL.

Configure o banco de dados:

Acesse o phpMyAdmin pelo endereço:

text
http://localhost/phpmyadmin


Crie o banco de dados cadastro e importe o arquivo SQL do projeto, contendo as tabelas usuarios e comentarios.

Configure a conexão com o banco:

Abra o arquivo conecta.php e configure as credenciais de acesso ao MySQL conforme seu ambiente local.

Execute a aplicação:

Abra o navegador e acesse:

text
http://localhost/SEU-REPOSITORIO/


Pronto! A aplicação estará disponível no seu ambiente local.

Estrutura do Projeto
text
📦 loja-virtual
│
├── 📁 imag/                 # Imagens dos produtos
│
├── 📁 js/                   # Arquivos JavaScript
│
├── 📁 paginas_de_venda/     # Páginas individuais dos produtos
│
├── index.html               # Página inicial
├── inicial.html             # Página de cadastro
├── login.html               # Página de login
├── cadastro.php             # Processamento do cadastro
├── login.php                # Processamento do login
├── conecta.php               # Conexão com o banco de dados
├── protect.php               # Proteção de páginas
├── sair.php                  # Encerramento da sessão
├── teste.html                # Página principal da loja
├── teste.php                 # Consulta dos dados do usuário
├── menu1.html                # Catálogo de produtos
├── menu2.html                # Orçamento
├── menu3.html                # Contatos
├── menu4.html                # Sobre a loja
├── teste.js                  # Scripts JavaScript
└── README.md                 # Documentação do projeto

Banco de Dados

O projeto utiliza o MySQL e possui duas tabelas principais:

usuarios: Armazena informações dos usuários, como nome, nome de usuário, e-mail e senha.
comentarios: Armazena os comentários publicados pelos usuários.

O banco de dados utilizado pela aplicação possui o nome cadastro.

Segurança

O projeto implementa algumas práticas de segurança:

Consultas preparadas utilizando PDO.
Armazenamento de senhas com password_hash().
Verificação de senhas com password_verify().
Controle de autenticação utilizando sessões PHP.

Observação: A aplicação possui finalidade educacional e necessita de melhorias antes de ser utilizada em produção. Recomenda-se implementar proteções adicionais contra CSRF e XSS, aprimorar a validação de dados e utilizar um sistema seguro de pagamentos. O fluxo de compra atual é apenas uma simulação. Não insira dados bancários reais.

Melhorias Futuras
Melhorar a responsividade da interface.
Implementar um carrinho de compras completo.
Desenvolver um sistema de pedidos.
Criar um painel administrativo.
Implementar gerenciamento de produtos.
Melhorar o sistema de comentários.
Implementar recuperação de senha.
Aprimorar a segurança da aplicação.
Refatorar e organizar o código.
Integrar um provedor de pagamentos.
Como Contribuir

Contribuições são sempre bem-vindas! Caso queira sugerir melhorias ou adicionar funcionalidades:

Faça um Fork do projeto.
Crie uma Branch para sua modificação (git checkout -b feature/NovaFuncionalidade).
Faça o Commit das suas alterações (git commit -m 'Adiciona nova funcionalidade').
Faça o Push para a Branch (git push origin feature/NovaFuncionalidade).
Abra um Pull Request.
Licença

Este projeto está disponível para fins de estudo e aprendizado. Caso opte por utilizar a licença MIT, adicione um arquivo LICENSE ao repositório com o texto correspondente.

Desenvolvido como projeto de estudo na área de Desenvolvimento Web. 🚀
