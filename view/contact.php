<div class="mainContact">
      <h1>Contact</h1>
      <!-- API GOOGLE MAPS -->
      <div id="map"></div>
          <script>
            function initMap() {
              var Nothomb = {lat: 49.772407, lng: 5.788580};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: Nothomb
              });
              var marker = new google.maps.Marker({
                position: Nothomb,
                map: map
              });
            }
          </script>
      <!-- FIN API GOOGLE MAPS -->

      <h2>Coordonnées de contact</h2>

      <div class="contactInfos">
            <p>Téléphone: 0477823158 / 063226290 </p>
            <p>Adresse: 278 rue de l'or Nothomb, 6717 Attert, Belgique</p>
            <p>Email: jeremydeumer@gmail.com</p>
      </div>
      <br>
      <form action="" method="post" enctype="multipart/form-data" class="contactForm">
            <div class="champContact">
            <label>Nom</label>
            <input type="text" placeholder="Nom" name="lastName"></input>
            <?php if (!empty($failedLastName)) : ?>
                  <div class="alert-failed">
                        <?= join('<br>', $failedLastName); ?>
                  </div>
            <?php endif; ?>
            </div>
            <div class="champContact">
            <label>Prénom</label>
            <input type="text" placeholder="Prénom" name="firstName"></input>
            <?php if (!empty($failedFisrtName)) : ?>
                  <div class="alert-failed">
                        <?= join('<br>', $failedLastName); ?>
                  </div>
            <?php endif; ?>
            </div>
            <div>
            <label>Email</label>
            <input type="email" placeholder="Email" name="email"></input>
            <?php if (!empty($failedEmail)) : ?>
                  <div class="alert-failed">
                        <?= join('<br>', $failedEmail); ?>
                  </div>
            <?php endif; ?>
            </div>
            <div class="champContact">
            <label>Message</label>
            <input class ="inputContact" type="text" placeholder="Votre message" name="message"></input>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfEiDgUAAAAABHU8BhhigZdMS2uMUg4Ru5w089Y"></div>
            <button type="submit" value="submit">ENVOYER</button>
                  <?php if (!empty($successList)) : ?>
                  <div class="alert-success">
                  	<?= join('<br>', $successList); ?>
                  </div>
                  <?php endif; ?>
      </form>
</div>
