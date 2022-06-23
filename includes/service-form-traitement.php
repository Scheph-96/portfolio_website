<?php
  $path =  realpath($_SERVER["DOCUMENT_ROOT"]);
  include $path.'/Moreira/admin/configuration/accounts_administration.php';
  $status = register_client();
  echo $status;
?>
