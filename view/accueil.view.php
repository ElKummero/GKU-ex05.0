<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 10:15
 */
?>
<?php include 'view/part/header.view.php'; ?>
<main>
    <div>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error?></li>
            <?php endforeach;?>
        </ul>
    </div>

    <!--formulaire de saisie de la table de mutiplication-->
    <form action="" method="get">
        <label for="idLivret">Livret</label>
        <input type="text" name="zLivret" id="idLivret" value="<?php echo $livret ?>">
        <button type="submit" name="btnCalculer">Calculer</button>
    </form>
    <hr>


    <!--Calcul et affichage de la table de multiplication-->
    <?php if (is_numeric($livret)):?>
        <?php for ($i=1;$i<=MAXMULT;$i++): ?>
            <p><?php echo $i, " x ", $livret, " = ", $livret*$i;?></p>
        <?php endfor; ?>
    <?php endif;?>
    
</main>
<?php include 'view/part/footer.view.php'; ?>
