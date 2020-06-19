<!DOCTYPE html>
<html>

<?php
include 'Header.php';
?>
<body>
<?php
include 'Menu.php';
?>
<body>
<p><a href="menuePizza">Cliquez ici pour télécharger le menu en format PDF</a></p>
<section>
    <h1>LISTE DES PIZZAS DISPONIBLES</h1>
    <?php
    $lines = file("fichier.txt");
    foreach($lines as $n => $line){
        echo $line . "<br />";
    }
    ?>
    <div class="table-users">
        <table cellspacing="0">
            <tr>
                <th>Présentation</th>
                <th>Pizza</th>
                <th>Ingrédients</th>
                <th>Prix en euro (€)</th>
            </tr>

            <tr>
                <td><img src="https://zupimages.net/up/20/24/usco.jpg" alt="" /></td>
                <td>La Reine</td>
                <td>Sauce tomate, mozzarella, jambon, champignons</td>
                <td>10</td>
            </tr>

            <tr>
                <td><img src="https://zupimages.net/up/20/24/usco.jpg" alt="" /></td>
                <td>La Orientale</td>
                <td>Sauce tomate, mozzarella, oignons, merguez, poivrons mélangés</td>
                <td>14</td>td>

            <tr>
                <td><img src="https://zupimages.net/up/20/24/usco.jpg" alt="" /></td>
                <td>La Vegan Margerita</td>
                <td>Sauce tomate, râpé vegan</td>
                <td>9</td>
            </tr>
            <tr>
                <td><img src="https://zupimages.net/up/20/24/usco.jpg" alt="" /></td>
                <td>La Saumon</td>
                <td>Crème fraîche légère, mozzarella, saumon fumé au bois de hêtre, pommes de terre sautées et oignons, agrémentée d’une sauce crème à l’échalote et à l’aneth</td>
                <td>14</td>
            </tr>
        </table>
    </div>
</section>
<?php
include 'Footer.php';
?>
</body>
</html>
