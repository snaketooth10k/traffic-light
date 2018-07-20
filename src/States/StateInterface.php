<?php declare(strict_types=1);

namespace FSM\States;


interface StateInterface
{
    public static function getInstance(): StateInterface;

    public function transition(bool $trafficA, bool $trafficB): StateInterface;
}