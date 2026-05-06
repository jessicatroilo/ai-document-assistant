<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class DocumentAnalysisController extends AbstractController
{
    #[Route('/', name: 'app_document_analyze', methods: ['POST', 'GET'])]
    public function analyze(Request $request, HttpClientInterface $client): Response
    {

        $result = null;
        //1. Récupérer les données
        $userText= $request->request->get('user_text');

        //2. Traitement (API ou mock)

        $useApi = false; // Désactivé pour éviter les coûts API en développement

        if ($userText) {

            if ($useApi) {

            $apiKey= $_ENV['OPENAI_API_KEY']; //sk-maclesupersecret
            $apiUrl='https://api.openai.com/v1/chat/completions';

            $userText = substr($userText, 0, 8000);

            //b.Construction du prompt
            $prompt = 'Tu es un assistant d\'analyse de documents liés au travail.
                        Réponds UNIQUEMENT en JSON valide, sans texte avant ou après.
                        Format attendu :

                        {
                        "summary": "résumé en 5 lignes max",
                        "key_points": ["point 1", "point 2"],
                        "actions": ["action 1", "action 2"]
                        }


                        Texte :
                        ' . $userText;

            try {
                $response = $client->request('POST', $apiUrl, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $apiKey,
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'model' => 'gpt-4o-mini',
                        'messages' => [
                            [
                                'role' => 'user',
                                'content' => $prompt,
                            ],
                        ],
                    ],
                ]);


                    $data = $response->toArray();
                    $content = $data['choices'][0]['message']['content'] ?? null;
                    $result = json_decode($content, true);

                    if (!$result) {
                        $result = [
                            'summary' => $content ?? 'Erreur de génération',
                            'key_points' => [],
                            'actions' => []
                        ];
                    }

                } catch (\Exception $e) {
                        $result = "Erreur lors de l'appel API : " . $e->getMessage();
                };

                } else {
                    // MOCK (simulation)
                    $result = [
                        'summary' => "Ce document traite d'un sujet lié à la santé au travail et met en évidence plusieurs points importants.",

                        'key_points' => [
                            "Communication interne à améliorer",
                            "Suivi des actions en cours",
                            "Organisation des équipes",
                        ],
                        'actions' => [
                            "Planifier une réunion de suivi",
                            "Clarifier les responsabilités",
                            "Mettre en place un reporting régulier",
                        ]
                    ];
                }
            }


        // 3. Retour à la vue
        return $this->render('document_analysis/analyse.html.twig', [
            'result' => $result,
            'user_text' => $userText,
        ]);

            if (!$userText) {
        return $this->render('document_analysis/analyse.html.twig');
        }


    }
}
