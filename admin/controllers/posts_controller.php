<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
    function __construct()
    {
        $this->folder = 'posts';
    }

    function index()
    {
        $posts = Post::getAllPosts();

        $data = array('posts' => $posts);
        $this->render('index', $data);
    }

    public function showPost()
    {
        $post = Post::findById($_GET['id']);
        $data = array('post' => $post);
        $this->render('show', $data);
    }
}
