<?php foreach($matieres as $matiere): ?>

<h2><a href="./matieres/detail/<?=$matiere['id']?>"><?=$matiere['id']?></a></h2>
<p><?=$matiere['nom']?></p>

<?php endforeach ?>