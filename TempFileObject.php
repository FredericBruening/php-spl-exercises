<?php

/* SplTempFileObject
 *
 */

echo "--- SplTempFileObject ---" . PHP_EOL;

$rates = array(
    array('currency' => 'Australia $', 'rate' => 0.93630),
    array('currency' => 'Canada $', 'rate' => 0.92060),
    array('currency' => 'Euro', 'rate' => 1.35630),
    array('currency' => 'Hong Kong $', 'rate' => 0.12900),
    array('currency' => 'Japan yen', 'rate' => 0.00980),
    array('currency' => 'Swiss franc', 'rate' => 1.11300),
    array('currency' => 'UK sterling', 'rate' => 1.69700)
);

if(isset($_POST['download'])) {
    $titles = array_keys($rates[0]);
    $file = new SplTempFileObject();
    $file->fputcsv($titles);

    foreach ($rates as $currency) {
        $file->fputcsv($currency);
    }
    // rewind pointer
    $file->rewind();

    // response
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=rates.csv');
    $file->fpassthru();

    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <button type="submit" name="download">Download</button>
    </form>
    </body>
</html>
