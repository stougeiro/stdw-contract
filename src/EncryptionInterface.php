<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface EncryptionInterface
    {
        public function __construct(string $key);

        public function encrypt(mixed $value): string;

        public function decrypt(string $payload): mixed;
    }
