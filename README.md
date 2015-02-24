Host your own SMS prize competition using SMS pi but can be altered to use any SMS Service.

import the database to your mysql server

Change the config.php to your settings

```
// Mysql Config
$dbuser = "YOUDBUSERNAME";
$dbpass = "YOURDBPASS";
$dbname = "YOURDATABASENAME";
$dbhost = "localhost";
```

```
//SMSPI HASH
$hash ="";

```

Upload files.

go to the url for your site i.e http://localhost/smsprize/settings.php

Change the settings to what you want press submit and you are done.

Simply point all incoming sms to go to index.pph and when you recive a SMS it will then add it to the DB until the prizes are won.

Even when all prizes have been won it will send a SMS to advise the competition has been won and no more entrys are accepted.

any questions or wish to donate txt3rob@gmail.com
