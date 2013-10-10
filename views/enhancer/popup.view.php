<div class="enhancer_root_page_id">
<p style="margin-bottom: 0.5em;">
    <?= __('Choose Template:') ?>
    <?php 
    $templatedata = \Config::load('ounziw_pages::template', true);
    $template = \Arr::get($enhancer_args, 'templatename', 'simple');
    echo \Fuel\Core\Form::select('templatename', $template, $templatedata['templates']);
    ?>
</p>
<p style="margin-bottom: 0.5em;">
    <?= __('Choose Root Page:') ?>
</p>

    <?= \Nos\Page\Renderer_Selector::renderer(array(
        'input_name' => 'root_page_id',
        'selected' => array(
            'id' => \Arr::get($enhancer_args, 'root_page_id', null),
        ),
        'treeOptions' => array(
            'context' => \Arr::get($enhancer_args, 'nosContext', \Nos\Tools_Context::defaultContext()),
        ),
    )); ?>
</div>
