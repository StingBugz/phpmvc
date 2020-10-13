<div class="container mt-5">
	<div class="row">
		<div class="col">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h1>List Game
				<button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#formModal">
				  Add Game
				</button>
			</h1>
			<table class="table">
			  <thead class="thead-dark">
			    <tr class="align-middle">
			      <th scope="col">No</th>
			      <th scope="col">Nama Game</th>
			      <th scope="col">Genre</th>
			      <th scope="col">Device</th>
			      <th scope="col">Developer</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  		$i = 1;
			  	foreach ($data as $d): ?>	
				   	<tr>
				   		<th><?php echo $i++ ?></th>
				   		<th scope="row">
				   			<?php echo $d["nama_game"] ?>
				   		</th>
				   		<th scope="row">
				   			<?php echo $d["genre"] ?>
				   		</th>
				   		<th scope="row">
				   			<?php echo $d["device"] ?>
				   		</th>
				   		<th scope="row">
				   			<?php echo $d["developer"] ?>
				   		</th>
				   		<th>
				   			<a href="<?php echo base_url; ?>/Game/detail/<?php echo $d['id_game'] ?>" class="btn btn-primary">Detail</a>
				   			<a href="<?php echo base_url ?>/Game/update/<?php echo $d['id_game'] ?>" class="btn btn-success ml-3 tampilModal" data-toggle="modal" data-target="#formModal" data-id="<?php echo $d['id_game'] ?>">Edit</a>
				   			<a href="<?php echo base_url; ?>/Game/delete/<?php echo $d['id_game'] ?>" class="btn btn-danger"  onclick="return confirm('Yakin ingin Delete ?')">Delete</a>
				   		</th>
				   		
				   	</tr>
			   	<?php endforeach ?>
			  </tbody>
			</table>

			<!-- Modal -->
			<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="titleModal">Add Some Game Sir</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="<?php echo base_url; ?>/Game/tambah" method="post">
			        	<div class="form-group">
			        		<label for="name">Game Name</label>
			        		<input type="text" id="name" name="game_name" class="form-control" autocomplete="off" required>
			        	</div>
			        	<div class="form-group">
			        		<label for="genre">Genre</label>
			        		<input type="text" id="genre" name="genre" class="form-control" autocomplete="off" required>
			        	</div>
			        	<div class="form-group">
			        		<label for="developer">Developer</label>
			        		<input type="text" name="developer" id="developer" class="form-control" autocomplete="off" required>
			        	</div>
			        	<div>
			        		<label for="device">Device</label>
			        		<select class="form-control" id="device" name="device">
			        			<option value="Komputer">Komputer</option>
			        			<option value="Handphone">Handphone</option>
			        		</select>
			        	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add</button>
			      </div>
			       </form>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
