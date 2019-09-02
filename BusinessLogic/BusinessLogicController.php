<?php

namespace Statamic\Addons\BusinessLogic;

use Statamic\API\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Statamic\Extend\Controller;

class BusinessLogicController extends Controller
{
    
    // Call this by sending a GET request to /!/businesslogic/example
    public function getExample() {

		// API calls are located under BusinessLogicAPI.php
		$call = $this->api('BusinessLogic')->exampleCall();

		return response($call, 200);
    	
    }

    // Call this by sending a GET request to /!/businesslogic/queryexample/{variable}
    public function getQueryExample($var1) {

		return response($var1, 200);
    	
    }


    // Call this by sending a POST request to /!/businesslogic/example
    public function postExample(Request $request) {

    	//do something with the Request

    	//utilizes the Request and Response classes as seen in Laravel
    	if ($request->has('foo')) {

	    	return response($request->foo, 200);

    	} else {

			return response("Foo", 200);    		

    	}

    }

}
