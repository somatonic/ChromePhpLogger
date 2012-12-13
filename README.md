Chrome Php Logger 0.0.1
=======================

Module to log useful details directly in your Chrome JS console. You can inspect most as objects and see infos or values.

- logs render time
- memory consumption
- cpu usage
- user infos with permissions and current page permissions
- current page with all its fields and their value and field settings
- page cache/loaded on request count
- fuel
- modules loaded
- server vars etc.
- mySQL query log

When installed you can also use ChromePhp static methods to output your own data your templates:

```
ChromePhp::log($page->somefield);
```

**Note:**
This module requires the ChromePhp Extension installed to see the log in the Javascript console.
More infos can be found on http://chromephp.com.

created: 12/12/12 by Philipp "Soma" Urlich

### Install

- Put the Downloaded folder named as "ChromePhpLogger" into your site/modules/ folder
- Install it from the Modules screen in the admin panel.
- Enable the ChromePhp Extension for your site in the Browser, simply click the icon in the plugin bar
- Enjoy

