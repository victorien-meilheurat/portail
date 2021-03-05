<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="/"> 
			<img src="public/images/logo.png" alt="logo" class="logo" />
			CDA2020A
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarCollapse" aria-controls="navbarCollapse"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a class="nav-link" href="./">Accueil</a></li>			
			</ul>
		</div>
	</nav>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/main.css" />
	
	<style>
		body{
			font-family: Verdana, serif;
			font-size: 10pt;
		}
		.row > [class*='col-'] {
			 margin-bottom: 10px;
		}
		.vert{color:green;}
		.rouge{color:red;}
	</style>
</header>

<main style="margin-top: 100px;">
        <?=$content?>

</main>

<footer class="footer">
    <div>
      <span class="text-muted">Bachelor CDA2020A</span>   
    </div>
</footer>