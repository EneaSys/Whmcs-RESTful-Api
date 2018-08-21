# Whmcs RESTful Api #

## Summary ##

WRA (WHMCS Restful API) is an addon for expose a RESTful API in WHMCS. Using the native API of WHMCS we expose a new end-point inside your WHMCS installation, for use a most simple API interface. This new interface of API (WRA), is documented in swagger and has a client library ready to use. For maintaining the project we use a licenze system: free for small implementation minimal cost of licenze for medium and big implementation

 * http://wra.eneasys.com/
 * https://marketplace.whmcs.com/product/4637

## Installation ##

For installing the WRA just unzip it in the main WHMCS folder. Go in the folder: /modules/addons/wra/api/ and rename the file htaccess.txt to: .htaccess After installation of files, go in Setup>Addon modules and click "Activate" button on the "WHMCS RESTful Api" addon. Now click "Configure" button and you can see in you licenze and licenze token.

When configuring the addon you can select the user used for the API functions. To use the Addon do a call to WRA endpoint:

```
your_installation_of_whmcs/modules/addons/wra/api/
```

## Useful Resources
* [Open Issue](https://github.com/EneaSys/Whmcs-RESTful-Api/issues)
* [Documentation](http://wra.eneasys.com/documentation)

[EneaSys](https://www.eneasys.com)
