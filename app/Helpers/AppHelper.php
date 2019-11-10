<?php
namespace App\Helpers;

class AppHelper
{
    protected static $controller;
    protected static $action;

    public function __construct() {
    }
    public static function controllerName() {
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list(self::$controller, self::$action) = explode('@', $controllerAction);

        return str_replace('controller', '', strtolower(self::$controller));
    }
    public static function actionName() {
        $routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list(self::$controller, self::$action) = explode('@', $controllerAction);

        return str_replace('controller', '', strtolower(self::$action));
    }

    public static function getShortBranchName($branch) {
        if (str_contains($branch, 'Thủ Đức')) {
            return "Thủ Đức";
        }
        return "Quận 3";
    }

}