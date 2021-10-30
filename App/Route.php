<?php
//lógica.
namespace App;

//importar namespace.
use MF\Init\Bootstrap;

class Route extends Bootstrap {

  protected function initRoutes() {
    $routes ['home'] = array(
      'route' => '/',
      'controller' => 'indexController',
      'action' => 'index'
    );

    $routes ['sobre_nos'] = array(
      'route' => '/sobre_nos',
      'controller' => 'indexController',
      'action' => 'sobreNos'
    );

    $routes ['contato'] = array(
      'route' => '/contato',
      'controller' => 'indexController',
      'action' => 'Contato'
    );

    $this->setRoutes($routes);

  }
}

?>