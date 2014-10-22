    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="scripts/init.js"></script>
    <?php if(strpos($_SERVER['PHP_SELF'], 'index.php') == true){ ?>

    <?php } else{
      ?>
      <script>
        $(function() {
            $("img.lazy").lazyload({
              threshold : 400,
              effect:"fadeIn"
            });
        });

      </script>
      <?php
    } ?>
  </body>
</html>