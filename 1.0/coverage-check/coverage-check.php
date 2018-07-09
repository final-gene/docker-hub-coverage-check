<?php
/**
 * Based on https://github.com/michaelmoussa/php-coverage-checker
 *
 * @author Frank Giesecke <frank.giesecke@vivamera.com>
 */

$reportFile = $argv[1];
$limit = min(100.0, max(0.0, (float)$argv[2]));

if (!$limit
    || !file_exists($reportFile)
) {
    echo <<<'USAGE'

Coverage Check

    coverage-check <report> <limit>

Analyze the report file and compare the coverage information with the limit (in percent).
If the coverage is lover than the given limit, the check will end with an error.

Example:

    coverage-check clover.xml 80.0


USAGE;
    exit(255);
}

$xml = new SimpleXMLElement(file_get_contents($reportFile));
$metrics = $xml->xpath('//metrics');
$totalElements = 0;
$checkedElements = 0;

foreach ($metrics as $metric) {
    $totalElements += (int)$metric['elements'];
    $checkedElements += (int)$metric['coveredelements'];
}

$coverage = ($totalElements === 0)
    ? 0.0
    : ($checkedElements / $totalElements) * 100;

if ($coverage < $limit) {
    printf(
        'Code coverage is %f%%, which is below the accepted %f%%'. PHP_EOL,
        $coverage,
        $limit
    );
    exit(1);
}

printf(
    'Code coverage is %f%% - OK'. PHP_EOL,
    $coverage
);
