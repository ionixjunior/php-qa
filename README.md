PHP-QA
======

PHP Mess Detector
-----------------

$ phpmd src text cleancode,codesize,controversial,design,naming,unusedcode


PHP Code Sniffer
----------------

$ phpcs src --standard=PSR2


PHP Copy/Paste Detector
-----------------------

$ phpcpd src --min-tokens 10


PHPUnit
-------

$ phpunit


PHP Documentor
--------------

$ phpdoc run -d src -t build/phpdoc
