<?php
namespace Transformatika\Home\Test;

use Transformatika\Home\Controller\HomeController;

class HomeControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndexAction()
    {
        $home = new HomeController();
        $data = $home->indexAction();
        $viewPath = $home->view->getViewPath();

        $this->assertArrayHasKey('template', $data);
        $this->assertFileExists($viewPath.DIRECTORY_SEPARATOR.$data['template']);
    }
}
