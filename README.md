
 # Você quer ser um desenvolvedor na equipe do Aprova Legal? 
 O desafio é desenvolver um sistema para registro de documentos, onde consiste o cadastro de **empresas**, **setores**, **funcionários** (usuários), **fluxos** e os **documentos**.
 
 # Instruções
 - O foco principal do nosso teste é o backend, portando, fique à vontade para usar views em Blade ou front-end com Vue.js;
 - Seguir princípios **CLEAN CODE**;
 - Utilize boas práticas de programação;
 - Utilize boas práticas de Git;
 - Documentar como rodar o projeto;
 - Abuse dos recursos do Laravel, afinal, ele é a estrela do projeto;
 - É interessante o uso mínimo de bibliotecas, utilize apenas as que julgar necessário.
 
 # Requisitos
 - O sistema deverá ser desenvolvido utilizando a linguagem PHP com framework Laravel 7 ou 8.
 - Você deve criar um CRUD que permita cadastrar as seguintes informações:
    - **Empresas**: Razão social, Nome fantasia e CNPJ.
    - **Setores**: Descrição e Sigla. Um setor pode fazer parte de múltiplas empresas.
    - **Funcionários**: Nome, E-mail e CPF. um funcionário pode fazer parte de vários setores.
    - **Documentos**: Identificação (código definido no cadastro), Nome original do arquivo e Localização do arquivo em Storage.
    - **Fluxos**: Documento, Setor de origem, Setor de destino, Funcionário origem, Funcionário destino (quem recebeu o documento), Identificação do término do processo e Observação (opcional).
 -- Salvar as informações necessárias em um banco de dados (relacional) de preferência MySql.

# MVP
- O sistema deve possuir o CRUD de todos os itens de cadastro citados acima;
- A regra de negócio principal é o rastreio do documento, possibilitando o trâmite entre empresas e setores;
- Além do CRUD é necessário uma tela para visualização do histórico de trâmite (fluxos) do documento;
- Permitir download do documento.
 
 # O que será avaliado
 - Estrutura e organização do código e dos arquivos;
 - Uso dos recursos do framework.
 
 # Como iniciar o desenvolvimento
 - Fork esse repositório na sua conta do GitHub;
 - Crie uma branch com o nome **desafio**.
 
 Qualquer dúvida sobre o desafio, fique a vontade para entrar em contato conosco.
