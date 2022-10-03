<?php 
   $dbhost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'formulario-ana';

   $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

   if($conexao ->connect_errno)
   {
    echo "Erro";
   }
   else
   {
    echo "conexão efetuada com sucesso";
   }
?>