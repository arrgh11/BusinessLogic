<?php

namespace Statamic\Addons\BusinessLogic;

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
}
