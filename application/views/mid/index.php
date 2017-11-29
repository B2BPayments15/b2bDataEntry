<div class="starter-template">
        

    

<h2><?php echo $title; ?></h2>

<table class='table'>
	<tr><th>Mid</th><th>Merchant ID</th><th>Created By</th><th>Modified By</th><th>Created Date</th><th>Modified Date</th><th>Portfolio</th><th>Operation</th></tr>
<?php foreach ($mids as $mid_item): ?>
<tr>
	<td><?php echo $mid_item['mid']?></td>
	<td><?=$mid_item['merchant_id']?></td>
	<td><?=$mid_item['created_by']?></td>
	<td><?=$mid_item['modified_by']?></td>
	<td><?=$mid_item['created_date']?></td>
	<td><?=$mid_item['modified_date']?></td>
	<td><?=$mid_item['portfolio_code']?></td>
	<td><a href="<?php echo site_url('mid/'.$mid_item['mid']); ?>">View mid</a></td>
</tr>

<?php endforeach; ?>
</table>
</div>