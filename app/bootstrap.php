<?php
  require_once 'config/config.php';
  require_once 'helpers/url_helper.php';
  require_once 'helpers/session_helper.php';

  spl_autoload_register(function($class_name){
    require_once 'libraries/' . $class_name . '.php';

  });
