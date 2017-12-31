<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \Bruno\Blog\Model\PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \Bruno\Blog\Model\PostManager();
    $commentManager = new \Bruno\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \Bruno\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


function modifyComment($postId){
	require('view/frontend/modificationCommentView.php');
}

function updateComment($postId, $comment, $modifiedComment){

    $commentManager = new \Bruno\Blog\Model\CommentManager();

    $affectedLine = $commentManager->updateComment($postId, $comment, $modifiedComment);

    header('Location: index.php?action=post&id='. $postId);
    
}