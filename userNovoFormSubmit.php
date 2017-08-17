<pre>
<?php
header ('Content-type: text/html; charset=UTF-8');
require_once "engine.php";
var_dump($_REQUEST);
if(!User::novo()){
  echo "
Não foi posivel criar usuario
  ";
  //goto fim;
}
else{
  echo "
usuario criado com sucesso!
  ";
  //goto fim;
}
fim:
