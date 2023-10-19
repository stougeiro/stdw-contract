<?php declare(strict_types=1);

    namespace STDW\Contract;


    abstract class ServiceProviderAbstracted implements ServiceProviderInterface
    {
        protected ContainerInterface $container;


        public function __construct(ContainerInterface $container)
        {
            $this->container = $container;
        }


        abstract public function register(): void;

        abstract public function boot(): void;

        abstract public function terminate(): void;
    }