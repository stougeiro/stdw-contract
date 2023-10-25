<?php declare(strict_types=1);

    namespace STDW\Contract;

    use SessionHandlerInterface as NativeSessionHandlerInterface;
    use SessionIdInterface as NativeSessionIdInterface;


    interface SessionHandlerInterface extends NativeSessionHandlerInterface, NativeSessionIdInterface
    {
    }