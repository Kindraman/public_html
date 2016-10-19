<?php

namespace ResponsiveMenuPro\Routing;
use ResponsiveMenuPro\Routing\Container as Container;

class WpRouting implements Routing {

  protected $container;

  public function __construct(Container $container) {
    $this->container = $container;
  }

  public function route() {
    if(is_admin()):
      add_action('admin_menu', [$this, 'adminPage']);
    else:
      if(isset($_GET['responsive-menu-pro-preview']) && isset($_POST['menu']))
        add_action('template_redirect', [$this->container['front_controller'], 'preview']);
      else
        add_action('template_redirect', [$this->container['front_controller'], 'index']);
    endif;
  }

  public function adminPage() {
    /* Heavily reliant on WordPress so very hard coded */
    if(isset($_POST['responsive_menu_pro_submit'])):
      $method = 'update';
    elseif(isset($_POST['responsive_menu_pro_reset'])):
      $method = 'reset';
    elseif(isset($_POST['responsive_menu_pro_export'])):
      $controller = $this->container['admin_controller'];
      $controller->export();
    elseif(isset($_POST['responsive_menu_pro_add_license_key'])):
      $method = 'addLicense';
    elseif(isset($_POST['responsive_menu_pro_import'])):
      $method = 'import';
    else:
      $method = 'index';
    endif;

    add_menu_page(
      'Responsive Menu Pro',
      'Responsive Menu Pro',
      'manage_options',
      'responsive-menu-pro',
      function() use ($method) {
        $controller = $this->container['admin_controller'];
        switch ($method) :
          case 'update':
            $controller->$method($this->container['default_options'], $_POST['menu']);
            break;
          case 'reset':
            $controller->$method($this->container['default_options']);
            break;
          case 'import':
            $controller->$method($this->container['default_options'], $_FILES['responsive_menu_import_file']);
            break;
          default:
            $controller->$method();
            break;
        endswitch;
      },
      'dashicons-menu');
  }

}
