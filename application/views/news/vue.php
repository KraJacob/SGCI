<h1>Bonjour les gars et bienvenus sur ma page d'accueil</h1>
<p>
 Ce ci est mon premier paragraphe avec CodeIgniter
</p>
<p> Votre adresse pseudo est : <?php echo $pseudo ?></p>
<p> Votre adresse mail est : <?php echo $mail ?></p>
<p>
  <?php if($en_ligne): ?>

    Vous êtes en ligne.

<?php else: ?>

    Vous n'êtes pas en ligne.

<?php endif; ?>
</p>