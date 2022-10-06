<?php 
namespace App\Z\HttpKernel;

use Symfony\Component\HttpFoundation\Response;


    Interface HttpKernelInterface
    {
        //**
        /*  * Undocumented function
         *
         * @return Reponse
         */  
        public function handleRequest () : Response;
    }