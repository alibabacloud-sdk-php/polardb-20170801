<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody\items\addressItems;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var addressItems[]
     */
    public $addressItems;

    /**
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @var string
     */
    public $DBEndpointDescription;

    /**
     * @var string
     */
    public $DBEndpointId;

    /**
     * @var string
     */
    public $endpointConfig;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $nodeWithRoles;

    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $readWriteMode;
    protected $_name = [
        'addressItems'          => 'AddressItems',
        'autoAddNewNodes'       => 'AutoAddNewNodes',
        'DBEndpointDescription' => 'DBEndpointDescription',
        'DBEndpointId'          => 'DBEndpointId',
        'endpointConfig'        => 'EndpointConfig',
        'endpointType'          => 'EndpointType',
        'nodeWithRoles'         => 'NodeWithRoles',
        'nodes'                 => 'Nodes',
        'readWriteMode'         => 'ReadWriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressItems) {
            $res['AddressItems'] = [];
            if (null !== $this->addressItems && \is_array($this->addressItems)) {
                $n = 0;
                foreach ($this->addressItems as $item) {
                    $res['AddressItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoAddNewNodes) {
            $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        }
        if (null !== $this->DBEndpointDescription) {
            $res['DBEndpointDescription'] = $this->DBEndpointDescription;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->nodeWithRoles) {
            $res['NodeWithRoles'] = $this->nodeWithRoles;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n                   = 0;
                foreach ($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if (isset($map['DBEndpointDescription'])) {
            $model->DBEndpointDescription = $map['DBEndpointDescription'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['NodeWithRoles'])) {
            $model->nodeWithRoles = $map['NodeWithRoles'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }

        return $model;
    }
}
