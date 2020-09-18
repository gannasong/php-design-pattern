<?php

namespace DesignPatterns\Behavioral\MediatorPattern;

/**
 * Class Bag.
 */
class Bag extends Colleague
{
    /**
     * @var Bells
     */
    protected $bells;

    /**
     * @var Turnips
     */
    protected $turnips;

    /**
     * Bag constructor.
     */
    public function __construct()
    {
        $this->bells = new Bells(0);
        $this->turnips = new Turnips(0);
    }

    /**
     * @return int
     */
    public function getBells(): int
    {
        return $this->bells->getBells();
    }

    /**
     * @return int
     */
    public function getTurnips(): int
    {
        return $this->turnips->getCount();
    }

    /**
     * @param int $bells
     */
    public function setBells(int $bells)
    {
        $this->bells->setBells($bells);
    }

    /**
     * @param int $count
     */
    public function setTurnips(int $count)
    {
        $this->turnips->setCount($count);
    }
}
