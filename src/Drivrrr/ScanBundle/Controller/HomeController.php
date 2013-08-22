<?php

namespace Drivrrr\ScanBundle\Controller;

use Drivrrr\ScanBundle\Form\Type\RegistrationType;
use Drivrrr\ScanBundle\Form\Model\Registration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

class HomeController extends Controller
{
    public function welcomeAction()
    {

        return $this->render('ScanBundle:Home:welcome.html.twig');
    }

    public function signInAction()
    {
        return $this->render('ScanBundle:Home:signin.html.twig');
    }

    public function homeAction()
    {
        return $this->render('ScanBundle:Home:home.html.twig');
    }

    public function signupAction()
    {
        $form = $this->createForm(
            new RegistrationType(),
            new Registration()
        );

        return $this->render(
            'ScanBundle:Home:register.html.twig',
            array('form' => $form->createView())
        );

        //return $this->render('ScanBundle:Home:signup.html.twig');
    }

    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $form = $this->createForm(new RegistrationType(), new Registration());

        $form->bind($this->getRequest());

        if ($form->isValid()) {
            $registration = $form->getData();

            $em->persist($registration->getUser());
            $em->flush();

            return $this->redirect('/home');
    }

        return $this->render(
            'ScanBundle:Home:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'ScanBundle:Home:signin.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    public function sendEmailAction(){
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('test.mail.sloth@gmail.com')
            ->setTo('vietnamknight2005@gmail.com')
            //->setBody($this->renderView('ScanBundle:Email:email.txt.twig'));
            ->setBody('this is the email body');
        $this->get('mailer')->send($message);
        return (new Response('Email has been sent'));
    }
}
