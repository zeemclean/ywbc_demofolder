    

    <?php
          
        /*
         
        This scans the directory, and puts all the file names
        into an array
         
        */
         
        $dir = "images/";
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
         
        $newArray = array();
         
        // Now we can foreach through that array to make some HMTL:
        foreach ($files as $img) {
          // This function now checks if it ends in jpg, png or gif:
          if(!is_dir($img) && (strpos($img, '.jpg')>0 || strpos($img, '.png')>0 || strpos($img, '.gif'))) {
            // echo "<img src=\"images/". $img ."\" alt=\"img\" class=\"thumb\" />";
              array_push($newArray, $img);
          }
        }
        
        
        echo json_encode($newArray);


           
    ?>