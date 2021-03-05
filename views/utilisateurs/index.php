<?php foreach($utilisateurs as $utilisateur): ?>

<h2><a href="./utilisateurs/detail/<?=$utilisateur['id']?>"><?=$utilisateur['id']?></a></h2>
<p><?=$utilisateur['nom']?></p>
<p><?=$utilisateur['prenom']?></p>
<p><?=$utilisateur['login']?></p>
<p><?=$utilisateur['password']?></p>

<?php endforeach ?>