<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function my_tg($x) {
    return sin($x) / cos($x);
}
?>
</body>
</html>