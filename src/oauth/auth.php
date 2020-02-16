<?php

declare(strict_types=1);

require __DIR__ . '/../GrafanaOAuth.php';

/**
 * Fetch the details of Grafana user from your database.
 */
$user = require __DIR__ . '/../sample_user.php';

(new GrafanaOAuth($user))->auth($_GET['state']);