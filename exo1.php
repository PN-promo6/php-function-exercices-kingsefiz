<!-- Façon bête et discipliné -->
<?php

function summy($number)
{
    $result = 0;
    for ($i = 0; $i <= $number; $i++) {
        $result = $result + $i;
    }
    echo $result;
}

summy(1000);

?>

<!-- Façon rapide -->

<?php

function summy($number)
{
    echo (1 + $number) * ($number / 2);
}

summy(10000000000000);
?>