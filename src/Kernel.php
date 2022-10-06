<?php
namespace App;

use Psr\Container\ContainerInterface;
use App\Z\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

    /**
     * --------------------------------------------------------------------------
     * Kernel
     * 
     * C'est le noyau de notre application
     * 
     * Ses rôles principaux : 
     *              - Soummettre la requête
     *              - Récupérer la réponse correspondante
     *              - Retourner cette réponse au "FrontController" (index.php)
     * 
     * @author: Jean-Claude AZIAHA <aziaha.formations@gmail.com>
     * @version: 1.0.0
     * --------------------------------------------------------------------------
    */

    class Kernel implements HttpKernelInterface
    {

        /**
         * Cette propriété représente le conteneur de dépendances
         */
        private $container;

        /**
         * A chaque fois qu'une nouvelle instance du noyau est créé : 
         *      - On récupère le conteneur de dépendances
         *
         */
        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
            // dd($this->container);
        }

        /**
         * Cette méthode du noyau lui permet de soummettre la requête du client
         * et de récupérer la réponse correspondante
         * 
         * grâce au Router
         *
         * @return Response
         */
        public function handleRequest() : Response
        {
            dd($this->container->get(Request::class));
        }
    }