<?php
//define('HOST', 'localhost:3306');
//define('USUARIO', 'root');
//define('SENHA', '');
//define('DB', 'sobreaereo_db');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);
// or die ('Não foi possível conectar');
//why dont u wanna die?
if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}