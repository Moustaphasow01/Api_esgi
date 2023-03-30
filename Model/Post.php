<?php
namespace Model;

class Post extends \Model\Model {
    public function __construct()
    {
        parent::__construct("post");
    }

    function getOne($id)
    {
        $reqPost = $this->db->prepare("SELECT * FROM " . $this->name . " WHERE id=?");
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
    
}
