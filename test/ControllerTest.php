<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-console-menu
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\test\unit\consoleMenu;

/**
 * Class BehaviorAttachedTest
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class ControllerTest extends TestCase
{

    public function testBehaviorAttached()
    {
        $controller = $this->mockController();
        $this->assertTrue($controller->run('behavior-attached-test'));
    }

    /**
     * @depends testBehaviorAttached
     */
    public function testMenu()
    {
        $controller = $this->mockController();
        $controller->run('menu');
        $this->assertTrue($controller->run('menu-test'));
    }

}
