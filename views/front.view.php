<?php


    $pages = array();
    
    $pages = my_findPages($root_page_id);

    $current = \Nos\Nos::main_controller()->getPage()->page_id;

    $templatedata = \Config::load('ounziw_pages::template', true);
    $view = 'ounziw_pages::simple';
    if ( array_key_exists($templatename, $templatedata['templates']))
    {
        $view = $templatename;
    }
    echo \View::forge($view,array(
        'pages' => $pages,
        'current' => $current,
    ));



function my_findPages($idParent = null)
{
    $where = array(
        'page_parent_id' => $idParent,
        'published'      => 1,
        'page_context'   => \Nos\Nos::main_controller()->getPage()->page_context,
    );

    $pages = \Nos\Page\Model_Page::find('all', array(
        'where'             => $where,
        'order_by'          => array('page_sort' => 'asc')
    ));

    if (count($pages) > 0) {
        return $pages;
    } else {
        return array();
    }
}

