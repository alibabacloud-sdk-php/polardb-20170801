<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeActivationCodeDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $activateAt;

    /**
     * @var string
     */
    public $certContentB64;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $systemIdentifier;
    protected $_name = [
        'activateAt' => 'ActivateAt',
        'certContentB64' => 'CertContentB64',
        'description' => 'Description',
        'expireAt' => 'ExpireAt',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'macAddress' => 'MacAddress',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'systemIdentifier' => 'SystemIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateAt) {
            $res['ActivateAt'] = $this->activateAt;
        }

        if (null !== $this->certContentB64) {
            $res['CertContentB64'] = $this->certContentB64;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemIdentifier) {
            $res['SystemIdentifier'] = $this->systemIdentifier;
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
        if (isset($map['ActivateAt'])) {
            $model->activateAt = $map['ActivateAt'];
        }

        if (isset($map['CertContentB64'])) {
            $model->certContentB64 = $map['CertContentB64'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SystemIdentifier'])) {
            $model->systemIdentifier = $map['SystemIdentifier'];
        }

        return $model;
    }
}
