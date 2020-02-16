<?php

declare(strict_types=1);

header('Content-Type: application/json');

require __DIR__ . '/../GrafanaOAuth.php';

/**
 * Fetch the details of Grafana user from your database.
 */
$user = require __DIR__ . '/../sample_user.php';

echo (new GrafanaOAuth($user))->token();