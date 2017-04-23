<?php

namespace Cheukpang\Tbk\Request;

use Cheukpang\Tbk\IRequest;
use Cheukpang\Tbk\RequestCheckUtil;

/**
 * TOP API: taobao.itemcats.get request
 */
class ItemCatsGetRequest implements IRequest
{

    private $parent_cid;

    private $fields;

    private $apiParas = [];


    public function setPid($parent_cid)
    {
        $this->parent_cid = $parent_cid;
        $this->apiParas["parent_cid"] = $parent_cid;
    }

    public function getPid()
    {
        return $this->parent_cid;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getApiMethodName()
    {
        return "taobao.itemcats.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkMaxValue($this->parent_cid, 2147483647, "parent_cid");
        RequestCheckUtil::checkNotNull($this->fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
