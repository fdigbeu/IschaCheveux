<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\Devise;
use Ischa\BackOfficeBundle\Form\DeviseType;

/**
 * Devise controller.
 *
 */
class DeviseController extends Controller
{
    /**
     * Lists all Devise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $devises = $em->getRepository('IschaBackOfficeBundle:Devise')->findAll();

        return $this->render('devise/index.html.twig', array(
            'devises' => $devises,
        ));
    }

    /**
     * Creates a new Devise entity.
     *
     */
    public function newAction(Request $request)
    {
        $devise = new Devise();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\DeviseType', $devise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($devise);
            $em->flush();

            return $this->redirectToRoute('devise_show', array('id' => $devise->getId()));
        }

        return $this->render('devise/new.html.twig', array(
            'devise' => $devise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Devise entity.
     *
     */
    public function showAction(Devise $devise)
    {
        $deleteForm = $this->createDeleteForm($devise);

        return $this->render('devise/show.html.twig', array(
            'devise' => $devise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Devise entity.
     *
     */
    public function editAction(Request $request, Devise $devise)
    {
        $deleteForm = $this->createDeleteForm($devise);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\DeviseType', $devise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($devise);
            $em->flush();

            return $this->redirectToRoute('devise_edit', array('id' => $devise->getId()));
        }

        return $this->render('devise/edit.html.twig', array(
            'devise' => $devise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Devise entity.
     *
     */
    public function deleteAction(Request $request, Devise $devise)
    {
        $form = $this->createDeleteForm($devise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($devise);
            $em->flush();
        }

        return $this->redirectToRoute('devise_index');
    }

    /**
     * Creates a form to delete a Devise entity.
     *
     * @param Devise $devise The Devise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Devise $devise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('devise_delete', array('id' => $devise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
