   <footer class="footer flex__center">

       <div class="footer__top flex__center">
           <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer__bar'
            ));
            ?>


           <div class="social__media__links flex__center">
               <a href="https://github.com/MarceliBil" target="_blank" class="flex__center">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/github.svg" rel="nofollow noopener noreferrer">
               </a>

               <a href="https://github.com/MarceliBil" target="_blank" class="flex__center">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" rel="nofollow noopener noreferrer">
               </a>

               <a href="https://github.com/MarceliBil" target="_blank" class="flex__center">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" rel="nofollow noopener noreferrer">
               </a>
           </div>
       </div>

       <div class="copyright">
           <p>&copy;<?php echo date("Y"); ?> Marceli Bil. All rights reserved.</p>
       </div>

   </footer>
   <?php wp_footer(); ?>

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   <script>
       AOS.init();
   </script>

   </body>

   </html>