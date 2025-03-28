<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $isEqual;

    /**
     * @var string
     */
    public $isInstancePolarDBKey;

    /**
     * @var string
     */
    public $isInstanceRdsKey;

    /**
     * @var string
     */
    public $isPolarDBKey;

    /**
     * @var string
     */
    public $isRdsKey;

    /**
     * @var string
     */
    public $distParameterDescription;

    /**
     * @var string
     */
    public $distParameterName;

    /**
     * @var string
     */
    public $distParameterOptional;

    /**
     * @var string
     */
    public $distParameterValue;

    /**
     * @var string
     */
    public $rdsParameterDescription;

    /**
     * @var string
     */
    public $rdsParameterName;

    /**
     * @var string
     */
    public $rdsParameterOptional;

    /**
     * @var string
     */
    public $rdsParameterValue;
    protected $_name = [
        'isEqual' => 'IsEqual',
        'isInstancePolarDBKey' => 'IsInstancePolarDBKey',
        'isInstanceRdsKey' => 'IsInstanceRdsKey',
        'isPolarDBKey' => 'IsPolarDBKey',
        'isRdsKey' => 'IsRdsKey',
        'distParameterDescription' => 'distParameterDescription',
        'distParameterName' => 'distParameterName',
        'distParameterOptional' => 'distParameterOptional',
        'distParameterValue' => 'distParameterValue',
        'rdsParameterDescription' => 'rdsParameterDescription',
        'rdsParameterName' => 'rdsParameterName',
        'rdsParameterOptional' => 'rdsParameterOptional',
        'rdsParameterValue' => 'rdsParameterValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEqual) {
            $res['IsEqual'] = $this->isEqual;
        }

        if (null !== $this->isInstancePolarDBKey) {
            $res['IsInstancePolarDBKey'] = $this->isInstancePolarDBKey;
        }

        if (null !== $this->isInstanceRdsKey) {
            $res['IsInstanceRdsKey'] = $this->isInstanceRdsKey;
        }

        if (null !== $this->isPolarDBKey) {
            $res['IsPolarDBKey'] = $this->isPolarDBKey;
        }

        if (null !== $this->isRdsKey) {
            $res['IsRdsKey'] = $this->isRdsKey;
        }

        if (null !== $this->distParameterDescription) {
            $res['distParameterDescription'] = $this->distParameterDescription;
        }

        if (null !== $this->distParameterName) {
            $res['distParameterName'] = $this->distParameterName;
        }

        if (null !== $this->distParameterOptional) {
            $res['distParameterOptional'] = $this->distParameterOptional;
        }

        if (null !== $this->distParameterValue) {
            $res['distParameterValue'] = $this->distParameterValue;
        }

        if (null !== $this->rdsParameterDescription) {
            $res['rdsParameterDescription'] = $this->rdsParameterDescription;
        }

        if (null !== $this->rdsParameterName) {
            $res['rdsParameterName'] = $this->rdsParameterName;
        }

        if (null !== $this->rdsParameterOptional) {
            $res['rdsParameterOptional'] = $this->rdsParameterOptional;
        }

        if (null !== $this->rdsParameterValue) {
            $res['rdsParameterValue'] = $this->rdsParameterValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEqual'])) {
            $model->isEqual = $map['IsEqual'];
        }

        if (isset($map['IsInstancePolarDBKey'])) {
            $model->isInstancePolarDBKey = $map['IsInstancePolarDBKey'];
        }

        if (isset($map['IsInstanceRdsKey'])) {
            $model->isInstanceRdsKey = $map['IsInstanceRdsKey'];
        }

        if (isset($map['IsPolarDBKey'])) {
            $model->isPolarDBKey = $map['IsPolarDBKey'];
        }

        if (isset($map['IsRdsKey'])) {
            $model->isRdsKey = $map['IsRdsKey'];
        }

        if (isset($map['distParameterDescription'])) {
            $model->distParameterDescription = $map['distParameterDescription'];
        }

        if (isset($map['distParameterName'])) {
            $model->distParameterName = $map['distParameterName'];
        }

        if (isset($map['distParameterOptional'])) {
            $model->distParameterOptional = $map['distParameterOptional'];
        }

        if (isset($map['distParameterValue'])) {
            $model->distParameterValue = $map['distParameterValue'];
        }

        if (isset($map['rdsParameterDescription'])) {
            $model->rdsParameterDescription = $map['rdsParameterDescription'];
        }

        if (isset($map['rdsParameterName'])) {
            $model->rdsParameterName = $map['rdsParameterName'];
        }

        if (isset($map['rdsParameterOptional'])) {
            $model->rdsParameterOptional = $map['rdsParameterOptional'];
        }

        if (isset($map['rdsParameterValue'])) {
            $model->rdsParameterValue = $map['rdsParameterValue'];
        }

        return $model;
    }
}
