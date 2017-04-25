<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3> Random name generator </h3>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<a href="index.php?gender=male" class="btn btn-info"> Get male random name </a>
			<a href="index.php?gender=female" class="btn btn-danger"> Get female random name </a>
			<br>
		</div>
	</div>

	<div class="well" style="margin-top: 10px;">
		<div class="row">
			<div class="col-sm-12">
				<h1> <?php echo $user->name; ?> </h1>
				<hr>
			</div>

			<div class="col-sm-6">
				<div> Gender </div>
				<div> <b> <?php echo $user->gender; ?> </b> </div>
			</div>

			<div class="col-sm-6">
				<div> Country </div>
				<div> <b> <?php echo $user->country; ?> </b> </div>
			</div>
		</div>
	</div>
</div>