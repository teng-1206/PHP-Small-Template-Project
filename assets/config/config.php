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
            "base" => "http://example.com"
        ),
        "localhost_urls" => array(
            "base" => "http://localhost/FOLDER_NAME/",
            "api" => "http://localhost/FOLDER_NAME/assets/api/",
            "config" => "http://localhost/FOLDER_NAME/assets/config/",
            "css" => "http://localhost/FOLDER_NAME/assets/css/",
            "docs" => "http://localhost/FOLDER_NAME/assets/docs/",
            "img" => "http://localhost/FOLDER_NAME/assets/img/",
            "js" => "http://localhost/FOLDER_NAME/assets/js/",
            "modules" => "http://localhost/FOLDER_NAME/assets/modules/",
            "plugins" => "http://localhost/FOLDER_NAME/assets/plugins/",
            "templates" => "http://localhost/FOLDER_NAME/assets/templates/",
            "uploads" => "http://localhost/FOLDER_NAME/assets/uploads/",
            
        ),
        "paths" => array(
            "resources" => "/path/to/assets",
            "images" => array(
                "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
                "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            )
        )
    );

    include_once("conn.php");

    defined("ASSETS_PATH")
        or define("ASSETS_PATH", realpath(dirname(__FILE__) . '/..//'));
        
    defined("API_PATH")
        or define("API_PATH", ASSETS_PATH . '/api');

    defined("CONFIG_PATH")
        or define("CONFIG_PATH", ASSETS_PATH . '/config');

    defined("CSS_PATH")
        or define("CSS_PATH", ASSETS_PATH . '/css');

    defined("DOCS_PATH")
        or define("DOCS_PATH", ASSETS_PATH . '/docs');
        
    defined("IMG_PATH")
        or define("IMG_PATH", ASSETS_PATH . '/img');

    defined("JS_PATH")
        or define("JS_PATH", ASSETS_PATH . '/js');

    defined("MODULES_PATH")
        or define("MODULES_PATH", ASSETS_PATH . '/modules');

    defined("PLUGINS_PATH")
        or define("PLUGINS_PATH", ASSETS_PATH . '/plugins');   
    
    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", ASSETS_PATH . '/templates');

    defined("UPLOADS_PATH")
        or define("UPLOADS_PATH", ASSETS_PATH . '/uploads');

    session_start();

?>