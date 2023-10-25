<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface EncryptionHandlerInterface extends EncryptionInterface
    {
        public function setKey(string $key): void;
    }
