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

        return $this->render('slides/index.html.twig', [
            'pages' => $pages,
        ]);
    }
}
