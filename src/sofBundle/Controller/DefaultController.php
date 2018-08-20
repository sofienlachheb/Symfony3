<?php

namespace sofBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="index")
     */
    public function indexAction()
    {
        return $this->render('sofBundle:Default:index.html.twig');
    }
     /**
     * @Route("/about",name="about")
     */
    public function aboutAction()
    {
        return $this->render('sofBundle:Default:about.html.twig');
    }
     /**
     * @Route("/product",name="product")
     */
    public function productAction()
    {
        return $this->render('sofBundle:Default:product.html.twig');
    }
     /**
     * @Route("/store",name="store")
     */
    public function storeAction()
    {
        return $this->render('sofBundle:Default:store.html.twig');
    }
}
