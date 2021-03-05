<?php foreach($cours as $cour): ?>

<h2><a href="./cours/detail/<?=$cour['id']?>"><?=$cour['id']?></a></h2>
<p><?=$cour['nom']?></p>
<p><?=$cour['dateDebut']?></p>
<p><?=$cour['dateFin']?></p>

<?php endforeach ?>