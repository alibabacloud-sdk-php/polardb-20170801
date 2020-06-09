<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse\accounts;

class DescribeAccountsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'accounts' => 'Accounts',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accounts', $this->accounts, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Accounts'] = [];
        if(null !== $this->accounts && is_array($this->accounts)){
            $n = 0;
            foreach($this->accounts as $item){
                $res['Accounts'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAccountsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Accounts'])){
            if(!empty($map['Accounts'])){
                $model->accounts = [];
                $n = 0;
                foreach($map['Accounts'] as $item) {
                    $model->accounts[$n++] = null !== $item ? accounts::fromMap($item) : $item;
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
     * @description data.accounts
     * @var array
     */
    public $accounts;

}
