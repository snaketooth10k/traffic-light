<?php declare(strict_types=1);


namespace FSM\States;


abstract class AbstractState implements StateInterface
{
    private static $_instance;

    public static function getInstance(): StateInterface
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }

    abstract public function transition(bool $trafficAPresent, bool $trafficBPresent): StateInterface;
}