<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-console-menu
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\test\unit\consoleMenu;

use yii\console\Controller as BaseController;

use vxm\consoleMenu\Behavior;
use vxm\consoleMenu\Menu;

/**
 * Class TestController
 *
 * @method Menu menu(string $title = '', array $options = [])
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class TestController extends BaseController
{

    public function actionBehaviorAttachedTest()
    {
        return $this->getBehavior('__menu') instanceof Behavior;
    }

    public function actionMenuTest()
    {
        $menu = $this->menu('test');

        return $menu instanceof Menu;
    }

}
