<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class Hoofdadres
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class Hoofdadres
{
    /**
     * Link naar een bijbehorend hoofdadres.
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar een bijbehorend hoofdadres.
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar een bijbehorend hoofdadres.
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(?string $href) : self
    {
        $this->href = $href;
        return $this;
    }
}