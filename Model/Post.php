<?php
    namespace Model;

class Product extends \Model\Model{
    public function __construct()
    {
        parent::__construct("product");
    }
    public function getAllComments()
    {
        $req = $this->db->query("SELECT * FROM p");
        $req->setFetchMode(\PDO::FETCH_OBJ);
        return $req->fetchAll();
    }
    
}