<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>Server Management Panel</title>
		<!-- CSS files -->
		<link href="./assets/css/tabler.min.css" rel="stylesheet"/>
		<link href="./assets/css/tabler-flags.min.css" rel="stylesheet"/>
		<link href="./assets/css/tabler-payments.min.css" rel="stylesheet"/>
		<link href="./assets/css/tabler-vendors.min.css" rel="stylesheet"/>
		<link href="./assets/css/demo.min.css" rel="stylesheet"/>
	</head>
	<body >
		<div class="wrapper">
			<header class="navbar navbar-expand-md navbar-light d-print-none">
				<div class="container-xl">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
						<a href=".">
							Server Management Panel
						</a>
					</h1>
					<div class="navbar-nav flex-row order-md-last">
				
						<a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/moon -->
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
						</a>
						<a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
							<!-- Download SVG icon from http://tabler-icons.io/i/sun -->
							<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
						</a>
						<div class="nav-item dropdown d-none d-md-flex me-3">
							<a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
								<!-- Download SVG icon from http://tabler-icons.io/i/bell -->
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
								<span class="badge bg-red"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
								<div class="card">
									<div class="card-body">
										Some info can go here....
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</header>
			<div class="navbar-expand-md">
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="navbar navbar-light">
						<div class="container-xl">
							<ul class="navbar-nav">
								
								<li class="nav-item">
									<a class="nav-link" href="./index.html" >
										<span class="nav-link-title">
											Home
										</span>
									</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="./index.html" >
										<span class="nav-link-title">
											Servers
										</span>
									</a>
								</li>

							</ul>
							
						</div>
					</div>
				</div>
			</div>
			<div class="page-wrapper">
				<div class="container-xl">
					<!-- Page title -->
					<div class="page-header d-print-none">
						<div class="row align-items-center">
							<div class="col">
								<h2 class="page-title">
									<?php echo ucfirst($route); ?>
								</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-body">
					<div class="container-xl">