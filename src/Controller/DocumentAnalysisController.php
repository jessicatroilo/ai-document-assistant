<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DocumentAnalysisController extends AbstractController
{
    #[Route('/analyze', name: 'app_document_analyze', methods: ['POST', 'GET'])]
    public function analyze(): Response
    {
        return $this->render('document_analysis/analyse.html.twig', [
        ]);
    }
}
