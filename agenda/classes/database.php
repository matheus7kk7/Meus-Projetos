<?php

//Parametros conexão banco de dados 

$host = 'localhost'; //local aonde está o bd
$user = 'root'; //Login do bd
$pass = ''; //Senha do bd
$database = 'produtos'; //Nome do bd

$conexao = new mysqli($host, $user, $pass, $database); //Instanciando o objeto conexão a classe mysqli 

?>