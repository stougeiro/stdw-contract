<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface ConfigInterface
    {
        public function get(string $path): mixed;
    }