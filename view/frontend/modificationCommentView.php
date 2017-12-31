<?php $title= 'modification du commentaire';?>

<?php ob_start(); ?>

<h1>Modification de commentaire</h1>

<form action= "index.php?action=updateComment&amp;id=<?=$_GET['id']?>&amp;comment=<?=$_GET['comment']?>" method="post">
	<label for="modified_comment">Votre nouveau commentaire</label>
	<textarea name="modified_comment" placeholder="<?= $_GET['comment']?>"></textarea>
	<input type="submit"/>
</form>

<?php $content= ob_get_clean();?>

<?php require('template.php');?>

