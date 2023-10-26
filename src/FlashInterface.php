<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface FlashInterface
    {
        public function __construct(SessionInterface $session);

        public function get(string $key): mixed;

        public function set(string $key, mixed $message, int $age = 1): void;

        public function exists(string $_key): bool;

        public function clear(): void;
    }