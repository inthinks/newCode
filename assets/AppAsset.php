<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-theme.css',
        'css/elegant-icons-style.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/jquery-jvectormap-1.2.2.css',
        'css/fullcalendar.css',
        'css/widgets.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/xcharts.min.css',
        'css/jquery-ui-1.10.4.min.css',
    ];
    public $js = [
    'js/jquery.js',
    'js/jquery-ui-1.10.4.min.js',
    'js/jquery-1.8.3.min.js',
    'js/jquery-ui-1.9.2.custom.min.js',
    'js/bootstrap.min.js',
    'js/jquery.scrollTo.min.js',
    'js/jquery.nicescroll.js',
    'js/jquery.sparkline.js',
    'js/owl.carousel.js',
    'js/fullcalendar.min.js',
    'js/calendar-custom.js',
    'js/jquery.rateit.min.js',
    'js/jquery.customSelect.min.js',
    'js/scripts.js',
    'js/sparkline-chart.js',
    'js/easy-pie-chart.js',
    'js/jquery-jvectormap-1.2.2.min.js',
    'js/jquery-jvectormap-world-mill-en.js',
    'js/xcharts.min.js',
    'js/jquery.autosize.min.js',
    'js/jquery.placeholder.min.js',
    'js/gdp-data.js',
    'js/morris.min.js',
    'js/sparklines.js',
    'js/charts.js',
    'js/jquery.slimscroll.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
