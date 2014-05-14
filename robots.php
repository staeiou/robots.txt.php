<?php
header('Content-Type:text/plain');

echo "User-agent: *" . "\r\n";
echo "Disallow: /" . "\r\n";

echo "User-agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
echo "Allow: /" . "\r\n";

echo "Sitemap: http://www.stuartgeiger.com/sitemap.xml.gz" . "\r\n";
?>
