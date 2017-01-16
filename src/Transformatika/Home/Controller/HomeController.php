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
            'template' => 'Home.twig',
            'content' => $helloWorld->getHelloWorld()
        ];
    }
}
