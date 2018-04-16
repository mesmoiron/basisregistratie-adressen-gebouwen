<?php

namespace BureauVierkant\Basisregistratie\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class StandplaatsVoorkomensCollectionEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsVoorkomensCollectionEmbedded';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\StandplaatsVoorkomensCollectionEmbedded;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\StandplaatsVoorkomensCollectionEmbedded();
        if (property_exists($data, 'voorkomens')) {
            $values = array();
            foreach ($data->{'voorkomens'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsVoorkomensCollectionEmbeddedVoorkomensItem', 'json', $context);
            }
            $object->setVoorkomens($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVoorkomens()) {
            $values = array();
            foreach ($object->getVoorkomens() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'voorkomens'} = $values;
        }
        return $data;
    }
}