<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Havamza
 * Date: 12/9/12
 * Time: 5:18 AM
 * To change this template use File | Settings | File Templates.
 */
class WStudioPreview extends CWidget
{
    public $items = array();

    public function run()
    {
        $this->renderBlock($this->items);
    }

    public function renderBlock($items)
    {
        foreach ($items as $item) {
            ?>
                    <?php echo CHtml::image('/images/preview/' . $item['image'] . '.png'); ?>
        <?php
        }
    }
}
