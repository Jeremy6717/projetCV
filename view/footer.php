            </main>
            <script src="js/script.js" charset="utf8"></script>
            <footer>
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
                              <article class="copyright">
                                    <p>Jeremy Deumer © 2017 | Tous droits réservés. </p>
                              </article>
                              <article class="socialshare">
                                    <p>Partagez mon cv sur : </p>
                                    <section class="socialLinksFooter">
                                          <a href="<?= $socialLinksPage->facebook->shareUrl ?>">Facebook</a>  <!-- utilisation du gestionnaire de dépendances Composer avec un package social link de Packagist  -->
                                          <a href="<?= $socialLinksPage->Linkedin->shareUrl ?>"> | Linkedin</a>
                                    </section>
                              </article>
                        </aside>
                  </section>
            </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      </script>
      <!-- API GOOGLE MAPS -->
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb5-wzXjChBNp7PLT-SrHDLbFvOlhtoH4&callback=initMap">
      </script>
      <!-- FIN API GOOGLE MAPS -->
      <!-- BOOTSTRAP -->
      <script src="../public/lib/bootstrap/ext/jquery.min.js"></script>
      <script src="../public/lib/bootstrap/ext/popper.min.js"></script>
      <script src="../public/lib/bootstrap/js/bootstrap.js"></script>
      <!-- FIN BOOTSTRAP -->
      <script src="../public/js/scripts.js"></script>
      </body>
</html>
