<?php
namespace Transformatika\Home\Controller;

use Transformatika\MVC\Controller;
use Transformatika\Home\Model\HelloWorld;

class HomeController extends Controller
{
    public function indexAction()
    {
        $helloWorld = new HelloWorld();
        return [
            'headers' => ['Content-Type' => 'text/html'],
            'template' => 'Home.php',
            'content' => $helloWorld->getHelloWorld()
        ];
    }

    public function viewAction()
    {
        $id = $this->request->getAttribute('id');
        return [
            'headers' => ['Content-Type' => 'application/json'],
            'id' => $id
        ];
    }
}
