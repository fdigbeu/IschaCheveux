<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\RendezVous;
use Ischa\BackOfficeBundle\Form\RendezVousType;

/**
 * RendezVous controller.
 *
 */
class RendezVousController extends Controller
{
    /**
     * Lists all RendezVous entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rendezVouses = $em->getRepository('IschaBackOfficeBundle:RendezVous')->findAll();

        return $this->render('rendezvous/index.html.twig', array(
            'rendezVouses' => $rendezVouses,
        ));
    }

    /**
     * Creates a new RendezVous entity.
     *
     */
    public function newAction(Request $request)
    {
        $rendezVous = new RendezVous();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\RendezVousType', $rendezVous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendezVous);
            $em->flush();

            return $this->redirectToRoute('rendezvous_show', array('id' => $rendezVous->getId()));
        }

        return $this->render('rendezvous/new.html.twig', array(
            'rendezVous' => $rendezVous,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RendezVous entity.
     *
     */
    public function showAction(RendezVous $rendezVous)
    {
        $deleteForm = $this->createDeleteForm($rendezVous);

        return $this->render('rendezvous/show.html.twig', array(
            'rendezVous' => $rendezVous,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RendezVous entity.
     *
     */
    public function editAction(Request $request, RendezVous $rendezVous)
    {
        $deleteForm = $this->createDeleteForm($rendezVous);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\RendezVousType', $rendezVous);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendezVous);
            $em->flush();

            return $this->redirectToRoute('rendezvous_edit', array('id' => $rendezVous->getId()));
        }

        return $this->render('rendezvous/edit.html.twig', array(
            'rendezVous' => $rendezVous,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a RendezVous entity.
     *
     */
    public function deleteAction(Request $request, RendezVous $rendezVous)
    {
        $form = $this->createDeleteForm($rendezVous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rendezVous);
            $em->flush();
        }

        return $this->redirectToRoute('rendezvous_index');
    }

    /**
     * Creates a form to delete a RendezVous entity.
     *
     * @param RendezVous $rendezVous The RendezVous entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RendezVous $rendezVous)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rendezvous_delete', array('id' => $rendezVous->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
