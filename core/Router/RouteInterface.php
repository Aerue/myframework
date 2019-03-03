<?php

    namespace Core\Router;


    interface RouteInterface
    {

        /**
         * RouteInterface constructor.
         *
         * @param       $path
         * @param       $controller
         * @param       $action
         */
        public function __construct($path, $controller, $action);

        /**
         * Instancie et apelle la méthode du controller demandé
         * @return mixed
         */
        public function call();

    }