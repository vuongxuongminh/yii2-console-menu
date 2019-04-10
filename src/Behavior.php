<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-console-menu
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\consoleMenu;

use yii\base\Behavior as BaseBehavior;

/**
 * Class Behavior
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class Behavior extends BaseBehavior
{
    /**
     * Return an object Menu use to build pretty console menu
     *
     * @param string $title of menu
     * @param array $options config for menu
     * @return Menu instance
     */
    public function menu(string $title = '', array $options = [])
    {
        return new Menu($title, $options);
    }

}
