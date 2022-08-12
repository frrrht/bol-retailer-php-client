<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class RelatedSearchTerm extends AbstractModel
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
            'total' => [ 'model' => null, 'array' => false ],
            'searchTerm' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var int The number of customer visits on the search page.
     */
    public $total;

    /**
     * @var string The search term for which you requested the search volume.
     */
    public $searchTerm;
}
