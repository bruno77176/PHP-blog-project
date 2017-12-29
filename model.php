<?php 

function getPosts()
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}

	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

	return $req;

}


function getPost($postId)
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
	}

	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('SELECT id, title, content, DATE_FORMAT(creation_date,\'%d/%m/%Y à %H%i%ss\') AS creation_date_fr FROM posts WHERE id=?');
	$req->execute(array($postId));

	$post = req->fetch();

	return $post;
}

function getComments($postId)
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
	}

	catch(Exception $e)
	{
		die('Erreur : ').$e->getMessage();
	}

	$comments = $bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %H%i%ss\') AS comment_date_fr FROM comments WHERE id=? ORDER BY comment_date DESC');
	$comments->execute(array($postId));

	return $comments;


}
