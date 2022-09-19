 <?php
  require(__PATH__.'/templates/default/navbar.html.php');
  ?>
<body>
      <div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <section class="col-sm-12">
        <div class="p10 intro inscription">
          <h1><mark>Référencer</mark> son site sur le Bottin</h1>
          <p class="">
            Le <strong>référencement de son site</strong> aujourd’hui passe encore et toujours par l’inscription sur des annuaires, afin de déployer sa notoriété sur la toile. De nombreux annuaires vous proposent ces services, mais ils sont souvent basés sur les mêmes scripts, ce qui confère aux moteurs de recherche un air certain de « déjà-vu ». Les administrateurs du <a href="/">guide Web</a> le-bottin.com ont préféré jouer la carte de l’unicité en déployant un script nouveau. <strong>Pour référencer votre site</strong>, merci de bien vouloir répondre aux exigences demandées.
          </p>
                            </div>
        </section>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
          <!-- 2 choix soit action vide (POST sur le chemin en cours) soit remettre /connexion -->
          <form action="" method="POST">
            <div class="panel-heading"><h3 class="panel-title">Connexion</h3></div>
            <div class="panel-body">
                <div class="form-group">

                  <label for="email" class="col-sm-4 control-label">Votre adresse email</label>
                  <div class="col-sm-8">
                    <input name="email" type="text" class="form-control" placeholder="Adresse email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-4 control-label">Mot de passe</label>
                  <div class="col-sm-8">
                    <input name="password" type="password" class="form-control" placeholder="Mot de passe">
                  </div>
                </div>
            </div>
            <div class="panel-footer">
              <?php if (isset($erreur) && $erreur == 2): ?>
                <span class="text-danger">PROBLEME</span>
              <?php endif ?>
              <input type="submit" name="connexion" value="Se Connecter" class="btn btn-primary pull-right">

              <a href="/mot-de-passe-oublie" rel="nofollow" class="btn btn-default pull-left" style="text-decoration: underline;">Mot de passe oublié</a>
            </div>
          </form>
        </div>
            <p class="box-register">Vous n'êtes pas inscrit? <a href="/inscription">Inscrivez-vous ici</a>

   </div>
   </div>
 </div>
  </body>
  </html>
