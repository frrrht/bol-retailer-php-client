<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class CreateReplenishmentRequest extends AbstractModel
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
            'reference' => [ 'model' => null, 'array' => false ],
            'deliveryInfo' => [ 'model' => CreateDeliveryInfo::class, 'array' => false ],
            'labelingByBol' => [ 'model' => null, 'array' => false ],
            'numberOfLoadCarriers' => [ 'model' => null, 'array' => false ],
            'pickupAppointment' => [ 'model' => CreatePickupAppointment::class, 'array' => false ],
            'lines' => [ 'model' => CreateReplenishmentLine::class, 'array' => true ],
        ];
    }

    /**
     * @var string Custom user reference for this replenishment. Must contain at least 1 digit and only upper case
     * characters allowed.
     */
    public $reference;

    /**
     * @var CreateDeliveryInfo
     */
    public $deliveryInfo;

    /**
     * @var bool Indicates whether the replenishment will be labeled by bol.com.
     */
    public $labelingByBol;

    /**
     * @var int The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the
     * maximum number is 20.
     */
    public $numberOfLoadCarriers;

    /**
     * @var CreatePickupAppointment
     */
    public $pickupAppointment;

    /**
     * @var CreateReplenishmentLine[]
     */
    public $lines = [];
}
