<?php $this->load->view("layouts/header"); ?>
<?php $this->load->view("layouts/navbar") ?>
<style>#style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #003333;
}

#style-1::-webkit-scrollbar
{
	width: 5px;
	background-color: #00ffff;
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}
#style-1::-moz-scrollbar-track
{
	-moz-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #003333;
}

#style-1::-moz-scrollbar
{
	width: 5px;
	background-color: #00ffff;
}

#style-1::-moz-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}

	.card-container{
			display:block;
			padding:40px;
			transition:all 1s;
			color:#555;
	}
	.row{
		align:center;
		color:#00ffff;
	}
	.card::scrollbar{
		width:20px;
		background-color:red;

	}
	.card{
		
		overflow-y:scroll;
		background: #003333;
		display: inline-block;
		margin-right:6%;
		margin-top:10px;
		margin-bottom: 10px;
		height:33%;
		width:90%;
		box-shadow:#00ffff;
		/*max-height: 200px;*/
		/*width: 27%;*/
		position:relative;
		border:2px solid #00ffff;
		padding:20px;
		clear:both;
		color:#00ffff
		/*overflow: hidden;*/
	}
	.card-text{
		width:100%;
	}

</style>
	
	<div class="card-container">
	<div class="row row-centered">
	<?php foreach ($devices as $device) {?>
	<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
		<div class="card" id="style-1">
			<div class="card-title">
				<h4><?php echo $device->device_name;?></h4>
			</div>
			<div class="card-text">
				<p class="card-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae nobis aliquam dolorum cum pariatur quae 
				</p>
			</div>
			<div class="card-footer">
				 <h6> Last updated on <i class="fa fa-clock-o"></i>05/10/2015.</h6>
			</div>							

				
			</div>
	</div>
       <?php }?>
		
		
		
			
		
			</div>
		
	</div>



<?php $this->load->view("layouts/footer2"); ?>
<?php $this->load->view("layouts/footer"); ?>