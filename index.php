<?php 

require('controler/frontend.php');

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
	elseif($_GET['action'] =='addComment'){

		if(isset($_GET['id']) && $_GET['id']>0){

			if(!empty($_POST['author']) && !empty($_POST['comment'])){

				addComment($_GET['id'], $_POST['author'],$_POST['comment']);
			}

			else{

				echo ('Tous les champs ne sont pas remplis !');
			}
		}
		else{
			echo('Aucun identifiant de billet envoyé');
		}
	}
}

else {
	listPosts();
}