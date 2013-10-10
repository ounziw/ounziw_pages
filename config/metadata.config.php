<?php
/**
 * Pages for NOVIUS OS
 *
 * @copyright  2013 Fumito MIZUNO
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://ounziw.com
 */

return array(
    'name'    => __('Pages'),
    'version' => '0.1',
    'provider' => array(
        'name' => 'Fumito MIZUNO',
    ),
    'namespace' => "OunziwPages",
    'permission' => array(
    ),
    'icons' => array(
        64 => 'static/apps/ounziw_pages/img/64/icon.png',
        32 => 'static/apps/ounziw_pages/img/32/icon.png',
        16 => 'static/apps/ounziw_pages/img/16/icon.png',
    ),
    // Enhancer configuration sample
    'enhancers' => array(
        'pages' => array( 
            'title' => __('Pages'),
            'desc'  => '',
            'enhancer' => 'ounziw_pages/front/main',
            'dialog' => array(
                'contentUrl' => 'admin/ounziw_pages/enhancer/popup',
                'width' => 400,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
);