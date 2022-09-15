<?php

function exchangeRate()
{
    $EuroRates = null;
    $responseJson = file_get_contents(config('services.exchange_rate.url'));

    if(false !== $responseJson) {

        // Try/catch for json_decode operation
        try {

            // Decoding
            $response = json_decode($responseJson);
            // Check for success
            if('success' === $response->result) {

                // YOUR APPLICATION CODE HERE, e.g.
                $EuroRates = $response->conversion_rates;

            }

        }
        catch(Exception $e) {
            // Handle JSON parse error...
        }

    }
    return $EuroRates;
}

function createExchangeRateFile($exchangeRte, $fileName){

    $fileName =  public_path($fileName);

    $handle = fopen($fileName, 'w');

    foreach ($exchangeRte as $key => $value) {
        $arr = [$key, $value];
        fputcsv($handle, $arr);
    }

    fclose($handle);
}

function csvHeader(): array
{
    return array(
        "Content-type" => "text/csv"
    );
}
