<?php
define('HOST', 'mysqlserver.cyloz6eqd1pd.sa-east-1.rds.amazonaws.com');
define('USUARIO', 'admin');
define('SENHA', 'Juk!ra12');
define('DB', 'dbbanana');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO DEU MAN');