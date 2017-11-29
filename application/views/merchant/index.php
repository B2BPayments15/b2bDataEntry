<div class="starter-template">
        

    

<h2><?php echo $title; ?></h2>

<table class='table'>
	<tr><th>Mid</th><th>Merchant ID</th><th>Created By</th><th>Modified By</th><th>Created Date</th><th>Modified Date</th><th>Portfolio</th><th>Operation</th></tr>
<?php foreach ($merchant as $merchant_item): ?>
<tr>
	<td><?php echo $merchant_item['id']?></td>
	<td><?=$merchant_item['reference']?></td>
	<td><?=$merchant_item['created_by']?></td>
	<td><?=$merchant_item['modified_by']?></td>
	<td><?=$merchant_item['created_date']?></td>
	<td><?=$merchant_item['modified_date']?></td>
	<td><?=$merchant_item['mid']?></td>
	<td><a href="<?php echo site_url('mid/'.$merchant_item['mid']); ?>">View mid</a></td>
</tr>

<?php endforeach; ?>
</table>
</div>