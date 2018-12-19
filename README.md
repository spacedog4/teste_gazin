# Teste Gazin
Teste para vaga de desenvolvedor ou analista na Gazin

Projeto desenvolvido em PHP utilizando o framework Laravel 5.7.19 para desenvolvimento do backend e jQuery para desenvolvimento dos scripts de interação e Ajax

## Requisitos
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- PDO SQLite PHP Extension
- Mbstring PHP Extension

## Instalação
Clone o projeto usando a seguinte linha de comando
`git clone https://github.com/spacedog4/teste_gazin.git`

Atualize o composer usando o commando
`composer update`

O projeto já inicia com um banco de dados com um registro, mas caso seja necessário pode limpar o banco de dados usando o comando
`php artisan migrate:refresh`
esse comando recria todas as tabelas do banco de dados de acordo com os arquivos de migração encontrados em `database/migrations`


## Inicar servidor local

Se você possui o PHP instalado localmente e configurado pode iniciar o servidor com o comando `php artisan server` o site vai ficar disponível através do endereço `http://localhost:8000`

Caso o contrario você pode utilizar programas como Xampp ou Wampp, mas a configuração 
