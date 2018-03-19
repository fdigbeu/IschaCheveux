<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\TypeProduit;
use Ischa\BackOfficeBundle\Form\TypeProduitType;

/**
 * TypeProduit controller.
 *
 */
class TypeProduitController extends Controller
{
    /**
     * Lists all TypeProduit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeProduits = $em->getRepository('IschaBackOfficeBundle:TypeProduit')->findAll();

        return $this->render('typeproduit/index.html.twig', array(
            'typeProduits' => $typeProduits,
        ));
    }

    /**
     * Creates a new TypeProduit entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeProduit = new TypeProduit();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\TypeProduitType', $typeProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeProduit);
            $em->flush();

            return $this->redirectToRoute('typeproduit_show', array('id' => $typeProduit->getId()));
        }

        return $this->render('typeproduit/new.html.twig', array(
            'typeProduit' => $typeProduit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeProduit entity.
     *
     */
    public function showAction(TypeProduit $typeProduit)
    {
        $deleteForm = $this->createDeleteForm($typeProduit);

        return $this->render('typeproduit/show.html.twig', array(
            'typeProduit' => $typeProduit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeProduit entity.
     *
     */
    public function editAction(Request $request, TypeProduit $typeProduit)
    {
        $deleteForm = $this->createDeleteForm($typeProduit);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\TypeProduitType', $typeProduit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeProduit);
            $em->flush();

            return $this->redirectToRoute('typeproduit_edit', array('id' => $typeProduit->getId()));
        }

        return $this->render('typeproduit/edit.html.twig', array(
            'typeProduit' => $typeProduit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeProduit entity.
     *
     */
    public function deleteAction(Request $request, TypeProduit $typeProduit)
    {
        $form = $this->createDeleteForm($typeProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeProduit);
            $em->flush();
        }

        return $this->redirectToRoute('typeproduit_index');
    }

    /**
     * Creates a form to delete a TypeProduit entity.
     *
     * @param TypeProduit $typeProduit The TypeProduit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeProduit $typeProduit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeproduit_delete', array('id' => $typeProduit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
