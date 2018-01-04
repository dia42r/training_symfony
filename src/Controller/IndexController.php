<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of indexController
 *
 * @author abddiarr
 */
class IndexController extends Controller{

    /**
     * @Route("/")
     */
    public function indexAction() {
        
        return $this->render('index.html.twig');
    }
}
