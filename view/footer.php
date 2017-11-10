      <script src="js/script.js" charset="utf8"></script>
            <section id="footerContent">
                  <nav class="navFooter">
                        <ul>
                              <li><a href="contact.php">Contact</a></li>
                              <li><a href="CGV.php">CGV</a></li>
                              <li><a href="actuality.php">Actualités</a></li>
                              <li><a href="legalMentions.php">Mentions Légales</a></li>
                        </ul>
                  </nav>
                  <aside>
                        <p>Jeremy Deumer © 2017 | Tous droits réservés</p>
                        <p>Partagez mon cv sur : </p>
                        <a href="<?= $socialLinksPage->facebook->shareUrl ?>">Facebook</a>  <!-- utilisation du gestionnaire de dépendances Composer avec un package social link de Packagist  -->
                        <a href="<?= $socialLinksPage->Linkedin->shareUrl ?>"> | Linkedin</a>
                  </aside>
            </section>
      </footer>
</html>
