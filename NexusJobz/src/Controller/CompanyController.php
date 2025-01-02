<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class CompanyController extends AbstractController
{
    #[Route('/company/register', name: 'app_company_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();
        $user->setRoles(['ROLE_COMPANY']); // Attribuer le rôle spécifique
    
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );
            $user->setPassword($hashedPassword);
    
            $entityManager->persist($user);
            $entityManager->flush();
    
            return $this->redirectToRoute('company_login');
        }
    
        return $this->render('auth/company_register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    
    #[Route('/company/login', name: 'app_company_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('auth/company_login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
}
