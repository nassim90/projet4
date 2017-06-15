<?php

namespace LA\FormBundle\Controller;

use LA\FormBundle\Entity\Reservation;
use LA\FormBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LAFormBundle:Default:index.html.twig');
    }


    public function formAction(Request $request)
    {
        $reservation = new Reservation();
        $form   = $this->get('form.factory')->create(ReservationType::class, $reservation);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('');

            return $this->redirectToRoute('la_form_form', array('id' => $reservation->getId()));
        }

        return $this->render('LAFormBundle:default:form.html.twig', array(
            'form' => $form->createView(),
        ));
    }



}
