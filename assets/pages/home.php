<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="server-list"></div>

<script>
	
	function getServers()
	{
		$.ajax({
			type: "POST",
			url: "./assets/plugins/linode/linode.php",
			data: "",
			success: function(data, textStatus) {
				$(".server-list").html(data);    
			},
			error: function() {
				alert('Error while loading plugins.');
			}
		});
	}
	
	window.onload = getServers();
	
	setInterval(function(){ 
		getServers();
		console.log("Refreshed server list.");
	}, 5000);
</script>