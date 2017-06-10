<?php
require_once 'Crud.php';
    
class Livros extends Crud{
    
    protected $table = 'livros';
    private $nome;
    private $autor;
    private $categoria;
    private $descricao;
    private $estoque;
    private $isbn;
    private $status;
    private $valor;
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }
    
    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }
    
    public function setValor($valor){
        $this->valor = $valor;
    }
    
    public function insert(){
        $sql = "INSERT INTO $this->table (autor, categoria, descricao, estoque, isbn,"
                . " nome, status, valor) VALUES (:autor, :categoria, :descricao, :estoque, :isbn,"
                . " :nome, :status, :valor) ";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':estoque', $this->estoque);
        $stmt->bindParam(':isbn', $this->isbn);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':valor', $this->valor);
        return $stmt->execute();
    }
    
    public function update($id) {
        $sql = "UPDATE $this->table SET autor = :autor, categoria = :categoria, descricao = :descricao"
                . "estoque = :estoque, isbn = :isbn, nome = :nome, status = :status, valor = :valor WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':estoque', $this->estoque);
        $stmt->bindParam(':isbn', $this->isbn);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
}