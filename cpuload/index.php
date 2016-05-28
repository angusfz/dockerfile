<?php
echo "This version V1";

foreach (apache_request_headers() as $header => $value) {
    echo "$header: $value <br />\n";
}
	phpinfo();

?>
