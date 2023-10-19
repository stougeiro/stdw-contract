<?php declare(strict_types=1);

    namespace STDW\Contract;

    use Psr\Container\ContainerInterface as PsrContainerInterface;


    interface ContainerInterface extends PsrContainerInterface
    {
        public function set(string $abstract, callable|string|null $concrete = null, bool $shareable = false): void;

        public function make(string $abstract): object;

        public function bind(string $abstract, callable|string|null $concrete = null): void;

        public function singleton(string $abstract, callable|string|null $concrete = null): void;
    }
