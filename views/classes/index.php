<?php foreach($classes as $classe): ?>

<h2><a href="./classes/detail/<?=$classe['id']?>"><?=$classe['id']?></a></h2>
<p><?=$classe['nom']?></p>

<?php endforeach ?>