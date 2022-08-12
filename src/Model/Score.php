<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Score extends AbstractModel
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
            'conforms' => [ 'model' => null, 'array' => false ],
            'numerator' => [ 'model' => null, 'array' => false ],
            'denominator' => [ 'model' => null, 'array' => false ],
            'value' => [ 'model' => null, 'array' => false ],
            'distanceToNorm' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var bool Indicates whether the score conforms to the bol.com service norm or not.
     */
    public $conforms;

    /**
     * @var int The top part of the fraction (above the line). This usually is the smaller number compared to the
     * denominator.
     */
    public $numerator;

    /**
     * @var int The lower part of the fraction (below the line). This usually is the larger number compared to the the
     * numerator.
     */
    public $denominator;

    /**
     * @var float The score for this measurement (denominator divided by the numerator).
     */
    public $value;

    /**
     * @var float The difference between the score and the bol.com service norm.
     */
    public $distanceToNorm;
}
