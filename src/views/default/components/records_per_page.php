<span>Records per page</span>
<?php
/** @var Nayjest\Grids\Components\RecordsPerPage $component */
echo \Form::select(
    $component->getInputName(),
    $component->getVariants(),
    $component->getValue(),
    [
        'class' => "form-control input-sm",
        'style' => 'display: inline; width: 80px; margin-right: 10px'
    ]
);
?>