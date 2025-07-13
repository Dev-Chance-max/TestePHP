<?php
    require __DIR__ . '/vendor/autoload.php';
    use Carbon\Carbon;

    echo "<h1>Teste Composer + Carbon</h1>";

    $now = Carbon::now();
    echo "<p>Data e hora atual: " . $now->toDateTimeString() . "</p>";

?>