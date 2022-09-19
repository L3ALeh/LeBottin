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

  <div class="col-md-6">
    <div class="panel panel-default">
      <form style="text-align:center;" autocomplete="off" method="post"  class="form-horizontal">
        <div class="panel-heading">
          <h3 class="panel-title">Inscription</h3>
        </div>



        <div class="form-group">
            <label for="last_name" class="col-sm-4 control-label">Nom : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="last_name" type="text" class="form-control" placeholder="Votre nom :" required>
            </div>
          </div>

          <div class="form-group">
            <label for="first_name" class="col-sm-4 control-label"> Prénom : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="first_name" type="text" class="form-control" placeholder="Votre prénom" required>
            </div>
          </div>

          <div class="form-group">
            <label for="gender" class="col-sm-4 control-label">Vous êtes : </label>
            <div class="col-sm-8">
              <select name="gender" id="" class="form-control" required>
                <?php foreach ($tab_genders as $key => $value): ?>
                  <option value="<?=$key?>"><?=$value?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

        <div class="form-group">
            <label for="address_1" class="col-sm-4 control-label">Adresse 1 : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="address_1" type="text" class="form-control" placeholder="Adresse 1" required>
            </div>
          </div>

          <div class="form-group">
            <label for="address_2" class="col-sm-4 control-label">Adresse 2 : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="address_2" type="text" class="form-control" placeholder="Adresse 2 (Facultative)" >
            </div>
          </div>

          <div class="form-group">
            <label for="city" class="col-sm-4 control-label">Ville : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="city" type="text" class="form-control" placeholder="Ville" required>
            </div>
          </div>

          <div class="form-group">
            <label for="zipcode" class="col-sm-4 control-label">Code postal : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="zipcode" type="number" class="form-control" placeholder="Votre code postal" required>
            </div>
          </div>

          <div class="form-group">
            <label for="domain_name" class="col-sm-4 control-label">Nom de domaine : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="domain_name" type="text" class="form-control" placeholder="Votre nom de domaine" required>
            </div>
          </div>


          <div class="form-group">
            <label for="firm_name" class="col-sm-4 control-label">Nom de l'entreprise : </label>
            <div class="col-sm-8">
              <input autocomplete="off" name="firm_name" type="text" class="form-control" placeholder="Nom de votre entrepise" required>
            </div>
          </div>


          <div class="form-group">
            <label for="phone_number" class="col-sm-4 control-label"> Numéro de téléphone :</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="phone_number" type="tel" class="form-control" placeholder="Saisissez votre numéro de téléphone" required>
            </div>
          </div>

        <div class="panel-body">
          <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Votre adresse email</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="email" type="email" class="form-control" placeholder="Adresse email" required>
            </div>
          </div>

          <div class="form-group">
            <label for="confemail" class="col-sm-4 control-label">Confirmer adresse email</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="cemail" type="email" class="form-control" placeholder="Confirmer votre adresse email" required>
            </div>
          </div>


          <div class="form-group">
            <label for="country_id" class="col-sm-4 control-label">Pays</label>
            <div class="col-sm-8">
              <select name="country_id" id="" class="form-control" required>
                <?php foreach ($tab_countries as $key => $value): ?>
                  <option value="<?=$key?>"><?=$value?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Mot de passe</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="password" type="password" class="form-control" placeholder="Mot de passe" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Confirmer mot de passe</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="cpassword" type="password" class="form-control" placeholder="Confirmer mot de passe" required>
            </div>
          </div>
<!---
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">AntiRobot</label>
            <div class="col-sm-8 text-left">
              <div>sept fois huit = ? <input type="text" style="width:40px" name="check" value=""></div>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Mon parrain</label>
            <div class="col-sm-8">
              <input autocomplete="off" name="parrain" value="0" type="text" class="form-control" placeholder="Parrain">
            </div>
          </div>
        </div>
      -->
        <div class="panel-footer">
          <input type="submit" name="inscription" value="Inscription" class="btn btn-danger">
        </div>
      </form>
    </div>
  </div>
</div>
<p class="box-register">Déjà inscrit? <a href="/connexion">Connectez-vous ici</a>
