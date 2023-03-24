<?php

namespace Controller;

class PostController extends Controller
{
    private $postManager;

    public function __construct()
    {
        $this->postManager = new \Model\Post();
    }

    function getAll()
    {
        $this->JSON($this->postManager->getAll());
    }

    function getOne($id)
    {
        $this->JSON($this->postManager->getOne($id));
    }

    function create()
    {
        $post = new \stdClass();
        $post->title = $_POST["title"];
        $post->content = $_POST["content"];
        $this->postManager->create($post);
        echo '{"message":"Post créé"}';
    }

    function update($id)
    {
        $data = json_decode(file_get_contents("php://input"));
        $post = new \stdClass();
        $post->id = $id;
        $post->title = $data->title;
        $post->content = $data->content;
        if ($this->postManager->update($post)) {
            echo '{"message":"Post mis à jour"}';
        } else {
            return '{"message":"Post non trouvé"}';
        }
    }

    function delete($id)
    {
        if ($this->postManager->delete($id)) {
            echo '{"message":"Post supprimé"}';
        } else {
            return '{"message":"Post non trouvé"}';
        }
    }
} 