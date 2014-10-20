    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-unveil/jquery.unveil.min.js"></script>
    <script type="text/javascript" src="scripts/imgix.js"></script>
    <script type="text/javascript" src="scripts/init.js"></script>
    <?php if(strpos($_SERVER['PHP_SELF'], 'index.php') == true){ ?>

    <?php } else{
      ?>
      <script>
        $(document).ready(function() {
          $("img").unveil(600, function(){
            $(this).load(function() {
              this.style.opacity = 1;
            });
          });
        });

      </script>
      <?php
    } ?>
  </body>
</html>