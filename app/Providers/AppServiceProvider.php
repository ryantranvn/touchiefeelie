<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use App;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!App::runningInConsole()) {
            app('view')->composer(['layouts.admin', 'admin.*'], function ($view) {
                $action = app('request')->route()->getAction();
                $controller = class_basename($action['controller']);
                list($controller, $action) = explode('@', $controller);
                $controller = str_replace('controller', '', strtolower($controller));

                $view->with(compact('controller', 'action'));
            });

            app('view')->composer(['layouts.web', 'web.*'], function ($view) {
                $action = app('request')->route()->getAction();
                $controller = class_basename($action['controller']);
                list($controller, $action) = explode('@', $controller);
                $controller = str_replace('controller', '', strtolower($controller));
                $hasSubnav = true;
                switch ($controller) {
                    case 'touchiefeelieclass':
                        $navItem['url'] = 'lop-hoc-cham-yeu-thuong';
                        $navItem['text'] = 'lớp học "chạm yêu thương"';
                        break;
                    case 'about':
                        $navItem['url'] = 'gioi-thieu';
                        $navItem['text'] = 'Giới thiệu';
                        break;
                    case 'news':
                        $navItem['url'] = 'tin-tuc';
                        $navItem['text'] = 'Tin tức';
                        $hasSubnav = false;
                        break;
                    case 'blog':
                        $navItem['url'] = 'blog';
                        $navItem['text'] = 'Blog';
                        $hasSubnav = false;
                        break;
                    case 'booking':
                        $navItem['url'] = 'dat-hen';
                        $navItem['text'] = 'Đặt hẹn';
                        $hasSubnav = false;
                        break;
                    default:
                        $navItem = [];
                        break;
                }

                $view->with(compact('controller', 'action', 'navItem', 'hasSubnav'));
            });
        }

        DB::listen(function ($query) {
            $contents = "SQL : (".date("Y-m-d h:i:s").")" . $query->sql . "\n";
            $contents .= "Binndings : \n";
            foreach ($query->bindings as $value) {
                $contents .= $value . "\n";
            }

            Storage::prepend('test-sql.txt', $contents);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
