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
}
