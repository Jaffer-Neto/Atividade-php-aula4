<?php
$usuario = readline("Usuário:");
$senha = readline("senha:");

$credencial = (strcasecmp($usuario, "admin") == 0 && $senha == "php2026");
 if($credencial){
    echo("bem vindo\n");
 }else{
    echo("usuario ou senha invalidos\n");
 }