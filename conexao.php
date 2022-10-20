<?php

define('host', 'localhost');
define('user', 'root');
define('pass', '');
define('base', 'cadastro');
$conexao = new mysqli(host,user,pass,base);

if(!$conexao) {
    print "Falha na conexão com o banco de dados!";
}