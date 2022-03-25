<?php

use Phalcon\Mvc\Controller;


class ConfigController extends Controller
{
    /**
     * index function to print config variables...
     *
     * @return void
     */
    public function indexAction()
    {
        $config = $this->config->app;

        $this->view->name = $config->name;
        $this->view->version = $config->version;
    }
    public function loaderAction()
    {
        $check = new \App\Controller\Check();
        if ($check->check()) {
            return '<h1>It works!!!</h1>';
        } else {
            return '<h1>still not worked</h1>';
        }
    }
}
