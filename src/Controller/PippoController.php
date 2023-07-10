<?php

namespace App\Controller;

use App\Entity\Pippo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PippoController extends AbstractController
{
    /**
     * @Route("/pippo", name="app_pippo")
     */
    public function index(Request $request): Response
    {
        $superPippo = new Pippo();
        $form = $this->createFormBuilder($superPippo)
            ->add('nome', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'upload'])
            ->getForm();

        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted()) {
            $em->persist($superPippo);
            $em->flush();
        }

        return $this->renderForm('pippo/index.html.twig', [
            'controller_name' => 'PippoController',
            'form' => $form,
            'pippo' => [0 => ['nome' => 'paperino'], 1 => ['nome'=>'pluto']] //$this->getDoctrine()->getRepository(pippo::class)->findAll(),
        ]);
    }
}
