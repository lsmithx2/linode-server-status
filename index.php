<?php

if ($_GET['route'])
{
	$route = $_GET['route'];
}
else
{
	$route = 'home';
}

require('assets/header.php');

if (file_exists('assets/pages/'.$route.'.php'))
{
	require('assets/pages/'.$route.'.php');
}
else
{
	echo '<div class="alert alert-danger"><b>Error:</b> Page does not exist.</div>';
}

require('assets/footer.php');

?>