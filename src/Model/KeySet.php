<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class KeySet extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'id' => [ 'model' => null, 'array' => false ],
            'type' => [ 'model' => null, 'array' => false ],
            'publicKey' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Key identifier. Maps to the keyId value in the signature header of the push request.
     */
    public $id;

    /**
     * @var string Key encryption type.
     */
    public $type;

    /**
     * @var string The Base64 encoded public key to use when verifying the signature.
     */
    public $publicKey;
}
