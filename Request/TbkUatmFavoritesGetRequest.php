<?php

namespace Cheukpang\Tbk\Request;

use Cheukpang\Tbk\IRequest;
use Cheukpang\Tbk\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.uatm.favorites.get request
 */
class TbkUatmFavoritesGetRequest implements IRequest
{
    /**
     * 需要返回的字段列表，不能为空，字段名之间使用逗号分隔
     **/
    private $fields;

    /**
     * 第几页，从1开始计数
     **/
    private $pageNo;

    /**
     * 默认20，页大小，即每一页的活动个数
     **/
    private $pageSize;

    /**
     * 默认值-1；选品库类型，1：普通选品组，2：高佣选品组，-1，同时输出所有类型的选品组
     **/
    private $type;

    private $time;
    private $apiParas = [];

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
        $this->apiParas["time"] = $time;
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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["page_no"] = $pageNo;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["page_size"] = $pageSize;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getApiMethodName()
    {
        return "taobao.tbk.uatm.favorites.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
