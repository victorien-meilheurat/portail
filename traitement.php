<?php
session_start(); //nécessaire pour utiliser Session

function checkCompte($login, $password){
	if(!isset($_SESSION['comptes'])){
		return '';
	}

	foreach ($_SESSION['comptes'] as $compte) {
		if($compte['login']==$login && $compte['password']==$password){
			return $compte['prenom'].' '.$compte['nom'];
		}
	}
	return '';
}
function createCompte($prenom, $nom, $login, $password){
	if(!isset($_SESSION['comptes'])){
		$_SESSION['comptes'] = array();
	}

	//TODO : ajouter test si user (même login) existe déjà!
	$_SESSION['comptes'][] = array(
		'prenom' => $prenom ,
		'nom' => $nom ,
		'login' => $login ,
		'password' => $password
	);
}

if(isset($_REQUEST['login_ok'])){
	//form login à traiter!

	$login = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	//TODO : lien 	avec couche DAO!! (=> Base de Données)
	$user = checkCompte($login, $password);

	if($user!=''){ //OK
		$_SESSION['user']=$user; 	//Entregistrer Utilisateur authentifié dans Session
		header('Location:test.php'); //retour vers accueil!
	}else{
		//error login : redirection vers page login avec message erreur!
		$_SESSION['user']='';
		header('Location:login.php?message_error=1');
	}
}
if(isset($_REQUEST['logout'])){
	$_SESSION['user']='';
	header('Location:test.php');
}

if(isset($_REQUEST['signup'])){
	header('Location:login.php?signup');
}

if(isset($_REQUEST['signup_ok'])){
	//form create compte à traiter!
	$prenom = $_REQUEST['prenom'];
	$nom = $_REQUEST['nom'];
	$login = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$password_confirm = $_REQUEST['password_confirm'];

	$check_required = ($prenom!='' && $nom!='' && $login!='' && $password!='');
	$check_password = ($password == $password_confirm);


	if($check_required && $check_password){
		//form ok

		createCompte($prenom,$nom,$login,$password);

		$_SESSION['user']=$prenom.' '.$nom; 
		header('Location:test.php'); 

		//header('Location:login.php?message=1');

	}else{
		$code_error = !$check_required?2:3;
		header('Location:login.php?signup&message_error='.$code_error);
	}
}