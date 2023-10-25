<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface SessionInterface
    {
        public function start(): void;

        public function exists(string $key): bool;

        public function get(string $key, mixed $default = null): mixed;

        public function set(string $key, mixed $value): void;

        public function delete(string $key): void;

        public function clear(): void;

        public function end(): void;
    }