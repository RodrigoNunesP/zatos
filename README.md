## zAtos

## Configurações do ambiente

 - Versão do PHP 7.2.31
 - Versão Apache	Apache / 2.4.43 (Unix) OpenSSL / 1.1.1g PHP / 7.2.31 mod_perl / 2.0.8-dev Perl / v5.16.3
 - Base de dados mySQL na raiz da aplicação: zatos.sql
 - Framework CodeIgniter 3.0

## Configuração da aplicação:

assim que fizer a clonagem pelo git:
Substituir a url raiz (http://localhost/zatos/zatos/) para a correspondente em seu ambiente de maneira que possa rodar-la adequadamente:

../application/config/config.php 26,41: $config['base_url'] = 'http://localhost/zatos/zatos/';


../public/js/util.js 1,36: const BASE_URL = "http://localhost/zatos/zatos/"; 

## Banco de dados

- Está na raiz o SQL da base: para login inicial utilizar: 
- login: admin  
- password: admin

## Questôes dissertativas

- As questões dissertativas estão respondidas na home da aplicação e tambem em um arquivo na raiz "questionario_respostas.pdf"