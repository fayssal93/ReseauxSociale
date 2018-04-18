<?php $title = "Inscription"; ?>

<?php include ("partials/_header.php"); ?>



<div id="main-content">

    <div class="container">
        <h1 class="text-center"> Devenez dès à présent membre de notre communauté </h1>
        <form methode ="post" class="col-md-6 offset-3">
            <!-- Nom -->
            <div class="form-group">
                <label class="custom-control-label" for="name"> Nom :</label>
                <input type="text" class="form-control" id="name" name="name" required="required"/>
            </div>
            <!-- Pseudo -->
            <div class="form-group">
                <label class="custom-control-label" for="pseudo"> Pseudo:</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" required="required"/>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label class="custom-control-label" for="email"> Email :</label>
                <input type="email" class="form-control" id="email" name="email" required="required"/>
            </div>
            <!-- passe word-->
            <div class="form-group">
                <label class="custom-control-label" for="password"> Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required="required"/>
            </div>
            <!-- passe word confirmation-->
            <div class="form-group">
                <label class="custom-control-label" for="password_confirm"> Confimer votre mot de passe :</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required"/>
            </div>

            <input type="submit" class="btn btn-primary" value="envoyer" name="register"/>


        </form>


    </div>

</div>


<?php include ("partials/_footer.php"); ?>
