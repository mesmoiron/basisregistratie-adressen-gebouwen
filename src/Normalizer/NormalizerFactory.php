<?php

namespace BureauVierkant\Basisregistratie\Normalizer;

/**
 * Class NormalizerFactory
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class NormalizerFactory
{

    /**
     * @return array
     */
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new PolygonNormalizer();
        $normalizers[] = new PointNormalizer();
        $normalizers[] = new HoofdadresNormalizer();
        $normalizers[] = new NevenadresItemNormalizer();
        $normalizers[] = new GeldigVoorkomenNormalizer();
        $normalizers[] = new GeldigVoorkomenEmbeddedNormalizer();
        $normalizers[] = new GeldigVoorkomenEmbeddedBronNormalizer();
        $normalizers[] = new PandNormalizer();
        $normalizers[] = new PandLinksNormalizer();
        $normalizers[] = new PandLinksSelfNormalizer();
        $normalizers[] = new PandLinksVoorkomensNormalizer();
        $normalizers[] = new PandLinksVerblijfsobjectenNormalizer();
        $normalizers[] = new PandEmbeddedNormalizer();
        $normalizers[] = new PandCollectionNormalizer();
        $normalizers[] = new PandCollectionEmbeddedNormalizer();
        $normalizers[] = new PandCollectionLinksNormalizer();
        $normalizers[] = new PandCollectionLinksSelfNormalizer();
        $normalizers[] = new PandCollectionLinksNextNormalizer();
        $normalizers[] = new LigplaatsNormalizer();
        $normalizers[] = new LigplaatsLinksNormalizer();
        $normalizers[] = new LigplaatsLinksSelfNormalizer();
        $normalizers[] = new LigplaatsLinksVoorkomensNormalizer();
        $normalizers[] = new LigplaatsEmbeddedNormalizer();
        $normalizers[] = new LigplaatsCollectionNormalizer();
        $normalizers[] = new LigplaatsCollectionEmbeddedNormalizer();
        $normalizers[] = new LigplaatsCollectionLinksNormalizer();
        $normalizers[] = new LigplaatsCollectionLinksSelfNormalizer();
        $normalizers[] = new LigplaatsCollectionLinksNextNormalizer();
        $normalizers[] = new StandplaatsNormalizer();
        $normalizers[] = new StandplaatsLinksNormalizer();
        $normalizers[] = new StandplaatsLinksSelfNormalizer();
        $normalizers[] = new StandplaatsLinksVoorkomensNormalizer();
        $normalizers[] = new StandplaatsEmbeddedNormalizer();
        $normalizers[] = new StandplaatsCollectionNormalizer();
        $normalizers[] = new StandplaatsCollectionEmbeddedNormalizer();
        $normalizers[] = new StandplaatsCollectionLinksNormalizer();
        $normalizers[] = new StandplaatsCollectionLinksSelfNormalizer();
        $normalizers[] = new StandplaatsCollectionLinksNextNormalizer();
        $normalizers[] = new VerblijfsobjectNormalizer();
        $normalizers[] = new VerblijfsobjectLinksNormalizer();
        $normalizers[] = new VerblijfsobjectLinksSelfNormalizer();
        $normalizers[] = new VerblijfsobjectLinksPandrelateringenItemNormalizer();
        $normalizers[] = new VerblijfsobjectLinksVoorkomensNormalizer();
        $normalizers[] = new VerblijfsobjectEmbeddedNormalizer();
        $normalizers[] = new VerblijfsobjectCollectionNormalizer();
        $normalizers[] = new VerblijfsobjectCollectionEmbeddedNormalizer();
        $normalizers[] = new VerblijfsobjectCollectionLinksNormalizer();
        $normalizers[] = new VerblijfsobjectCollectionLinksSelfNormalizer();
        $normalizers[] = new VerblijfsobjectCollectionLinksNextNormalizer();
        $normalizers[] = new OpenbareruimteNormalizer();
        $normalizers[] = new OpenbareruimteLinksNormalizer();
        $normalizers[] = new OpenbareruimteLinksSelfNormalizer();
        $normalizers[] = new OpenbareruimteLinksBijbehorendeWoonplaatsNormalizer();
        $normalizers[] = new OpenbareruimteLinksVoorkomensNormalizer();
        $normalizers[] = new OpenbareruimteEmbeddedNormalizer();
        $normalizers[] = new OpenbareruimteCollectionNormalizer();
        $normalizers[] = new OpenbareruimteCollectionEmbeddedNormalizer();
        $normalizers[] = new OpenbareruimteCollectionLinksNormalizer();
        $normalizers[] = new OpenbareruimteCollectionLinksSelfNormalizer();
        $normalizers[] = new OpenbareruimteCollectionLinksNextNormalizer();
        $normalizers[] = new NummeraanduidingNormalizer();
        $normalizers[] = new NummeraanduidingLinksNormalizer();
        $normalizers[] = new NummeraanduidingLinksSelfNormalizer();
        $normalizers[] = new NummeraanduidingLinksBijbehorendeOpenbareRuimteNormalizer();
        $normalizers[] = new NummeraanduidingLinksVoorkomensNormalizer();
        $normalizers[] = new NummeraanduidingLinksAdresseerbaarObjectNormalizer();
        $normalizers[] = new NummeraanduidingEmbeddedNormalizer();
        $normalizers[] = new NummeraanduidingCollectionNormalizer();
        $normalizers[] = new NummeraanduidingCollectionEmbeddedNormalizer();
        $normalizers[] = new NummeraanduidingCollectionLinksNormalizer();
        $normalizers[] = new NummeraanduidingCollectionLinksSelfNormalizer();
        $normalizers[] = new NummeraanduidingCollectionLinksNextNormalizer();
        $normalizers[] = new WoonplaatsNormalizer();
        $normalizers[] = new WoonplaatsLinksNormalizer();
        $normalizers[] = new WoonplaatsLinksSelfNormalizer();
        $normalizers[] = new WoonplaatsLinksVoorkomensNormalizer();
        $normalizers[] = new WoonplaatsEmbeddedNormalizer();
        $normalizers[] = new WoonplaatsCollectionNormalizer();
        $normalizers[] = new WoonplaatsCollectionEmbeddedNormalizer();
        $normalizers[] = new WoonplaatsCollectionLinksNormalizer();
        $normalizers[] = new WoonplaatsCollectionLinksSelfNormalizer();
        $normalizers[] = new WoonplaatsCollectionLinksNextNormalizer();
        $normalizers[] = new PandVoorkomensCollectionNormalizer();
        $normalizers[] = new PandVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new PandVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new PandVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPandNormalizer();
        $normalizers[] = new LigplaatsVoorkomensCollectionNormalizer();
        $normalizers[] = new LigplaatsVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaatsNormalizer();
        $normalizers[] = new StandplaatsVoorkomensCollectionNormalizer();
        $normalizers[] = new StandplaatsVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaatsNormalizer();
        $normalizers[] = new VerblijfsobjectVoorkomensCollectionNormalizer();
        $normalizers[] = new VerblijfsobjectVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobjectNormalizer();
        $normalizers[] = new OpenbareruimteVoorkomensCollectionNormalizer();
        $normalizers[] = new OpenbareruimteVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimteNormalizer();
        $normalizers[] = new NummeraanduidingVoorkomensCollectionNormalizer();
        $normalizers[] = new NummeraanduidingVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduidingNormalizer();
        $normalizers[] = new WoonplaatsVoorkomensCollectionNormalizer();
        $normalizers[] = new WoonplaatsVoorkomensCollectionEmbeddedNormalizer();
        $normalizers[] = new WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemNormalizer();
        $normalizers[] = new WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer();
        $normalizers[] = new WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaatsNormalizer();
        $normalizers[] = new GeobodyNormalizer();
        $normalizers[] = new GeobodyGeometrieNormalizer();
        $normalizers[] = new GeobodyGeometrieContainsNormalizer();
        $normalizers[] = new GeobodyStandplaatsNormalizer();
        $normalizers[] = new GeobodyStandplaatsGeometrieNormalizer();
        $normalizers[] = new GeobodyStandplaatsGeometrieContainsNormalizer();
        $normalizers[] = new GeobodyLigplaatsNormalizer();
        $normalizers[] = new GeobodyLigplaatsGeometrieNormalizer();
        $normalizers[] = new GeobodyLigplaatsGeometrieContainsNormalizer();
        $normalizers[] = new GeobodyVerblijfsobjectNormalizer();
        $normalizers[] = new GeobodyVerblijfsobjectGeometrieNormalizer();
        $normalizers[] = new GeobodyVerblijfsobjectGeometrieContainsNormalizer();
        $normalizers[] = new GeobodyWoonplaatsNormalizer();
        $normalizers[] = new GeobodyWoonplaatsGeometrieNormalizer();
        $normalizers[] = new GeobodyWoonplaatsGeometrieContainsNormalizer();
        $normalizers[] = new GeobodyPandNormalizer();
        $normalizers[] = new GeobodyPandGeometrieNormalizer();
        $normalizers[] = new GeobodyPandGeometrieContainsNormalizer();
        return $normalizers;
    }
}