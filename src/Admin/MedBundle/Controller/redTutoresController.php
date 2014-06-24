<?php

namespace Admin\MedBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\MedBundle\Entity\redTutores;
use Admin\MedBundle\Form\redTutoresType;

/**
 * redTutores controller.
 *
 * @Route("/doc/redtutores")
 */
class redTutoresController extends Controller
{

    /**
     * Lists all redTutores entities.
     *
     * @Route("/", name="redtutores")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminMedBundle:redTutores')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new redTutores entity.
     *
     * @Route("/", name="redtutores_create")
     * @Method("POST")
     * @Template("AdminMedBundle:redTutores:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new redTutores();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('redtutores_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a redTutores entity.
    *
    * @param redTutores $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(redTutores $entity)
    {
        $form = $this->createForm(new redTutoresType(), $entity, array(
            'action' => $this->generateUrl('redtutores_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new redTutores entity.
     *
     * @Route("/new", name="redtutores_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new redTutores();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a redTutores entity.
     *
     * @Route("/{id}", name="redtutores_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:redTutores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find redTutores entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing redTutores entity.
     *
     * @Route("/{id}/edit", name="redtutores_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:redTutores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find redTutores entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'evaluacion'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a redTutores entity.
    *
    * @param redTutores $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(redTutores $entity)
    {
        $form = $this->createForm(new redTutoresType(), $entity, array(
            'action' => $this->generateUrl('redtutores_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing redTutores entity.
     *
     * @Route("/{id}", name="redtutores_update")
     * @Method("PUT")
     * @Template("AdminMedBundle:redTutores:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminMedBundle:redTutores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find redTutores entity.');
        }

       // $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        $suma = 0;
        for($i=1; $i<31; $i++){   
        $suma = $suma + $editForm["f".$i]->getData();
        }
        $entity->setF0($suma/30);
        $entity->setFecha(new \DateTime());

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('redtutores'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        //    'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a redTutores entity.
     *
     * @Route("/{id}", name="redtutores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminMedBundle:redTutores')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find redTutores entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('redtutores'));
    }

    /**
     * Creates a form to delete a redTutores entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('redtutores_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}