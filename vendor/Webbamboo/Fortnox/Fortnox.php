<?php
namespace Webbamboo\Fortnox;

use Webbamboo\Fortnox\Model\FortnoxCustomer;
use Webbamboo\Fortnox\Model\FortnoxInvoice;

interface iFortnox
{
    public function getInvoices();
    public function getInvoice($id);
    public function createInvoice(FortnoxInvoice $invoice);
    public function updateInvoice($id, $invoiceArray);
    public function deleteInvoice($id);

    public function getCustomers();
    public function getCustomer($id);
    public function createCustomer(FortnoxInvoice $customer);
    public function updateCustomer($id, FortnoxInvoice $customer);
    public function deleteCustomer($id);
}
/**
 * FortnoxAPI
 *
 * @author     Pavel Petrov <pavel.petrov.wb@gmail.com>
 * @version    0.1
 */
class Fortnox implements iFortnox
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
    }

    /**
     * Sends the request to the Fortnox API
     * @param  string $requestMethod The request method for the api, valid options are POST, GET, PUT, DELETE
     * @param  string $entity        The address of the api call without leading slash ( Excluding the API endpoint )
     * @param  string [$body = null] The request body
     * @return string The API response
     */
    private function apiCall ($requestMethod, $entity, $body = null, $filter=null) {
        $curl = curl_init($this->endpoint . $entity . $filter);
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

    /**
     * Check if an input string is a valid JSON
     * @param  string $string
     * @return bool
     */
    private function isValidJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * Check if the API response contains an error and throws the appropriate exception
     * @param object $object The API response object
     */
    private function errorCheck($object)
    {
        $arrObject = (array)$object;
        if( isset($arrObject['ErrorInformation']) )
        {
            $errorInformation = (array)$arrObject['ErrorInformation'];
            //Exception
            $exceptionMessage = 'Error: ' . $errorInformation['error'] . ', Message: ' .$errorInformation['message'] . ', Code: ' . $errorInformation['code'];
            throw new \Exception($exceptionMessage, $errorInformation['code']);
        }
    }

    /**
     * Checks if the API response is a valid JSON, checks if it contains errors and parses it into an object
     * @param  string $string API response string
     * @return object API response object
     */
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

    /**
     * Requests all invoices
     * @return mixed An array of all Invoices or false on error
     */
    public function getInvoices($filter=null)
    {
        $responseString = $this->apiCall('GET', 'invoices', null, $filter);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Invoices;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Requests an Invoice by ID
     * @param  integer $id The id of the Invoice that is requested
     * @return mixed The invoice object or false on error
     */
    public function getInvoice($id)
    {
        $responseString = $this->apiCall('GET', 'invoices/'.$id);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Invoice;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    public function createInvoice(FortnoxInvoice $invoice)
    {
        $responseString = $this->apiCall('POST', 'invoices', $invoice->__toString());
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Invoice;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Update invoice by ID
     * @param  int $id         The id of the Invoice
     * @param  array $invoiceArray
     * @return mixed  Invoice object or false on error
     */
    public function updateInvoice($id, $invoiceArray)
    {
        $responseString = $this->apiCall('PUT', 'invoices/'.$id, json_encode($invoiceArray));
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Invoice;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Delete Invoice by id
     * @param  integer $id The id of the Invoice
     * @return boolean
     */
    public function deleteInvoice($id)
    {
        $responseString = $this->apiCall('DELETE', 'invoices/'.$id);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return true;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Gets an array of customers
     * @return mixed Array of customers or false on error
     */
    public function getCustomers()
    {
        $responseString = $this->apiCall('GET', 'customers');
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Customers;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Get customer by ID
     * @param  integer $id The id of the Customer
     * @return mixed Customer object or false on error
     */
    public function getCustomer($id)
    {
        $responseString = $this->apiCall('GET', 'customers/'.$id);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Customer;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Create new customer object
     * @param  array $customerArray
     * @return mixed  The customer object or false on error
     */
    public function createCustomer(FortnoxCustomer $customer)
    {
        $responseString = $this->apiCall('POST', 'customers', $customer->__toString());
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Customer;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Update customer by ID
     * @param  int $id         The id of the Customer
     * @param  array $customerArray
     * @return mixed  Customer object or false on error
     */
    public function updateCustomer($id, FortnoxCustomer $customer)
    {
        $responseString = $this->apiCall('PUT', 'customers/'.$id, $customer);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return $responseObject->Customer;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

    /**
     * Delete Customer by id
     * @param  integer $id The id of the Customer
     * @return boolean
     */
    public function deleteCustomer($id)
    {
        $responseString = $this->apiCall('DELETE', 'customers/'.$id);
        try
        {
            $responseObject = $this->parseResponse($responseString);
            return true;
        }
        catch(Exception $e)
        {
            echo 'Can`t parse API response: '.$e->getMessage;
            return false;
        }
    }

}
