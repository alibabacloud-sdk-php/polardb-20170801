<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponseBody\items\backup;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var backup[]
     */
    public $backup;
    protected $_name = [
        'backup' => 'Backup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backup) {
            $res['Backup'] = [];
            if (null !== $this->backup && \is_array($this->backup)) {
                $n = 0;
                foreach ($this->backup as $item) {
                    $res['Backup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Backup'])) {
            if (!empty($map['Backup'])) {
                $model->backup = [];
                $n = 0;
                foreach ($map['Backup'] as $item) {
                    $model->backup[$n++] = null !== $item ? backup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
