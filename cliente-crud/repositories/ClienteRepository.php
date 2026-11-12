<?php 
require_once __DIR__. '/../config/Database.php';
require_once __DIR__. '/../models/Cliente.php';
require_once __DIR__. '/../interfaces/RepositoryInterface.php';

class ClienteRepository implements RepositoryInterface{
    private $conn;

    public function _construct()
    {
        $this->conn = Database::conectar();
    }

    public function criar($objeto)
    {
        $sql = "INSERT INTO clientes (nome, email, documento) VALUES (:n, :e, :d)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $objeto->getNome(),
            ':e' => $objeto->getEmail(),
            ':d' => $objeto->getDocumento(),
        ]);
    }

    public function listar()
    {
        $stmt = $this->conn->query("SELECT * FROM clientes ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    #[Override]
    public function buscarPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function atualizae($id, $objeto)
    {
        $sql="UPDATE clientes SET nome=:n, email=:e, documento=:d WHERE id=:id";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([
            ':n' => $$objeto->getNome(),
            ':e' => $$objeto->getEmail(),
            ':d' => $$objeto->getDocumento(),
            ':id' => $id
        ]);
    }
    public function excluir($id)
    {
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id'=>$id]);
    }
}
?>