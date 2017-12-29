<?php 

require('controler.php');

if(isset($_GET['action'])) {

	if($_GET['action']== 'listPosts') {

		listPosts();
	}

	elseif($_GET['action'] == 'post') {

		if(isset($_GET['id']) && $_GET['id']>0) {

			post();
		}
		else {

			echo('Aucun identifiant de billet envoyé');			
		}
	}
}

else {

	listPosts();
}