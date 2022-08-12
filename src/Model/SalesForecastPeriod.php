<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class SalesForecastPeriod extends AbstractModel
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
            'weeksAhead' => [ 'model' => null, 'array' => false ],
            'total' => [ 'model' => Total::class, 'array' => false ],
            'countries' => [ 'model' => Countries::class, 'array' => true ],
        ];
    }

    /**
     * @var int The number of weeks into the future, starting from today.
     */
    public $weeksAhead;

    /**
     * @var Total
     */
    public $total;

    /**
     * @var Countries[]
     */
    public $countries = [];
}
