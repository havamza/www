<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Havamza
 * Date: 12/7/12
 * Time: 11:45 PM
 * To change this template use File | Settings | File Templates.
 */
class WHosting extends CWidget
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
        <div class='span4 well well-small hosting'>
            <h4 class='text-info'><?php if ($item['header']) echo $item['header']; else echo 'Header'; ?></h4>
            <ul class='unstyled'>
                <li><p><?php echo $item['price']; ?> в месяц.</p></li>
                <li><?php echo $item['hdd']; ?> HDD</li>
                <li><?php echo $item['ram']; ?> RAM</li>
                <li><?php echo $item['traffic']; ?></li>
                <li><?php echo $item['config']; ?></li>
            </ul>
        </div>
        <?php
        }
    }
}
