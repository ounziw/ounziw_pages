<?php
// default simple template
// do not delete this template.
    if (count($pages)) {
        echo '<ul>';
        foreach ($pages as $p) {
            $anchor = array('text' => e($p->pick('menu_title', 'title')));
            echo '<li>', $p->htmlAnchor($anchor);
            echo '</li>';
       }
        echo '</ul>';
    }
