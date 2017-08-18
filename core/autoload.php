<?php
spl_autoload_register('Autoloader::base');

class Autoloader{

    public static function base($class){

        $base_url = $_SERVER['DOCUMENT_ROOT'].'hng/';

		$root = $base_url.'/';

		$model = $base_url.'/models/';

		$controller = $base_url.'/controllers/';

		$ext = '.php';

		if(file_exists($root.$class.$ext))
			include_once $root.$class.$ext;

		elseif(file_exists($model.$class.$ext))
			include_once $model.$class.$ext;

		elseif(file_exists($controller.$class.$ext))
			include_once $controller.$class.$ext;
    }
}
?>