<?php

namespace ResponsiveMenuPro\Controllers;
use ResponsiveMenuPro\View\View as View;
use ResponsiveMenuPro\Services\OptionService as OptionService;
use ResponsiveMenuPro\ViewModels\Menu as MenuViewModel;
use ResponsiveMenuPro\ViewModels\Button as ButtonViewModel;
use ResponsiveMenuPro\ViewModels\HeaderBar as HeaderBarViewModel;
use ResponsiveMenuPro\Factories\FrontDisplayFactory as DisplayFactory;

class Front {

  public function __construct(OptionService $service, View $view) {
    $this->service = $service;
    $this->view = $view;
  }

	public function index() {

    # Get Latest Options
    $options = $this->service->all();

    # If we want mobile only and we are not on mobile, let's get outta here!
    if($options['mobile_only'] == 'on' && !wp_is_mobile())
      return;

    # This needs refactoring - Martin Fowler HELP!
    $display_factory = new DisplayFactory();
    $display_factory->build($options);

    # Build Our Menu Display
    $menu = new MenuViewModel($options);
    $html = $options['use_header_bar'] == 'on' ? new HeaderBarViewModel($options) : new ButtonViewModel($options);

    # Only load Font Icon Scripts if Needed
    if($options->usesFontIcons())
      wp_enqueue_script('responsive-menu-pro-font-awesome', 'https://use.fontawesome.com/b6bedb3084.js', null, null);

    # Only render if we don't have shortcodes turned on
    if($options['shortcode'] == 'off'):
      $options['use_header_bar'] == 'on'
        ? $this->view->render('header_bar', ['options' => $options, 'header' => $html->getHtml()])
        : $this->view->render('button', ['options' => $options, 'button' => $html->getHtml()]);
      $this->view->render('menu', ['options' => $options, 'menu' => $menu->getHtml()]);

    else:
      add_shortcode('responsive_menu_pro', function($atts) use($options, $html, $menu) {

        if($atts)
          array_walk($atts, function($a, $b) use ($options) { $options[$b] = $a; });

        $html = $options['use_header_bar'] == 'on'
                ? $this->view->make('header_bar', ['options' => $options, 'header' => $html->getHtml()])
                : $this->view->make('button', ['options' => $options, 'button' => $html->getHtml()]);

        return $html . $this->view->make('menu', ['options' => $options, 'menu' => $menu->getHtml()]);

      });
    endif;

	}

  public function preview() {
    /*
    Override values that would not work with previewing */
    $_POST['menu']['external_files'] = 'off';
    $options = $this->service->buildFromPostArray($_POST['menu']);

    # This needs refactoring - Martin Fowler HELP!
    $display_factory = new DisplayFactory();
    $display_factory->build($options);

    # Build Our Menu Display
    $menu = new MenuViewModel($options);
    $html = $options['use_header_bar'] == 'on' ? new HeaderBarViewModel($options) : new ButtonViewModel($options);

    # Only load Font Icon Scripts if Needed
    if($options->usesFontIcons())
      wp_enqueue_script('responsive-menu-pro-font-awesome', 'https://use.fontawesome.com/b6bedb3084.js', null, null);

    # Only render if we don't have shortcodes turned on
    if($options['shortcode'] == 'off'):
      $options['use_header_bar'] == 'on'
        ? $this->view->render('header_bar', ['options' => $options, 'header' => $html->getHtml()])
        : $this->view->render('button', ['options' => $options, 'button' => $html->getHtml()]);
      $this->view->render('menu', ['options' => $options, 'menu' => $menu->getHtml()]);
    else:
      add_shortcode('responsive_menu_pro', function($atts) use($options, $html, $menu) {

        if($atts)
          array_walk($atts, function($a, $b) use ($options) { $options[$b] = $a; });

        $html = $options['use_header_bar'] == 'on'
                ? $this->view->make('header_bar', ['options' => $options, 'header' => $html->getHtml()])
                : $this->view->make('button', ['options' => $options, 'button' => $html->getHtml()]);

        return $html . $this->view->make('menu', ['options' => $options, 'menu' => $menu->getHtml()]);

      });
    endif;

  }

}
