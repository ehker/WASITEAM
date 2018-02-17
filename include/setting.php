<?php 


	    $static = array( 
            // Css 
            'bootstrapcss' => "static/css/bootstrap.min.css",
            'MyCss'        => "static/css/style.css", 
            'ProfileCss'   => "static/css/profileStyle.css",

            // JavaScrip 
            "jquery"      => "static/js/jquery.js",
            "bootstrapJs" => "static/js/bootstrap.min.js",
            "MyJs"        => "static/js/js.js"

        );

        function _static ($name){
            echo "static/".$name;
        }

?>
