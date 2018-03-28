<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $navigation = $this->renderView('parts/navigation.html.twig', ['current' => 'home']);
        
        return $this->render('home/index.html.twig', [
            'advertisement' => [
                'source' => $request->get('utm_source', 'other'),
                'content' => $request->get('utm_content'),
            ],
            'navigation' => $navigation,
        ]);
    }
}
