<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class DevController extends AbstractController
{
    #[Route('/dev/register', name: 'app_dev_register')]
public function register(
    Request $request,
    UserPasswordHasherInterface $passwordHasher,
    EntityManagerInterface $entityManager
): Response {
    $user = new User();
    $user->setRoles(['ROLE_DEV']); // Attribuer le rôle spécifique

    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && !$form->isValid()) {
        $errors = $form->getErrors(true, false);
        foreach ($errors as $error) {
            dump($error->getMessage());
        }
        exit; // This will print errors directly to the screen. You can use it to inspect errors in the profiler.
    }

    if ($form->isSubmitted() && $form->isValid()) {
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $form->get('plainPassword')->getData()
        );
        $user->setPassword($hashedPassword);

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('dev_login');
    }

    return $this->render('auth/dev_register.html.twig', [
        'registrationForm' => $form->createView(),
    ]);
}

#[Route('/dev/login', name: 'app_dev_login')]
public function login(AuthenticationUtils $authenticationUtils): Response
{
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('auth/dev_login.html.twig', [
        'last_username' => $lastUsername,
        'error' => $error,
    ]);
}

}
