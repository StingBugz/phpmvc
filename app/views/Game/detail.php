<div class="container mt-5">
	
	<div class="card" style="width: 18rem;">
		  <!-- <img src="..." class="card-img-top" alt="..."> -->
		  <div class="card-body">
		    <h1 class="card-title"><?php echo $data["nama_game"] ?></h1>
		    <p class="card-text">is the game made by <?php echo $data["developer"] ?> Coorporation</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">
		    	<label>Genre : </label>
		    	<?php echo $data["genre"] ?>
		    </li>
		    <li class="list-group-item">
		    	<label>Device : </label>
		    	<?php echo $data["device"] ?>
		    </li>
		  </ul>
		  <div class="card-body">
		    <a href="<?php echo base_url; ?>/Game/index" class="card-link">Back</a>
	 	 </div>
	</div>
</div>