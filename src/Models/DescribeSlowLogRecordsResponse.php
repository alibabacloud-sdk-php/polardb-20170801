<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogRecordsResponse\items;

class DescribeSlowLogRecordsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBClusterId' => 'DBClusterId',
        'engine' => 'Engine',
        'totalRecordCount' => 'TotalRecordCount',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['Engine'] = $this->engine;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSlowLogRecordsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['TotalRecordCount'])){
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageRecordCount'])){
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBClusterId;

    /**
     * @description data.engine
     * @var string
     */
    public $engine;

    /**
     * @description data.totalRecords
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description data.pageNumbers
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.sqlItemsNumbers
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description data.sqls
     * @var items
     */
    public $items;

}
