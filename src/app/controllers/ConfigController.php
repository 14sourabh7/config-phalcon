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
        $config = $this->di->getConfig();

        $this->view->name = $config->get('app')->get('name');
        $this->view->version = $config->get('app')->get('version');
    }
}
