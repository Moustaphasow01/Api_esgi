<?php
namespace Model;

class Comment extends \Model\Model {
    public function __construct()
    {
        parent::__construct("post");
    }

    public function getAllComments()
    {
        $req = $this->db->query("SELECT * FROM post");
        $req->setFetchMode(\PDO::FETCH_OBJ);
        return $req->fetchAll();
    }
}
