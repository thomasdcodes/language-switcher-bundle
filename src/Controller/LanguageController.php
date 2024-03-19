<?php

declare(strict_types=1);

namespace Tdc\LanguageSwitcherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LanguageController extends AbstractController
{
    #[Route(path: '/change-language/{language}', name: 'tdc_language_switcher_change_language', requirements: ['language' => 'en|de|ru'])]
    public function changeLanguage(Request $request, string $language): Response
    {
        $request->getSession()->set('_locale', $language);
        return $this->redirect($request->headers->get('referer'));
    }
}