<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^httpmock\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /httpmock.php [L]
</IfModule>
