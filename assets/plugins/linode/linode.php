<?php

function getServers()
{
	$token = 'YOUR-API-TOKEN-HERE';
	
	$data = array(
		//'var' => true
	);
	
	$json = json_encode($data);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.linode.com/v4/linode/instances");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		
	$request_headers = array(
		'Authorization: Bearer '.$token.'',
		//'Content-Type: application/json'
	);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
		
	$result = curl_exec($ch);
	
	$result = json_decode($result, true);
		
	echo '<div class="row">';
	
	foreach ($result as $server)
	{
		
		foreach ($server as $data)
		{
			echo '<!-- ';
			print_r($data);
			echo ' -->';
						
			switch ($data['status']) 
			{
				case 'running':
					$server_status = 'online';
					$server_status_color = 'bg-green';
					break;
					
				case 'offline':
					$server_status = 'offline';
					$server_status_color = 'bg-red';
					break;
					
				case 'booting':
					$server_status = 'booting';
					$server_status_color = 'bg-orange';
					break;
					
				case 'rebooting':
					$server_status = 'rebooting';
					$server_status_color = 'bg-orange';
					break;
					
				case 'stopped':
					$server_status = 'offline';
					$server_status_color = 'bg-red';
					break;

				case 'shutting_down':
					$server_status = 'shutting down';
					$server_status_color = 'bg-red';
					break;
					
				default:
					$server_status = 'unknown';
					$server_status_color = 'bg-gray';
			}
			
			echo '<div class="col-md-6 col-lg-6">
					<div class="card server-card">
                  <div class="ribbon '.$server_status_color.'">'.$server_status.'</div>
                  <div class="card-body">
                    <h3 class="card-title">'.$data['label'].'</h3>
                    <p class="text-muted">
					
					<div class="row">
					
						<div class="col-md">';		
			require('ipaddr.php');
			
			echo '</div>
					
					</div>
					
					</p>
                  </div>
                </div></div>';
		}

	}
	
	echo '</div>';
			
	curl_close($ch);
}

getServers();

?>
<style>
	.server-card
	{
		min-height: 160px;
		margin: 10px;
	}
</style>