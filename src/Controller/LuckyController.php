<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function number()
    {
        $number = mt_rand(0, 100);

        $navigation = $this->renderView('parts/navigation.html.twig', ['current' => 'app_lucky_number']);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
            'navigation' => $navigation,
        ));
    }
}