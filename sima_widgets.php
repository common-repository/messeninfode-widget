<?php
defined('ABSPATH') or die();
/*
Plugin Name: Messeninfo Widget
Plugin URI: http://www.messeninfo.de
Description: Display tradefairs around the world
Version: 1.1.0
Text Domain: imbaa_activity
Author: Sima Media GmbH
Author URI: http://www.messeninfo.de

 */





class messeninfo_widget {

    public function __construct()
    {

        // Registriere den Shortcode
        add_shortcode( 'tradefair_widget', array($this,'tradefair_widget_func') );
        add_shortcode( 'tradefair_cal', array($this,'tradefair_cal_func') );

        add_action('wp_enqueue_scripts',function(){

            wp_register_style( 'widgetService', plugins_url( 'css/widgetService.css',__FILE__ ) );
            wp_register_style( 'widgetService_custom', plugins_url( 'css/widgetService.css',__FILE__ ) );

        });

    }


    public function tradefair_widget_func($args){


        wp_enqueue_style('widgetService');
        wp_enqueue_style('widgetService_custom');

        $argstring = '';
        if($args['style'] == 'tilesAndStripes'){
            $args['style'] = 'list';
        }

        foreach($args as $arg => $value){
            $argstring .= '&'.$arg.'='.$value;
        }

        switch($args['lang']){


            case 'de':
                $host = 'https://www.messeninfo.de';
                break;
            case 'fr':
                $host = 'httsp://www.foiresinfo.fr';
                break;
            case 'es':
                $host = 'https://www.feriasinfo.es';
                break;
            default:
                $host = 'https://www.tradefairdates.com';


        }

        $url = $host.'/usercp/module/widget_output&nostyle=true'.$argstring;
        $html = wp_cache_get(md5($url));


        if(!$html){

            $html = file_get_contents($url);
            wp_cache_set(md5($url),$html,'messeninfo-widget',300);

        }

        return $html;


    }


    public function tradefair_cal_func($args){

        switch($args['lang']){


            case 'de':
                $host = 'https://www.messeninfo.de';
            break;
            case 'fr':
                $host = 'https://www.foiresinfo.fr';
            break;
            case 'es':
                $host = 'https://www.feriasinfo.es';
            break;
            default:
                $host = 'https://www.tradefairdates.com';
        }

        $url = $host.'/usercp/module/widget_output&token='.$args['token'].'&nostyle=true&lang='.$args['lang'];

        $html = wp_cache_get(md5($url));


        if(!$html){

            $html = file_get_contents($url);
            wp_cache_set(md5($url),$html,'messeninfo-widget',300);

        }

        return $html;


    }

}



new messeninfo_widget();




