UniBit Helper
=============

Useful php script to define a state of bit given.


Posibilities
------------

* Check if Bit number is set to 1 in variable
* Turn On/Off bit number in variable
* Set random state for Bit
* Toggle Bit state



Usage
-----
```php

//use namespace

use UniBit\UniBit;

echo UniBit::IsBitSet(0x00000000,5);

```

Testing
-------
```php

//use namespace

use UniBit\UniBitTest;

UniBit::RunTest();

```


