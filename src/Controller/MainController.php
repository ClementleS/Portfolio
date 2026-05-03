<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ContactType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // 1. On récupère les données du formulaire
            $contactData = $form->getData();

            // 2. On prépare l'e-mail
            $email = (new Email())
                ->from($contactData['email']) // L'expéditeur (le visiteur)
                ->to('mar3.jul3@gmail.com') // TON adresse
                ->subject('Nouveau message de ton Portfolio : ' . $contactData['nom'])
                ->text($contactData['message'])
                ->html('<p><strong>Nom :</strong> ' . $contactData['nom'] . '</p>' .
                    '<p><strong>Email :</strong> ' . $contactData['email'] . '</p>' .
                    '<p><strong>Message :</strong><br>' . nl2br($contactData['message']) . '</p>');

            // 3. On envoie
            $mailer->send($email);

            // 4. Petit message flash pour confirmer au visiteur
            $this->addFlash('success', 'Ton message a bien été envoyé.');

            return $this->redirectToRoute('app_home', ['_anchor' => 'contact']);
        }

        return $this->render('main/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }

    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('main/profil.html.twig');
    }

    #[Route('/parcours', name: 'app_parcours')]
    public function parcours(): Response
    {
        return $this->render('main/parcours.html.twig');
    }

    #[Route('/projets', name: 'app_projets')]
    public function projets(): Response
    {
        return $this->render('main/projets.html.twig');
    }

    #[Route('/veille', name: 'app_veille')]
    public function veille(): Response
    {
        return $this->render('main/veille.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }
}
