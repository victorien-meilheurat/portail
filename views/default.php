<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="/"> 
			<img src="/<?= ROOTLINK?>/public/images/logo.png" alt="logo" class="logo" />
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
			<?php if ($_SESSION['utilisateur']['id_role']==1) : //Administrateur?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/classes/index">Classes</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/cours/index">Cours</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/examens/index">Examens</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/matieres/index">Matières</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/roles/index">Roles</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/salles/index">Salles</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/typeExamens/index">Types d'examens</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/utilisateurs/index">Utilisateurs</a></li>			
				</ul>
			<?php endif ?>
			<?php if ($_SESSION['utilisateur']['id_role']==2) : //Administratif?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/examens/index">Examens</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/utilisateurs/profetud">Utilisateurs</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/salles/planningGlobal">Planning salles</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/examens/planningGlobal">Planning des devoirs</a></li>			
				</ul>
			<?php endif ?>
			<?php if ($_SESSION['utilisateur']['id_role']==3) : //Etudiant?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/ressources/index">Ressources</a></li>			
				</ul>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="/<?= ROOTLINK?>/notes/user/<?= $_SESSION['utilisateur']['id'] ?>">Mes notes</a></li>			
				</ul>
			<?php endif ?>
			<?php if ($_SESSION['utilisateur']['id_role']==4) : //Professeur?>

			<?php endif ?>
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