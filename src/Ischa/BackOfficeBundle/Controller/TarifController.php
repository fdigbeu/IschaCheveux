<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\Tarif;
use Ischa\BackOfficeBundle\Form\TarifType;

/**
 * Tarif controller.
 *
 */
class TarifController extends Controller
{
    /**
     * Lists all Tarif entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarifs = $em->getRepository('IschaBackOfficeBundle:Tarif')->findAll();

        return $this->render('tarif/index.html.twig', array(
            'tarifs' => $tarifs,
        ));
    }

    /**
     * Creates a new Tarif entity.
     *
     */
    public function newAction(Request $request)
    {
        $tarif = new Tarif();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\TarifType', $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('tarif_show', array('id' => $tarif->getId()));
        }

        return $this->render('tarif/new.html.twig', array(
            'tarif' => $tarif,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarif entity.
     *
     */
    public function showAction(Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);

        return $this->render('tarif/show.html.twig', array(
            'tarif' => $tarif,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tarif entity.
     *
     */
    public function editAction(Request $request, Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\TarifType', $tarif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarif);
            $em->flush();

            return $this->redirectToRoute('tarif_edit', array('id' => $tarif->getId()));
        }

        return $this->render('tarif/edit.html.twig', array(
            'tarif' => $tarif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tarif entity.
     *
     */
    public function deleteAction(Request $request, Tarif $tarif)
    {
        $form = $this->createDeleteForm($tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarif);
            $em->flush();
        }

        return $this->redirectToRoute('tarif_index');
    }

    /**
     * Creates a form to delete a Tarif entity.
     *
     * @param Tarif $tarif The Tarif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarif $tarif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarif_delete', array('id' => $tarif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
