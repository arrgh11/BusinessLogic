<?php

namespace Statamic\Addons\BusinessLogic;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Statamic\Extend\API;

class BusinessLogicAPI extends API
{
    /**
     * Accessed by $this->api('BusinessLogic')->exampleCall() from other addons
     */
    public function exampleCall()
    {
        return "howdy";
    }

    /**
     * Accessed by $this->api('BusinessLogic')->exampleParamCall(param) from other addons
     */
    public function exampleParamCall($param)
    {
    	if ($param == 'foo') {

	        return "bar";

    	}
    
    }
}
