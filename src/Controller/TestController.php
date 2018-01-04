<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
    
    /**
     * @Route("/Test2")
     * @param type $param
     * @return Response
     */
    public function test() {
        
        return new Response('<h1>Test 2 ... </h1>');
        
    }
    
}
