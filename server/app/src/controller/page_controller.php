<?php

class PageController
{
    public static function default_action()
    {
        self::home();
    }

    public static function home()
    {
        ob_start();
        require(__ROOT__ . '/view/page/home.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function about()
    {
        ob_start();
        require(__ROOT__ . '/view/page/about.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function register()
    {
        ob_start();
        require(__ROOT__ . '/view/page/register.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function login()
    {
        ob_start();
        require(__ROOT__ . '/view/page/login.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function user()
    {
        ob_start();
        require(__ROOT__ . '/view/page/user.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function product()
    {
        ob_start();
        require(__ROOT__ . '/view/page/product.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function news()
    {
        ob_start();
        require(__ROOT__ . '/view/page/news.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }

    public static function admin()
    {
        ob_start();
        require(__ROOT__ . '/view/page/admin.php');
        $content = ob_get_clean();
        require(__ROOT__ . '/view/layout/main.php');
    }
}
