<div class="row">
	<div class="col-lg-12">
		<h2><?php echo $title; ?></h2>

<table class='table'>
	<tr><th>Mid</th><th>Name</th><th>Status</th><th>Phone</th><th>Action</th></tr>

<?php foreach ($merchant as $merchant_item){

	

 ?>

<tr>
	<td>
		<?php 
		if( isset($merchant_item['mid']) ){
			echo $merchant_item['mid'];
		} else { echo "N/A"; } ?>
	</td>
	<td><?=$merchant_item['company']['legalName']?></td>
	<td>
		<?php 
		if( isset($merchant_item['status']) ){
			echo $merchant_item['status'];
		} else { echo "N/A"; } ?>
	</td>

	<td><?=$merchant_item['company']['companyPhone']?></td>
	
	<td>
		<?php 
		if( isset($merchant_item['mid']) ){ ?>
			<a href="<?php echo site_url('mid/'.$merchant_item['mid']); ?>">View mid</a>
		<?php } else { echo "N/A"; } ?>
	</td>
	<td></td>
</tr>
<?php }; ?> 
</table>
	</div></div>





