<?php
  require_once('../controller/UsuarioController.php');

  $usuarioController = new UsuarioController();
  $usuario = $usuarioController->search($_POST['usu_log'], $_POST['usu_sen']);

  if (!isset($usuario)) {
    echo 0;
  } else {
    if (!isset($_SESSION))
      session_start();

    $_SESSION['usuarioCod'] = $usuario->__get('usu_cod');
    $_SESSION['usuarioLog'] = $usuario->__get('usu_log');
    $_SESSION['usuarioTpo'] = $usuario->__get('usu_tpo');

    echo 1;
  }
?>