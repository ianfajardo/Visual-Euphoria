    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="bower_components/infinite-scroll/jquery.infinitescroll.min.js"></script>
    <script type="text/javascript" src="bower_components/isotope/js/isotope.js"></script>
    <script type="text/javascript" src="scripts/init.js"></script>
    <?php if(strpos($_SERVER['PHP_SELF'], 'index.php') == true){ ?>
      <script>
        $(function(){

          var $container = $('#gallery');
        
          $container.isotope({
            itemSelector : '.element'
          });
          
          $container.infinitescroll({
            navSelector  : '#page_nav',    // selector for the paged navigation 
            nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
            itemSelector : '.element',     // selector for all items you'll retrieve
            loading: {
                finishedMsg: 'No more pages to load.',
                img: 'http://i.imgur.com/qkKy8.gif'
              }
            },
            // call Isotope as a callback
            function( newElements ) {
              $container.isotope( 'appended', $( newElements ) ); 
            }
          );
          
        
        });
      </script>
    <?php } ?>
  </body>
</html>