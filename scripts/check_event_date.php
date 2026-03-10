<?php
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Event;

$event = Event::first();
if (! $event) {
    echo "NO_EVENT\n";
    exit;
}

$date = $event->date;
if (is_object($date)) {
    echo 'CLASS:' . get_class($date) . "\n";
    echo 'FORMAT:' . $date->format('Y-m-d H:i') . "\n";
} else {
    echo 'TYPE:' . gettype($date) . "\n";
    echo 'VALUE:' . $date . "\n";
}
