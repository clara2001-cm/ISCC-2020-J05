<?php

$nom_produit= "T-shirt simple";
$couleur= "blanc";
$prix= "10.50";
$disponible= "true";
$quantité= "10";
?>

<h3> Affichage </h3>
<p> le nom du produit est <?php echo $nom_produit ?></p>;
<p> il reste <?php echo $quantité?></p>;
<p> le produit <?php echo $nom_produit ?> est de couleur <?php echo $couleur?></p>;

<h4> Opération Simple </h4>
<p> Acheter 3 produits couterait <?php $nombre= 10.50*3; echo $multi?></p>
<p>si 3 produits sont vendus il reste <?php $sous= 10-3; echo $sous?></p>


