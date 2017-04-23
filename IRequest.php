<?php

namespace Cheukpang\Tbk;

interface IRequest
{

    public function getApiMethodName();

    public function check();

    public function getApiParas();

}