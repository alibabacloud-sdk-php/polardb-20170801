<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterServerlessConfRequest extends Model
{
    /**
     * @var string
     */
    public $allowShutDown;

    /**
     * @var string
     */
    public $crontabJobId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $fromTimeService;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $plannedEndTime;

    /**
     * @var string
     */
    public $plannedStartTime;

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
    public $scaleApRoNumMax;

    /**
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @var string
     */
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @var string
     */
    public $secondsUntilAutoPause;

    /**
     * @var string
     */
    public $serverlessRuleCpuEnlargeThreshold;

    /**
     * @var string
     */
    public $serverlessRuleCpuShrinkThreshold;

    /**
     * @var string
     */
    public $serverlessRuleMode;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'allowShutDown' => 'AllowShutDown',
        'crontabJobId' => 'CrontabJobId',
        'DBClusterId' => 'DBClusterId',
        'fromTimeService' => 'FromTimeService',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'plannedEndTime' => 'PlannedEndTime',
        'plannedStartTime' => 'PlannedStartTime',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleApRoNumMax' => 'ScaleApRoNumMax',
        'scaleApRoNumMin' => 'ScaleApRoNumMin',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'scaleRoNumMax' => 'ScaleRoNumMax',
        'scaleRoNumMin' => 'ScaleRoNumMin',
        'secondsUntilAutoPause' => 'SecondsUntilAutoPause',
        'serverlessRuleCpuEnlargeThreshold' => 'ServerlessRuleCpuEnlargeThreshold',
        'serverlessRuleCpuShrinkThreshold' => 'ServerlessRuleCpuShrinkThreshold',
        'serverlessRuleMode' => 'ServerlessRuleMode',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }

        if (null !== $this->crontabJobId) {
            $res['CrontabJobId'] = $this->crontabJobId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->fromTimeService) {
            $res['FromTimeService'] = $this->fromTimeService;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->plannedEndTime) {
            $res['PlannedEndTime'] = $this->plannedEndTime;
        }

        if (null !== $this->plannedStartTime) {
            $res['PlannedStartTime'] = $this->plannedStartTime;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }

        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }

        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }

        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }

        if (null !== $this->serverlessRuleCpuEnlargeThreshold) {
            $res['ServerlessRuleCpuEnlargeThreshold'] = $this->serverlessRuleCpuEnlargeThreshold;
        }

        if (null !== $this->serverlessRuleCpuShrinkThreshold) {
            $res['ServerlessRuleCpuShrinkThreshold'] = $this->serverlessRuleCpuShrinkThreshold;
        }

        if (null !== $this->serverlessRuleMode) {
            $res['ServerlessRuleMode'] = $this->serverlessRuleMode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }

        if (isset($map['CrontabJobId'])) {
            $model->crontabJobId = $map['CrontabJobId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['FromTimeService'])) {
            $model->fromTimeService = $map['FromTimeService'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlannedEndTime'])) {
            $model->plannedEndTime = $map['PlannedEndTime'];
        }

        if (isset($map['PlannedStartTime'])) {
            $model->plannedStartTime = $map['PlannedStartTime'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }

        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }

        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }

        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }

        if (isset($map['ServerlessRuleCpuEnlargeThreshold'])) {
            $model->serverlessRuleCpuEnlargeThreshold = $map['ServerlessRuleCpuEnlargeThreshold'];
        }

        if (isset($map['ServerlessRuleCpuShrinkThreshold'])) {
            $model->serverlessRuleCpuShrinkThreshold = $map['ServerlessRuleCpuShrinkThreshold'];
        }

        if (isset($map['ServerlessRuleMode'])) {
            $model->serverlessRuleMode = $map['ServerlessRuleMode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
