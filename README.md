# projetoDW - Gerenciamento de usuários usando php e MySQL

## Equipe:
  > Dyego de Lima Galvão - Matrícula: 20141380378


## Descrição

Uma simples gerencia de usuários usando php e MySQL e também uma tentativa de implementar chat em tempo real que não deu muito certo(não trabalhei muito nisso).
Para rodar você precisa de um servidor MySQL e um servidor web com suporte a php.

## Baixando e configurando

Vá até sua pasta de preferencia e use o comando:
  
    # git clone https://github.com/dyegostan/projetodw.git

Abra o arquivo  conectar.php e configure o usuário, senha e database de sua preferencia:

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'minhasenha');
    define('DB_DATABASE', 'minhadb');

Crie uma database com o nome que voce configurou em conectar.php

    # mysql -u root -p
    # CREATE DATABASE minhadb;

Importe o arquivo projetodw.sql para a database que voce criou:

    # minhadb < tabela/projetodw.sql
    # exit


Agora este SIMPLES gerenciamento de usuários está pronto para uso.
