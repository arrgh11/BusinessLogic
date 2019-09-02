## Installation ##

1. Just copy BusinessLogic folder to `site/addons`!

## Usage

### Types

* [**Tags**](#tags): Custom Tags and Variables.
* [**Controllers**](#controllers): Custom request handlers.
* [**API**](#api): 100% customizable functions.

### Tags

Tags let you access your Business Logic variables on the front-end in your template files. Simply call the `{{business_logic}}` tag to access the `index()` function in the `BusinessLogicTags.php` file. Tags can return **strings** or **arrays**.

For additional tags/variables, you can create a method in `BusinessLogicTags.php` for each one. For example:

```
public function example() {
    return 'Howdy';
} 
```

would be called with `{{business_logic:example}}`.

Anytime you wish to pass parameters to the tag, you can access them in the function with the `$this->getParam()` method.

---

### Controllers

Controllers listens for requests from the front-end, handles it appropriately, then returns a response. Responses can be **strings**, **arrays**, or **JSON**. Refer to Laravel's [Response](https://laravel.com/docs/5.8/responses) documentation for a deeper dive. Take a look at the `BusinessLogicController.php` file to see example methods an how to call them.

Requests must be formatted in the following way: `/!/BusinessLogic/{methodName}`. When creating additional methods, the function name must be `CamelCase` and be prepended with appropriate HTTP Verb. For Example:

```
public function getExample() {
    //The HTTP Verb in this case is GET
    //Thereby only accessed when GETTING /!/BusinessLogic/example
    return 'Howdy';
}
```

#### POST Requests

POST requests with BusinessLogic can utilize Laravel's [Request](https://laravel.com/docs/5.8/requests) class (verifing if parameters were passed, etc.).

```
public function postExample(Request $request)
{
    if ($request->has('foo')) {
        return 'bar';
    }
}

```

### API

The API can be 100% customized specifically for your business logic needs. Simply add a method to the `BusinessLogicAPI.php` file like so:

```
public function exampleCall() {
    // Any PHP code you want, calling third-party extensions or whatever your needs may be!
    return 'Sup my dudes.';
}

```

To call the API (either from a Tag or Controller):

`$this->api('BusinessLogic')->exampleCall()`.

## CSRF

By default, CSRF Protection is enabled by default. To allow Anonymous usage, simple go to the BusinessLogic settings in the Addons section of the Control Panel, and turn the `Allow Anonymous` toggle to **ON**.

