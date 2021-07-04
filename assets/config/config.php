<?php

    $config = array(
        "db" => array(
            "db1" => array(
                "dbname" => "database1",
                "username" => "dbUser",
                "password" => "pa$$",
                "host" => "localhost"
            ),
            "db2" => array(
                "dbname" => "database2",
                "username" => "dbUser",
                "password" => "pa$$",
                "host" => "localhost"
            )
        ),
        "urls" => array(
            "baseUrl" => "http://example.com"
        ),
        "paths" => array(
            "resources" => "/path/to/assets",
            "images" => array(
                "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
                "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            )
        )
    );

    /**
     * * Database Connection
     */
    include_once("conn.php");
    
    /**
     * Creating constants for heavily used paths makes things a lot easier.
     * ex. require_once(LIBRARY_PATH . "Paginator.php")
     */
          
    defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/../library'));
        
    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/../templates'));

    defined("CSS_PATH")
        or define("CSS_PATH", LIBRARY_PATH . '/css');

    defined("DOCS_PATH")
        or define("DOCS_PATH", LIBRARY_PATH . '/docs');
        
    defined("IMG_PATH")
        or define("IMG_PATH", LIBRARY_PATH . '/img');

    defined("JS_PATH")
        or define("JS_PATH", LIBRARY_PATH . '/js');

    defined("MODULES_PATH")
        or define("MODULES_PATH", LIBRARY_PATH . '/modules');
     
?>