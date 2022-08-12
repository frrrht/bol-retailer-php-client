<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Attribute extends AbstractModel
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
            'values' => [ 'model' => AttributeValue::class, 'array' => true ],
        ];
    }

    /**
     * @var string The identifier of the attribute for which the value has changed.
     */
    public $id;

    /**
     * @var AttributeValue[]
     */
    public $values = [];
}
