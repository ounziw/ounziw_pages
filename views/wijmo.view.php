<?php
//        expandDirection: "right",

$accordionjs = <<<JS
$(document).ready(function () {
    $("#accordion").wijaccordion({
        header: "h2",
        selectedIndex: 0,
        event: "click"
    });
});
JS;
\Nos\Nos::main_controller()->addJavascript('http://code.jquery.com/jquery-1.9.1.min.js',false);
\Nos\Nos::main_controller()->addJavascript('http://code.jquery.com/ui/1.10.1/jquery-ui.min.js',false);
\Nos\Nos::main_controller()->addJavascript('http://cdn.wijmo.com/jquery.wijmo-open.all.3.20132.9.min.js',false);
\Nos\Nos::main_controller()->addJavascript('http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20132.9.min.js',false);
\Nos\Nos::main_controller()->addJavascriptInline($accordionjs,false);
\Nos\Nos::main_controller()->addCss('http://cdn.wijmo.com/themes/aristo/jquery-wijmo.css');
\Nos\Nos::main_controller()->addCss('http://cdn.wijmo.com/jquery.wijmo-pro.all.3.20132.9.min.css');



    if (count($pages)) {
        echo '<div id="accordion">';

            foreach ($pages as $p) {
            $anchor = array('text' => e($p->pick('menu_title', 'title')));
            $current == $p['id'] && $anchor['class'] = 'active';
            echo '<h2 class="lvl0">', $p->htmlAnchor($anchor);
            echo '</h2>';
            echo '<div>';
            echo \Nos\Nos::parse_wysiwyg($p->wysiwygs->content);
            echo '</div>';
        }
        echo '</div>';
    }