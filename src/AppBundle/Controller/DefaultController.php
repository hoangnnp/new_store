<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/login", name="loginpage")
     */
    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/blog", name="blogpage")
     */
    public function blogAction(Request $request)
    {
        return $this->render('default/blog.html.twig');
    }

    /**
     * @Route("/single", name="singlepage")
     */
    public function singelAction(Request $request)
    {
        return $this->render('default/single.html.twig');
    }

    /**
     * @Route("/checkout", name="checkoutpage")
     */
    public function checkoutAction(Request $request)
    {
        return $this->render('default/checkout.html.twig');
    }

    /**
     * @Route("/contact", name="contactpage")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/products", name="productpage")
     */
    public function productAction(Request $request)
    {
        return $this->render('default/products.html.twig');
    }

    /**
     * @Route("/blog_single", name="blogsinglepage")
     */
    public function blogsingelAction(Request $request)
    {
        return $this->render('default/blog_single.html.twig');
    }

    /**
     * @Route("/register", name="registerpage")
     */
    public function registerAction(Request $request)
    {
        return $this->render('default/register.html.twig');
    }
}
