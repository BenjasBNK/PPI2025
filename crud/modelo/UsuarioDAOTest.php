
<?php
include_once_DIR_.'./Conexao.php';
include_once_DIR_.'./Usuario.php';
include_once_DIR_.'./UsuarioDAO.php';

$daoUsuario= new UsuarioDAO();

$daoUsuario ->insere(new Usuario("joa0", "joao@gmail.com","joao"))

echo var_dump($daoUsuario ->busca_usr_email("joao@gmail.com"))

echo var_dump($daoUsuario ->Lista_todos());

echo var_dum($daoUsuario->autenticar("joao@gmail.com", "adadadafaf"))
?>