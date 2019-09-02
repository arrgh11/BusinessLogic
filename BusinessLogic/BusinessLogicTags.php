<?php

namespace Statamic\Addons\BusinessLogic;

use Statamic\Extend\Tags;

class BusinessLogicTags extends Tags
{
    

    /**
     * The {{ business_logic }} tag
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    /**
     * The {{ business_logic:example }} tag
     *
     * @return string|array
     */
    public function example()

    {

        return "a string";

    }

    /**
     * The {{ business_logic:params foo="bar"}} tag
     *
     * @return string|array
     */
    public function params()

    {

        $foo = $this->getParam('foo');

        return $foo;

    }

    /**
     * The {{ business_logic:config }} tag
     *
     * This is returning a configuration variable. Config variables can be set up in:
     * addons/BusinessLogic/settings.yaml
     *
     * @return string|array
     */
    public function config()

    {

        return $this->getConfig('foo');

    }
}
