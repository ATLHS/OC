<?php session_start(); ?>

<?php $title = "message" ?>

<?php ob_start(); ?>
<?php require("header/backHeader.php") ?>
<?php $header =  ob_get_clean();  ?>

<?php ob_start(); ?>
<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-center">Messages</h2>
		</div>
	</div>
</div>
<div class="container" style="margin-top: 100px;">
<?php while ($messages = $message->fetch() ) { ?>

	<div style="margin: 30px;" class="row d-flex justify-content-center ">
		<div class="col-lg-10">
			<div id="commentMedia" style="box-shadow: " class="rounded media  d-flex justify-content-center align-items-center">
				<div  style="padding: 10px;" class="media-body">
					<div>
						<p style="font-size: 15px; margin: 0px;">De : <?php echo $messages["firstname"]; ?></p>
						<p style="font-size: 15px;">Date : <?php echo $messages["lastname"]; ?></p>
					</div>
					<div>
						<p style="font-size: 15px;" ><?php echo $messages["message"] ?>... </p>
					</div>
				</div>
				<div class="d-flex justify-content-center align-items-center">
					<a title="Valider" href="index.php?" class="btn btn-outline-success btn-sm d-block mr-4">Repondre</a>
				    <a title="Suprimer" href="index.php?" class="btn btn-outline-danger d-block mr-4 btn-sm">Suprimer</a>
				</div>
			</div>
		</div>
	</div>

<?php
} 
?>
</div>

<?php $body = ob_get_clean(); ?>



<?php ob_start(); ?>
<script src="js/menu_responsive.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php $script =  ob_get_clean();  ?>


<?php ob_start(); ?>
<?php require("footer/backFooter.php") ?>
<?php $footer =  ob_get_clean();  ?>


<?php require("template/template.php"); ?>