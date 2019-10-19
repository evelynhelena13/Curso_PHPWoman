<?php

namespace Catalogo;

require "Categoria.php";

$categoria = new Categoria();

$categoria->nome = $_POST['nome'];
$categoria->descricao = $_POST['descricao'];

var_dump ($categoria);
