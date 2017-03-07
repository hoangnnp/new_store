<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;



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
        $helper = $this->get('security.authentication_utils');

        return $this->render('default/login.html.twig',
            array(
                'last_username'=>$helper->getLastUsername(),
                'error'=>$helper->getLastAuthenticationError(),
            )
            );
    }

    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout", name="logoutpage")
     */
    public function logoutAction()
    {

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
        {
            // Create a new blank user and process the form
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // Encode the new users password
                $encoder = $this->get('security.password_encoder');
                $password = $encoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);

                // Set their role
                $user->setRole('ROLE_USER');

                // Save
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('loginpage');
            }

            return $this->render('default/register.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }
}
