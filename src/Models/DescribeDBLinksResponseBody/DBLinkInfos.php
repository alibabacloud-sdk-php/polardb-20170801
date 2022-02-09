<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponseBody;

use AlibabaCloud\Tea\Model;

class DBLinkInfos extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $DBLinkName;

    /**
     * @var string
     */
    public $sourceDBName;

    /**
     * @var string
     */
    public $targetAccount;

    /**
     * @var string
     */
    public $targetDBInstanceName;

    /**
     * @var string
     */
    public $targetDBName;
    protected $_name = [
        'DBInstanceName'       => 'DBInstanceName',
        'DBLinkName'           => 'DBLinkName',
        'sourceDBName'         => 'SourceDBName',
        'targetAccount'        => 'TargetAccount',
        'targetDBInstanceName' => 'TargetDBInstanceName',
        'targetDBName'         => 'TargetDBName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBLinkName) {
            $res['DBLinkName'] = $this->DBLinkName;
        }
        if (null !== $this->sourceDBName) {
            $res['SourceDBName'] = $this->sourceDBName;
        }
        if (null !== $this->targetAccount) {
            $res['TargetAccount'] = $this->targetAccount;
        }
        if (null !== $this->targetDBInstanceName) {
            $res['TargetDBInstanceName'] = $this->targetDBInstanceName;
        }
        if (null !== $this->targetDBName) {
            $res['TargetDBName'] = $this->targetDBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBLinkInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBLinkName'])) {
            $model->DBLinkName = $map['DBLinkName'];
        }
        if (isset($map['SourceDBName'])) {
            $model->sourceDBName = $map['SourceDBName'];
        }
        if (isset($map['TargetAccount'])) {
            $model->targetAccount = $map['TargetAccount'];
        }
        if (isset($map['TargetDBInstanceName'])) {
            $model->targetDBInstanceName = $map['TargetDBInstanceName'];
        }
        if (isset($map['TargetDBName'])) {
            $model->targetDBName = $map['TargetDBName'];
        }

        return $model;
    }
}
