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


<div id="after_submit" align="left">
    <form id="myform" class="cssform" action="" >
        <p>
            <label for="user">Nom :</label>
            <input type="text" id="user" value="" />
        </p>
        <p>
            <label for="emailaddress">Email :</label>
            <input type="text" id="emailaddress" value="" />
        </p>
        <p>
            <label for="comments">Message :</label>
            <textarea id="comments" rows="5" cols="25"></textarea>
        </p>
        <p>
            <label for="comments">Sexe :</label>
            Homme :
            <input type="radio" name="sex" />
            Femme :
            <input type="radio" name="sex" />
        </p>
        <p>
        <div style="margin-left: 150px;">
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Reset" />
        </div>
        </p>
    </form>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.3996242692583!2d3.3360099158975545!3d45.723079979104874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f6e56792948bcf%3A0x38408f23489ee887!2s7%20Rue%20des%20Boucheries%2C%2063160%20Billom!5e0!3m2!1sfr!2sfr!4v1591703841804!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:50px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <p class="copyright-text">
                Copyright &copy; 2020 All Rights Reserved by Pizzaiol'o FRANCE
            </p>
        </div>
    </div>
</footer>
</body>
</html>

