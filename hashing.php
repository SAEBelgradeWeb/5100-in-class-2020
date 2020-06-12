<?php

//echo crc32("Vlada");

//echo md5("Vlada");

//echo sha1('Vlada');

$salt = substr(md5(time()), 0, 22);
echo $hash = crypt("Vlada", '$2y$10$'.$salt);



