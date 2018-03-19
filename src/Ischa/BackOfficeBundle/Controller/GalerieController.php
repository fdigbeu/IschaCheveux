<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\Galerie;
use Ischa\BackOfficeBundle\Form\GalerieType;

/**
 * Galerie controller.
 *
 */
class GalerieController extends Controller
{
    /**
     * Lists all Galerie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $galeries = $em->getRepository('IschaBackOfficeBundle:Galerie')->findAll();

        return $this->render('galerie/index.html.twig', array(
            'galeries' => $galeries,
        ));
    }

    /**
     * Creates a new Galerie entity.
     *
     */
    public function newAction(Request $request)
    {
        $galerie = new Galerie();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\GalerieType', $galerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($galerie);
            $em->flush();

            return $this->redirectToRoute('galerie_show', array('id' => $galerie->getId()));
        }

        return $this->render('galerie/new.html.twig', array(
            'galerie' => $galerie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Galerie entity.
     *
     */
    public function showAction(Galerie $galerie)
    {
        $deleteForm = $this->createDeleteForm($galerie);

        return $this->render('galerie/show.html.twig', array(
            'galerie' => $galerie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Galerie entity.
     *
     */
    public function editAction(Request $request, Galerie $galerie)
    {
        $deleteForm = $this->createDeleteForm($galerie);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\GalerieType', $galerie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($galerie);
            $em->flush();

            return $this->redirectToRoute('galerie_edit', array('id' => $galerie->getId()));
        }

        return $this->render('galerie/edit.html.twig', array(
            'galerie' => $galerie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Galerie entity.
     *
     */
    public function deleteAction(Request $request, Galerie $galerie)
    {
        $form = $this->createDeleteForm($galerie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($galerie);
            $em->flush();
        }

        return $this->redirectToRoute('galerie_index');
    }

    /**
     * Creates a form to delete a Galerie entity.
     *
     * @param Galerie $galerie The Galerie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Galerie $galerie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('galerie_delete', array('id' => $galerie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
