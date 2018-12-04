<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h2>Data</h2>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th width="40%">Body</th>
					<th>Tools</th>
				</tr>
				<?php
					foreach ($sql as $key ) {
				?>
					<tr>
						<td><?php  echo $key->id; ?></td>
						<td><?php  echo $key->title; ?></td>
						<td><?php  echo $key->body; ?></td>
						<td><a href="<?php echo BASE_URL.'cart/edit/'.$key->id;  ?>" class="btn btn-primary btn-sm">Edit</a>&nbsp;<a href="<?php echo BASE_URL.'cart/delete/'.$key->id;  ?>" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>