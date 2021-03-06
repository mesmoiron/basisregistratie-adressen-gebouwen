<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class OpenbareruimteCollectionLinksNext
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class OpenbareruimteCollectionLinksNext
{
    /**
     * Link naar de volgende pagina.
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de volgende pagina.
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de volgende pagina.
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