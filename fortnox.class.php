<?php
interface iFortnoxAPI
{

}
class FortnoxAPI
{
    private $authorizationCode = '';
    private $clientSecret = '';
    private $contentType = '';
    private $accepts = '';
    private $endpoint = '';
    private $accessToken = '';

    function __construct($authorizationCode, $accessToken, $clientSecret, $contentType = 'application/json', $accepts = 'application/json', $endpoint = 'https://api.fortnox.se/3/')
    {
        $this->authorizationCode = $authorizationCode;
        $this->clientSecret = $clientSecret;
        $this->contentType = $contentType;
        $this->accepts = $accepts;
        $this->endpoint = $endpoint;
        $this->accessToken = $accessToken;
        var_dump($this->accessToken, $this->clientSecret, $this->contentType, $this->accepts);
    }

    private function apiCall ($requestMethod, $entity, $body = null) {
        $curl = curl_init($this->endpoint . $entity);
        $options = array(
            'Access-Token: '. $this->accessToken .'',
            'Client-Secret: '. $this->clientSecret .'',
            'Content-Type: '. $this->contentType .'',
            'Accept: '. $this->accepts .''
        );

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $options);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $requestMethod);

        if ($requestMethod == 'POST' || $requestMethod == 'PUT') {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        }

        $curlResponse = curl_exec($curl);
        curl_close($curl);
        return $curlResponse;
    }

    private function isValidJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    private function errorCheck($object)
    {
        if( method_exists($object,'ErrorInformation') )
        {
            //Exception
            $exceptionMessage = 'Error: ' . $object->ErrorInformation->error . ', Message: ' .$object->ErrorInformation->message . ', Code: ' . $object->ErrorInformation->code;
            throw new Exception($exceptionMessage, $object->ErrorInformation->code);
        }
    }

    private function parseResponse($string)
    {
        if($this->isValidJson($string))
        {
            $responseObject = json_decode($string);
            try
            {
                $this->errorCheck($responseObject);
                return $responseObject;
            }
            catch( Exception $e )
            {
                echo 'API ERROR: '.$e->getMessage();
            }
        }
        else
        {
            throw new Exception($string);
        }
    }

    public function getInvoices()
    {
        $responseString = $this->apiCall('GET', 'invoices');
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Invoices;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
        }
    }

}
