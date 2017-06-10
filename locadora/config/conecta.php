<?php
  try {
    $servidor = "172.16.1.215";
    $banco = "7829_locadora";
    $usuario = "7829";
    $senha = "7829";

    $pdo = new PDO ("mysql:host=$servidor;dbname=$banco;charset=utf8","$usuario","$senha");

  } catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage();
    exit;
  }