<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hubapi.com/crm/v3/objects/contacts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer CMqqkaDGMhINAAEAQAAAAQAAAAAwAhjRk5QXIIbo-SMo_eDkAjIUGJOZnOkK98gmqi5DNPnErIBOVaI6MAAAAEEAAAAAAAAAAAAAAAAAgAAAAAAAAAAAACAAAAAAAOABAAAAAAAA4AcGAACQA0IUd3pTo9mVBBfeYN2Gs2CdmmKkOFFKA25hMVIAWgBgAA',
    'Cookie: __cf_bm=VQLBRntwdVWqQVtkDaZCdHCEvBP5w4pOD4a5KEvDfE0-1736842993-1.0.1.1-rZnBxi11P02hz.lDekd_8ExyyX6r9KsroWuVP8fOfcNF65rZdeX.ryT2CSYMNYjUavByHlmuZXLF6osi9Mjdcw'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
