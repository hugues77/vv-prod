<?php
$title = "Connexion utilisateur";
// require_once "layout/navbar.php";
require_once "layout/topbar.php";
?>


<section class="home home_login">
    <div class="form_container">
        <span class="form_close"><i class="fa-solid fa-xmark"></i></span>
        <!-- login form -->
        <div class="form login_form">
            <form action="#">
                <h2>Login Admin</h2>
                <div class="input_box">
                    <input type="email" name="" id="" placeholder="Adresse email" required>
                    <i class="fa-solid fa-envelope email"></i>
                </div>
                <div class="input_box">
                    <input type="password" name="" id="" placeholder="Mot de passe" required>
                    <i class="fa-solid fa-lock password"></i>
                    <span class="pw_hide on-eye"><i class="fa-solid fa-eye-slash"></i></span>
                    <span class="pw_hide off-eye"><i class="fa-solid fa-eye"></i></span>
                </div>
                <div class="option_field">
                    <span class="checkkbox">
                        <input type="checkbox" name="" id="check">
                        <label for="check">Se souvenir de moi</label>
                    </span>
                    <a href="#" class="forgot_pw">Mot de passe oublié</a>
                </div>
                <button type="submit" class="button login_Btn">Connexion</button>
                <div class="help_admin">Besoin de l'aide, contacter <a href="tel:+33651294692">SoftHandy</a></div>
            </form>
        </div>
    </div>
</section>