<pre>
<?php
header ('Content-type: text/html; charset=UTF-8');
require_once "engine.php";
if(User::logued()){
    echo "Usuario logado";
}
else{
  include "userLoginForm.php";
}
