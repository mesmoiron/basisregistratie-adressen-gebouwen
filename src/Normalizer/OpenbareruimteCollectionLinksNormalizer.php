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
class OpenbareruimteCollectionLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteCollectionLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\OpenbareruimteCollectionLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\OpenbareruimteCollectionLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteCollectionLinksSelf', 'json', $context));
        }
        if (property_exists($data, 'next')) {
            $object->setNext($this->denormalizer->denormalize($data->{'next'}, 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteCollectionLinksNext', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $this->normalizer->normalize($object->getNext(), 'json', $context);
        }
        return $data;
    }
}