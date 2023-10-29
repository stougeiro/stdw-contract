<?php declare(strict_types=1);

    namespace STDW\Contract;


    interface ViewInterface
    {
        public function compile(string $filepath, array $data = []): string;

        public function render(string $filepath, array $data = []): void;
    }