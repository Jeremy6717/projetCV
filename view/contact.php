<div class="mainContact">
      <h1>Contact</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.72607051128!2d5.786391915858666!3d49.77240954386752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eaa5eb374cadcf%3A0x2a3a7c548f37eef2!2sRue+de+l&#39;Or+278%2C+6717+Attert%2C+Belgique!5e0!3m2!1sfr!2slu!4v1510581656965" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            </div>
            <div class="champContact">
            <label>Prénom</label>
            <input type="text" placeholder="Prénom" name="firstName"></input>
            </div>
            <div>
            <label>Email</label>
                  <input type="email" placeholder="Email" name="email"></input>
            </div>
            <div class="champContact">
            <label>Message</label>
            <input class ="inputContact" type="text" placeholder="Votre message" name="message"></input>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfEiDgUAAAAABHU8BhhigZdMS2uMUg4Ru5w089Y"></div>
            <button type="submit" value="submit">ENVOYER</button>
            <div class="confirmMessage">
                  <?php if (!empty($successList)) : ?>
                  <div class="alert alert-success">
                  	<?= join('<br>', $successList); ?>
                  </div>
                  <?php endif; ?>
            </div>
      </form>
</div>
