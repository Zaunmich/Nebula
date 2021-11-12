# Nebula plugin (modern theme for kanboard)

Fixes:
- Nothing was really broken, I just changed the colors

Author
------------
- Valentino Pesce
- Michael Zauner
- License MIT

Requirements
------------
Kanboard >= v1.0.48  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Nebula`
3. Clone this repository into the folder `plugins/Nebula`

Note: Plugin folder is case-sensitive.  
**Important: remove all unused themes**

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php  
### Supports the [Customizer](https://github.com/creecros/Customizer) plugin

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of xxxx
 
```diff
-```xxxx
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
-```
+```php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
+```

```
### :star: If you like it, do not forget to give a star to the [original author](https://github.com/kenlog/Nebula) on GitHub too! 


:bug: Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Nebula/issues) for any bugs you've found.
