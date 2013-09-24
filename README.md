Website Starter Survival Kit
===============

Website Starter is a simple PHP Framework build to create new Website faster.

#Main Features

- Wordpress ready (In progress...)
- HTML5
- PHP
- CSS3
- LESS
- SVG to PNG fallback for old browsers (lte IE 9)
- jQuery
- HTML5 shiv for IE
- Simple contact form

## Base Wordpress Theme
Base template to get ready to use Wordpress.

## LESS
[LESS](http://lesscss.org/) extends CSS with dynamic behavior such as variables, mixins, operations and functions. A LESS compiler (server-side) or client-side) is needed such as [less.app](http://incident57.com/less/) (mac), [javascript](http://lesscss.org/), etc.

## SVG to PNG
Old browsers such as Internet Explorer 8- does not support SVG files. A few line of javascript are used to create a fallback to replace automatically every SVG files to PNG files. Don't forget to create both images! (See index.php for example)

## Hide file extension
.htaccess file is used to hide .PHP file extension to get clean URL.

## Contact form
Simple contact form ready to use. Replace the receiver email address in sendmail.php to get this working. (See index.php for example)

## Improve page speed
To optimize speed of your pages. Add these code to root .htaccess
```txt
<IfModule mod_expires.c>

	ExpiresActive on
	ExpiresDefault "access plus 1 month"
	ExpiresByType text/cache-manifest "access plus 0 seconds"
	ExpiresByType text/html "access plus 0 seconds"
	ExpiresByType text/xml "access plus 0 seconds"
	ExpiresByType application/xml "access plus 0 seconds"
	ExpiresByType application/json "access plus 0 seconds"
	ExpiresByType image/x-icon "access plus 1 week"
	ExpiresByType image/ico "access plus 1 month"
	ExpiresByType image/gif "access plus 1 month"
	ExpiresByType image/png "access plus 1 month"
	ExpiresByType image/jpg "access plus 1 month"
	ExpiresByType image/svg "access plus 1 month"
	ExpiresByType font/truetype "access plus 1 month"
	ExpiresByType font/opentype "access plus 1 month"
	ExpiresByType application/x-font-woff "access plus 1 month"
	ExpiresByType image/svg+xml "access plus 1 month"
	ExpiresByType application/vnd.ms-fontobject "access plus 1 month"
	ExpiresByType text/css "access plus 1 month"
	ExpiresByType application/javascript "access plus 1 month"
	ExpiresByType text/javascript "access plus 1 month"

	FileETag none
	
	<IfModule mod_headers.c>
		Header append Cache-Control "public"
	</IfModule>
	
</IfModule>

<IfModule mod_deflate.c>
	AddOutputFilterByType DEFLATE text/css text/x-component application/x-javascript application/javascript text/javascript text/x-js text/html text/richtext image/svg+xml text/plain text/xsd text/xsl text/xml image/x-icon application/json
</IfModule>
```

## Meta
/inc/meta.php is used to add content to specific pag (Page title and page description).
```php
<title><?=$title?></title>
<meta name="description" content="<?=$description?>" />
```

## Sprite grid
Sprite grid handling images faster.

