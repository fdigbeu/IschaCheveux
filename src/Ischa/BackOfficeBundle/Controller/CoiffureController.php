<?php

namespace Ischa\BackOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ischa\BackOfficeBundle\Entity\Coiffure;
use Ischa\BackOfficeBundle\Form\CoiffureType;

/**
 * Coiffure controller.
 *
 */
class CoiffureController extends Controller
{
    /**
     * Lists all Coiffure entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $coiffures = $em->getRepository('IschaBackOfficeBundle:Coiffure')->findAll();

        return $this->render('coiffure/index.html.twig', array(
            'coiffures' => $coiffures,
        ));
    }

    /**
     * Creates a new Coiffure entity.
     *
     */
    public function newAction(Request $request)
    {
        $coiffure = new Coiffure();
        $form = $this->createForm('Ischa\BackOfficeBundle\Form\CoiffureType', $coiffure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coiffure);
            $em->flush();

            return $this->redirectToRoute('coiffure_show', array('id' => $coiffure->getId()));
        }

        return $this->render('coiffure/new.html.twig', array(
            'coiffure' => $coiffure,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Coiffure entity.
     *
     */
    public function showAction(Coiffure $coiffure)
    {
        $deleteForm = $this->createDeleteForm($coiffure);

        return $this->render('coiffure/show.html.twig', array(
            'coiffure' => $coiffure,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Coiffure entity.
     *
     */
    public function editAction(Request $request, Coiffure $coiffure)
    {
        $deleteForm = $this->createDeleteForm($coiffure);
        $editForm = $this->createForm('Ischa\BackOfficeBundle\Form\CoiffureType', $coiffure);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coiffure);
            $em->flush();

            return $this->redirectToRoute('coiffure_edit', array('id' => $coiffure->getId()));
        }

        return $this->render('coiffure/edit.html.twig', array(
            'coiffure' => $coiffure,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Coiffure entity.
     *
     */
    public function deleteAction(Request $request, Coiffure $coiffure)
    {
        $form = $this->createDeleteForm($coiffure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coiffure);
            $em->flush();
        }

        return $this->redirectToRoute('coiffure_index');
    }

    /**
     * Creates a form to delete a Coiffure entity.
     *
     * @param Coiffure $coiffure The Coiffure entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Coiffure $coiffure)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coiffure_delete', array('id' => $coiffure->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
