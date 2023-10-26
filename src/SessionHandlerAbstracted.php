<?php declare(strict_types=1);

    namespace STDW\Contract;

    use SessionHandler as NativeSessionHandler;


    abstract class SessionHandlerAbstracted extends NativeSessionHandler implements SessionHandlerInterface
    { }