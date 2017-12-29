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

	$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

	return $req;

}

