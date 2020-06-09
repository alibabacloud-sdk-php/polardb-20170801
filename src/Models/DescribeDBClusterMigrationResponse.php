<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse\DBClusterEndpointList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse\rdsEndpointList;

class DescribeDBClusterMigrationResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBClusterId' => 'DBClusterId',
        'sourceRDSDBInstanceId' => 'SourceRDSDBInstanceId',
        'migrationStatus' => 'MigrationStatus',
        'topologies' => 'Topologies',
        'delayedSeconds' => 'DelayedSeconds',
        'expiredTime' => 'ExpiredTime',
        'rdsReadWriteMode' => 'RdsReadWriteMode',
        'DBClusterReadWriteMode' => 'DBClusterReadWriteMode',
        'comment' => 'Comment',
        'DBClusterEndpointList' => 'DBClusterEndpointList',
        'rdsEndpointList' => 'RdsEndpointList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('sourceRDSDBInstanceId', $this->sourceRDSDBInstanceId, true);
        Model::validateRequired('migrationStatus', $this->migrationStatus, true);
        Model::validateRequired('topologies', $this->topologies, true);
        Model::validateRequired('delayedSeconds', $this->delayedSeconds, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('rdsReadWriteMode', $this->rdsReadWriteMode, true);
        Model::validateRequired('DBClusterReadWriteMode', $this->DBClusterReadWriteMode, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('DBClusterEndpointList', $this->DBClusterEndpointList, true);
        Model::validateRequired('rdsEndpointList', $this->rdsEndpointList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['SourceRDSDBInstanceId'] = $this->sourceRDSDBInstanceId;
        $res['MigrationStatus'] = $this->migrationStatus;
        $res['Topologies'] = $this->topologies;
        $res['DelayedSeconds'] = $this->delayedSeconds;
        $res['ExpiredTime'] = $this->expiredTime;
        $res['RdsReadWriteMode'] = $this->rdsReadWriteMode;
        $res['DBClusterReadWriteMode'] = $this->DBClusterReadWriteMode;
        $res['Comment'] = $this->comment;
        $res['DBClusterEndpointList'] = [];
        if(null !== $this->DBClusterEndpointList && is_array($this->DBClusterEndpointList)){
            $n = 0;
            foreach($this->DBClusterEndpointList as $item){
                $res['DBClusterEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['RdsEndpointList'] = [];
        if(null !== $this->rdsEndpointList && is_array($this->rdsEndpointList)){
            $n = 0;
            foreach($this->rdsEndpointList as $item){
                $res['RdsEndpointList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClusterMigrationResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['SourceRDSDBInstanceId'])){
            $model->sourceRDSDBInstanceId = $map['SourceRDSDBInstanceId'];
        }
        if(isset($map['MigrationStatus'])){
            $model->migrationStatus = $map['MigrationStatus'];
        }
        if(isset($map['Topologies'])){
            $model->topologies = $map['Topologies'];
        }
        if(isset($map['DelayedSeconds'])){
            $model->delayedSeconds = $map['DelayedSeconds'];
        }
        if(isset($map['ExpiredTime'])){
            $model->expiredTime = $map['ExpiredTime'];
        }
        if(isset($map['RdsReadWriteMode'])){
            $model->rdsReadWriteMode = $map['RdsReadWriteMode'];
        }
        if(isset($map['DBClusterReadWriteMode'])){
            $model->DBClusterReadWriteMode = $map['DBClusterReadWriteMode'];
        }
        if(isset($map['Comment'])){
            $model->comment = $map['Comment'];
        }
        if(isset($map['DBClusterEndpointList'])){
            if(!empty($map['DBClusterEndpointList'])){
                $model->DBClusterEndpointList = [];
                $n = 0;
                foreach($map['DBClusterEndpointList'] as $item) {
                    $model->DBClusterEndpointList[$n++] = null !== $item ? DBClusterEndpointList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['RdsEndpointList'])){
            if(!empty($map['RdsEndpointList'])){
                $model->rdsEndpointList = [];
                $n = 0;
                foreach($map['RdsEndpointList'] as $item) {
                    $model->rdsEndpointList[$n++] = null !== $item ? rdsEndpointList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description data.sourceDBInstanceName
     * @var string
     */
    public $sourceRDSDBInstanceId;

    /**
     * @description data.migrationStatus
     * @var string
     */
    public $migrationStatus;

    /**
     * @description data.syncDirection
     * @var string
     */
    public $topologies;

    /**
     * @description data.replicationDelay
     * @var integer
     */
    public $delayedSeconds;

    /**
     * @description data.syncDeadline
     * @var string
     */
    public $expiredTime;

    /**
     * @description data.srcReadWriteMode
     * @var string
     */
    public $rdsReadWriteMode;

    /**
     * @description data.dstReadWriteMode
     * @var string
     */
    public $DBClusterReadWriteMode;

    /**
     * @description data.comment
     * @var string
     */
    public $comment;

    /**
     * @description data.dstEndpointList
     * @var array
     */
    public $DBClusterEndpointList;

    /**
     * @description data.srcEndpointList
     * @var array
     */
    public $rdsEndpointList;

}
