<div class="card">
	<div class="card-header border-0">
		<div class="card-title">IP Addresses</div>
	</div>
	<div class="card-table table-responsive">
		<table class="table table-vcenter">
			<tbody>

				<?php

				foreach ($data['ipv4'] as $ipv4)
				{
					
				?>

				<tr>
					<td class="text-nowrap text-muted"><?php echo $ipv4; ?></td>
				</tr>
	
				<?php } ?>

				<?php if ($data['ipv6']) { ?>
				<tr>
					<td class="text-nowrap text-muted"><?php echo $data['ipv6']; ?></td>
				</tr>				
				<?php } ?>
				
			</tbody>
		</table>
	</div>
</div>