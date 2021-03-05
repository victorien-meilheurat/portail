<?php foreach($salles as $salle): ?>

<h2><a href="./salles/detail/<?=$salle['id']?>"><?=$salle['id']?></a></h2>
<p><?=$salle['batiment']?></p>
<p><?=$salle['numero']?></p>

<?php endforeach ?>