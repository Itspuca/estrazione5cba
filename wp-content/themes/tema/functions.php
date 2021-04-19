<?php
function mytheme_styles_scripts(){
wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/style.css?'.time(), array(), '1.0.0', 'all');
wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/js/puca.js?'.time(), array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'mytheme_styles_scripts');
add_theme_support('menus');

function add_li_class($classes, $item, $args) {
  if (isset($args->add_li_class)) {
    $classes = array($args->add_li_class);
  } return $classes;
}

add_filter("nav_menu_css_class", "add_li_class", 1, 3);

    // function generaStudenti($atts, $content = null) {
    //
    //     extract(shortcode_atts(array(
    //         'class' => '',
    //         'id' => '',
    //     ), $atts));
    //     $studenti = new WP_Query(array(
    //       "post_type" => "studenti",
    //       "orderby" => "title",
    //       "order" => "ASC"
    //     ));
    //     $result = "<table class='table table-bordered table-striped'><tr><td><h2>Registro</h2></tr></td>";
    //     while($studenti->have_posts()) {
    //       $studenti->the_post();
    //       $result .= "<tr><td>" . get_the_title() . "</td></tr> ";
    //     }
    //     return $result . "</table>";
    // }
    //
    //   add_shortcode('studenti', 'generaStudenti');

      function generaInterrogazioni($atts, $content = null) {

          extract( shortcode_atts( array(
              'class' => '',
              'id' => '',
          ), $atts ) );
          $interrogazioni = new WP_Query(array(
            "post_type" => "interrogazione",
            "orderby" => "title",
            "order" => "ASC"
          ));
          $result = "";
          while($interrogazioni->have_posts()) {
            $result .= "<table class='table table-bordered'>";
            $interrogazioni->the_post();
            $studenti_interrogati = get_field("studenti");
            $estrazioni = get_field("estrazione");
            $result .= "<tr><td><h3>" . get_the_title() . "</h3><table class='table table-bordered table-striped'>";
            foreach($estrazioni as $estratto) {
              if(is_array($studenti_interrogati) && in_array($estratto->ID, $studenti_interrogati)) {
                $result .= "<tr><td style='font-style: italic'><del>" . $estratto->post_title . "</del></td></tr>";
              } else {
                $result .= "<tr><td>" . $estratto->post_title . "</td></tr>";
              }
            }
            $result .= "</table></td></tr></table>";
          }
          return $result;
      }

        add_shortcode('interrogazioni', 'generaInterrogazioni');
