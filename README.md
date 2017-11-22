# docker-php-maxmind-geoip
A simple geoip micro service implementation using the official [php-apache docker image](https://hub.docker.com/_/php/) as base, [libmaxminddb](https://github.com/maxmind/libmaxminddb), [mod_maxminddb](https://github.com/maxmind/mod_maxminddb) and the free Maxmind GeoLite2 db.

This product includes GeoLite2 data created by MaxMind, available from [http://www.maxmind.com](http://www.maxmind.com).

Features:
* It can be easily customized to use the paid version of the GeoIp2 Maxmind db, by just using the paid version download url that includes the access token.
* CORS ready
* Supports retrieving client ip from X-Forwarded-For header
