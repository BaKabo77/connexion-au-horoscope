<html>
    <body>
    <form method="post" action="index.php?action=reponse">
        <select name="horoscope" size="1">
            <?php foreach($signe as $cle => $valeur):?>
                <option value="<?= $cle?>"><?= $cle?> </option>
                <?php endforeach ?>
            </select>
            <input type="submit" value="envoyer">
            
    </body>
</html>