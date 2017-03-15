<?php
   header("HTTP/1.0 404 Not Found");
   $htmlString = '';
   $htmlString .= "<!DOCTYPE html> \n";
   $htmlString .= "<html>\n";
   $htmlString .= "<head>\n";
   $htmlString .= "</head>\n";
   $htmlString .= "<body>\n";
   $htmlString .= "<p>hello world</p>\n";
   $htmlString .= "</body>\n";
   $htmlString .= "</html>\n";
   echo $htmlString;
?>





<body>
    <?php for ($i = 0; i<4; $i++) {
    
    echo "<p>Hello world</p> \n";
    }
    ?>
</body>