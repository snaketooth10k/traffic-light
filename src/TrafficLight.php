<?php declare(strict_types=1);

namespace FSM;

use FSM\States\roadAGo;
use FSM\States\StateInterface;

/**
 * TrafficLight is a finite state machine describing a four-way intersection
 *
 * @author William Reynolds <williamareynolds@icloud.com>
 * @package FSM
 */
class TrafficLight
{
    /** @var StateInterface The current state of the light */
    private $state;

    /** Initialize the light to A light green, B light red */
    public function __construct()
    {
        $this->state = roadAGo::getInstance();
    }

    /**
     * Update the current state based on the traffic sensor status
     *
     * @param bool $trafficA
     * @param bool $trafficB
     */
    public function update(bool $trafficA, bool $trafficB): void
    {
        $this->state = $this->state->transition($trafficA, $trafficB);
    }
}