<?php

namespace GfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GfctBundle\Entity\conf;
use GfctBundle\Form\confType;
use Symfony\Component\HttpFoundation\Request;

class ConfiguracionController extends Controller
{
    public function allAction()
    {//generamos insercion a tabla profesores
      $repository = $this->getDoctrine()->getRepository('GfctBundle:conf');
      // find *all* conf
      $conf = $repository->findAll();
      return $this->render('GfctBundle:Configuracion:all.html.twig',array("configuracion"=>$conf));
    }

    public function newAction(Request $request)
    {//generamos formulario configuracion
      $configuracion=new conf();
      $form=$this->createForm(confType::class,$configuracion);

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
        $configuracion=$form->getData();

        $em=$this->getDoctrine()->getManager();
        $em->persist($configuracion);
        $em->flush();

        //return $this->redirectToRoute('trask_success');
      }

      return $this->render('GfctBundle:Configuracion:new.html.twig',array("form"=>$form->createView() ));
    }

}
