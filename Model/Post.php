<?php
namespace Model;

class Post extends \Model\Model {
    public function __construct()
    {
        parent::__construct("post");
    }

    function getOne($id)
    {
        $reqPost = $this->db->prepare("SELECT * FROM  post WHERE id=?");
        $reqPost->execute(array($id));
        $reqPost->setFetchMode(\PDO::FETCH_OBJ);
        $post = $reqPost->fetch();
    
        $reqComments = $this->db->prepare("SELECT * FROM comment WHERE post_id=?");
        $reqComments->execute(array($id));
        $reqComments->setFetchMode(\PDO::FETCH_OBJ);
        $comments = $reqComments->fetchAll();
    
        $post->comments = $comments;
    
        return $post;
    }

    public function create($id)
    {
        $req = $this->db->prepare("SELECT * FROM user WHERE id=?");
        $req->execute(array($id));
        $req->setFetchMode(\PDO::FETCH_OBJ);
        return $req->fetch();
    }
    
}
