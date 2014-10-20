<?php include_once("header.php"); ?>
<div class="main-content">
  <div class="page-section">
    <div class="container">
      <?php
        function print_Images($directory){
              $image_types = array(
                'gif' => 'image/gif',
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
            );
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $images = glob($directory.'*');
            foreach($images as $image){
              if(in_array(finfo_file($finfo, $image), $image_types)){
                echo "<div class='row'><div class='blk-12'><img src='images/spin_load.gif' data-src='" . $image . "' class='img-gallery img-center'></div></div>";
              }
              elseif(is_dir($image)){
                print_Images($image . '/');

              }
            }
        }
        $dir = 'images/Couples/';
        if(is_dir($dir))
        print_Images($dir);
        
      ?>
      </div>
    </div>
  </div>
</div>

<?php include_once("footer.php"); ?>