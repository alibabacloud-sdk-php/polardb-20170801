<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDBClusterEndpointRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $readWriteMode;

    /**
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @var string
     */
    public $endpointConfig;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBEndpointDescription;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'ownerAccount'          => 'OwnerAccount',
        'DBClusterId'           => 'DBClusterId',
        'endpointType'          => 'EndpointType',
        'nodes'                 => 'Nodes',
        'readWriteMode'         => 'ReadWriteMode',
        'autoAddNewNodes'       => 'AutoAddNewNodes',
        'endpointConfig'        => 'EndpointConfig',
        'clientToken'           => 'ClientToken',
        'DBEndpointDescription' => 'DBEndpointDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }
        if (null !== $this->autoAddNewNodes) {
            $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBEndpointDescription) {
            $res['DBEndpointDescription'] = $this->DBEndpointDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBClusterEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }
        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBEndpointDescription'])) {
            $model->DBEndpointDescription = $map['DBEndpointDescription'];
        }

        return $model;
    }
}
