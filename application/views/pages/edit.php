<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2>Edit data</h2>
			 <div class="card">
			 	<div class="card-header">
			 		Input
			 	</div>
			 	<div class="card-body">
			 		<form action="<?php  echo BASE_URL; ?>cart/update" method="post" >
			 	<div class="form-group ">
			 		<label>Title</label>
			 		<input type="text" class="form-control" value="<?php echo $data['sql']->title;  ?>" name="title">
			 	</div>
			 	<div class="form-group">
			 		<label>Body</label>
			 		<textarea class="form-control"><?php echo $data['sql']->body;  ?></textarea>
			 	</div>
			 	<div class="form-group">
			 		<label></label>
			 		<button type="submit" class="btn btn-primary" name="body">Update</button>
			 	</div>
			 </form>
			 	</div>
			 </div>
		</div>
	</div>
</div>