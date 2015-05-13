<?php

namespace PhillPrice\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExperienceController extends Controller
{
    public function listAction() {
        $experience = $this->getDoctrine()
        ->getRepository('PhillPriceResumeBundle:Experience')
        ->findAllOrderedByDate();
        
        return $this->render(
        	'PhillPriceResumeBundle:Experience:list.html.twig', 
        	array(
        		'experiences' => $experience
        	)
        );
    }
    public function detailAction($id) {
	    $experience = $this->getDoctrine()
        ->getRepository('PhillPriceResumeBundle:Experience')
        ->find($id);

	    if (!$experience) {
        throw $this->createNotFoundException(
          'No Experience found for id '.$id
        );
	    }
	    return $this->render(
      	'PhillPriceResumeBundle:Experience:detail.html.twig', 
      	array(
      		'experience' => $experience
      	)
      );
	    // ... do something, like pass the $product object into a template
		}
    public function newAction() {
        return $this->render(
        	'PhillPriceResumeBundle:Experience:new.html.twig', 
        	array(
        		'name' => $name
        	)
        );
    }
    public function createAction() {
        return $this->detailAction($id);
    }
    public function editAction() {
        return $this->render(
        	'PhillPriceResumeBundle:Experience:edit.html.twig', 
        	array(
        		'name' => $name
        	)
        );
    }
    public function saveAction($id) {
      $em = $this->getDoctrine()->getManager();
	  	$experience = $em->getRepository('AppBundle:Experience')->find($id);

	    if (!$experience) {
        throw $this->createNotFoundException(
          'No experience found for id '.$id
        );
	    }

	    //actually update here
	  	//set flash
	  	$em->flush();

			return $this->detailAction($id);
    }
    public function deleteAction($id) {
      $em = $this->getDoctrine()->getManager();
	  	if($experience = $em->getRepository('AppBundle:Experience')->find($id)){
				$em->remove($experience);
				$em->flush();
				//set flash
	  	}

			return $this->listAction();
    }
}
