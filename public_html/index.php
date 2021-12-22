
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "<a href=http://$output/Home/>Click here</a>";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong<br>Refer to  Github Repository <br><a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme</a></p>';
              echo '<p>Or raise a issue at <br> <a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku/issues</a></p></br>';
          }
          ?>
   
 
