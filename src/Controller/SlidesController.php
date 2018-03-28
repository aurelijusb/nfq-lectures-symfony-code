<?php

namespace App\Controller;

use App\Entity\Page;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SlidesController extends Controller
{
    /**
     * @Route("/slides", name="slides")
     */
    public function index()
    {
        $em = $this->get('doctrine')->getManager();
        $pages = $em->getRepository(Page::class)->findAll();

        $navigation = $this->renderView('parts/navigation.html.twig', ['current' => 'slides']);

        return $this->render('slides/index.html.twig', [
            'pages' => $pages,
            'navigation' => $navigation,
        ]);
    }
}
