<?php
namespace Fortnox\Model\Customer;

interface iCustomer
{
    public function getUrl();
    public function setUrl($url);
    public function getAddress1();
    public function setAddress1($address1);
    public function getAddress2();
    public function setAddress2($address2);
    public function getCity();
    public function setCity($city);
    public function getCountry();
    public function setCountry($country);
    public function getComments();
    public function setComments($comments);
    public function getCurrency();
    public function setCurrency($currency);
    public function getCostcenter();
    public function setCostcenter($costcenter);
    public function getCountrycode();
    public function setCountrycode($countrycode);
    public function getCustomernumber();
    public function setCustomernumber($customernumber);
    public function getDefaultdeliverytypes();
    public function setDefaultdeliverytypes($defaultdeliverytypes);
    public function getDefaulttemplates();
    public function setDefaulttemplates($defaulttemplates);
    public function getDeliveryaddress1();
    public function setDeliveryaddress1($deliveryaddress1);
    public function getDeliveryaddress2();
    public function setDeliveryaddress2($deliveryaddress2);
    public function getDeliverycity();
    public function setDeliverycity($deliverycity);
    public function getDeliverycountry();
    public function setDeliverycountry($deliverycountry);
    public function getDeliverycountrycode();
    public function setDeliverycountrycode($deliverycountrycode);
    public function getDeliveryfax();
    public function setDeliveryfax($deliveryfax);
    public function getDeliveryname();
    public function setDeliveryname($deliveryname);
    public function getDeliveryphone1();
    public function setDeliveryphone1($deliveryphone1);
    public function getDeliveryphone2();
    public function setDeliveryphone2($deliveryphone2);
    public function getDeliveryzipcode();
    public function setDeliveryzipcode($deliveryzipcode);
    public function getEmail();
    public function setEmail($email);
    public function getEmailinvoice();
    public function setEmailinvoice($emailinvoice);
    public function getEmailinvoicebcc();
    public function setEmailinvoicebcc($emailinvoicebcc);
    public function getEmailinvoicecc();
    public function setEmailinvoicecc($emailinvoicecc);
    public function getEmailoffer();
    public function setEmailoffer($emailoffer);
    public function getEmailofferbcc();
    public function setEmailofferbcc($emailofferbcc);
    public function getEmailoffercc();
    public function setEmailoffercc($emailoffercc);
    public function getEmailorder();
    public function setEmailorder($emailorder);
    public function getEmailorderbcc();
    public function setEmailorderbcc($emailorderbcc);
    public function getEmailordercc();
    public function setEmailordercc($emailordercc);
    public function getFax();
    public function setFax($fax);
    public function getInvoiceadministrationfee();
    public function setInvoiceadministrationfee($invoiceadministrationfee);
    public function getInvoicediscount();
    public function setInvoicediscount($invoicediscount);
    public function getInvoicefreight();
    public function setInvoicefreight($invoicefreight);
    public function getInvoiceremark();
    public function setInvoiceremark($invoiceremark);
    public function getName();
    public function setName($name);
    public function getOrganisationnumber();
    public function setOrganisationnumber($organisationnumber);
    public function getOurreference();
    public function setOurreference($ourreference);
    public function getPhone1();
    public function setPhone1($phone1);
    public function getPhone2();
    public function setPhone2($phone2);
    public function getPricelist();
    public function setPricelist($pricelist);
    public function getProject();
    public function setProject($project);
    public function getSalesaccount();
    public function setSalesaccount($salesaccount);
    public function getShowpricevatincluded();
    public function setShowpricevatincluded($showpricevatincluded);
    public function getTermsofdelivery();
    public function setTermsofdelivery($termsofdelivery);
    public function getTermsofpayment();
    public function setTermsofpayment($termsofpayment);
    public function getType();
    public function setType($type);
    public function getVattype();
    public function setVattype($vattype);
    public function getVisitingaddress();
    public function setVisitingaddress($visitingaddress);
    public function getVisitingcity();
    public function setVisitingcity($visitingcity);
    public function getVisitingcountry();
    public function setVisitingcountry($visitingcountry);
    public function getVisitingcountrycode();
    public function setVisitingcountrycode($visitingcountrycode);
    public function getVisitingzipcode();
    public function setVisitingzipcode($visitingzipcode);
    public function getWww();
    public function setWww($www);
    public function getWayofdelivery();
    public function setWayofdelivery($wayofdelivery);
    public function getYourreference();
    public function setYourreference($yourreference);
    public function getZipcode();
    public function setZipcode($zipcode);
}

class Customer implements iCustomer {
    protected $address1;
    protected $address2;
    protected $city;
    protected $country;
    protected $comments;
    protected $currency;
    protected $costcenter;
    protected $countrycode;
    protected $customernumber;
    protected $defaultdeliverytypes;
    protected $defaulttemplates;
    protected $deliveryaddress1;
    protected $deliveryaddress2;
    protected $deliverycity;
    protected $deliverycountry;
    protected $deliverycountrycode;
    protected $deliveryfax;
    protected $deliveryname;
    protected $deliveryphone1;
    protected $deliveryphone2;
    protected $deliveryzipcode;
    protected $email;
    protected $emailinvoice;
    protected $emailinvoicebcc;
    protected $emailinvoicecc;
    protected $emailoffer;
    protected $emailofferbcc;
    protected $emailoffercc;
    protected $emailorder;
    protected $emailorderbcc;
    protected $emailordercc;
    protected $fax;
    protected $invoiceadministrationfee;
    protected $invoicediscount;
    protected $invoicefreight;
    protected $invoiceremark;
    protected $name;
    protected $organisationnumber;
    protected $ourreference;
    protected $phone1;
    protected $phone2;
    protected $pricelist;
    protected $project;
    protected $salesaccount;
    protected $showpricevatincluded;
    protected $termsofdelivery;
    protected $termsofpayment;
    protected $type;
    protected $vattype;
    protected $visitingaddress;
    protected $visitingcity;
    protected $visitingcountry;CostCenter
    protected $visitingcountrycode;
    protected $visitingzipcode;
    protected $www;
    protected $wayofdelivery;
    protected $yourreference;
    protected $zipcode;

    public function getAddress1(){
        return $this->address1;
    }

    public function setAddress1($address1){
        $this->address1 = $address1;
        return $this;
    }

    public function getAddress2(){
        return $this->address2;
    }

    public function setAddress2($address2){
        $this->address2 = $address2;
        return $this;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
        return $this;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
        return $this;
    }

    public function getComments(){
        return $this->comments;
    }

    public function setComments($comments){
        $this->comments = $comments;
        return $this;
    }

    public function getCurrency(){
        return $this->currency;
    }

    public function setCurrency($currency){
        $this->currency = $currency;
        return $this;
    }

    public function getCostcenter(){
        return $this->costcenter;
    }

    public function setCostcenter($costcenter){
        $this->costcenter = $costcenter;
        return $this;
    }

    public function getCountrycode(){
        return $this->countrycode;
    }

    public function setCountrycode($countrycode){
        $this->countrycode = $countrycode;
        return $this;
    }

    public function getCustomernumber(){
        return $this->customernumber;
    }

    public function setCustomernumber($customernumber){
        $this->customernumber = $customernumber;
        return $this;
    }

    public function getDefaultdeliverytypes(){
        return $this->defaultdeliverytypes;
    }

    public function setDefaultdeliverytypes($defaultdeliverytypes){
        $this->defaultdeliverytypes = $defaultdeliverytypes;
        return $this;
    }

    public function getDefaulttemplates(){
        return $this->defaulttemplates;
    }

    public function setDefaulttemplates($defaulttemplates){
        $this->defaulttemplates = $defaulttemplates;
        return $this;
    }

    public function getDeliveryaddress1(){
        return $this->deliveryaddress1;
    }

    public function setDeliveryaddress1($deliveryaddress1){
        $this->deliveryaddress1 = $deliveryaddress1;
        return $this;
    }

    public function getDeliveryaddress2(){
        return $this->deliveryaddress2;
    }

    public function setDeliveryaddress2($deliveryaddress2){
        $this->deliveryaddress2 = $deliveryaddress2;
        return $this;
    }

    public function getDeliverycity(){
        return $this->deliverycity;
    }

    public function setDeliverycity($deliverycity){
        $this->deliverycity = $deliverycity;
        return $this;
    }

    public function getDeliverycountry(){
        return $this->deliverycountry;
    }

    public function setDeliverycountry($deliverycountry){
        $this->deliverycountry = $deliverycountry;
        return $this;
    }

    public function getDeliverycountrycode(){
        return $this->deliverycountrycode;
    }

    public function setDeliverycountrycode($deliverycountrycode){
        $this->deliverycountrycode = $deliverycountrycode;
        return $this;
    }

    public function getDeliveryfax(){
        return $this->deliveryfax;
    }

    public function setDeliveryfax($deliveryfax){
        $this->deliveryfax = $deliveryfax;
        return $this;
    }

    public function getDeliveryname(){
        return $this->deliveryname;
    }

    public function setDeliveryname($deliveryname){
        $this->deliveryname = $deliveryname;
        return $this;
    }

    public function getDeliveryphone1(){
        return $this->deliveryphone1;
    }

    public function setDeliveryphone1($deliveryphone1){
        $this->deliveryphone1 = $deliveryphone1;
        return $this;
    }

    public function getDeliveryphone2(){
        return $this->deliveryphone2;
    }

    public function setDeliveryphone2($deliveryphone2){
        $this->deliveryphone2 = $deliveryphone2;
        return $this;InvoiceFreight
    }

    public function getDeliveryzipcode(){
        return $this->deliveryzipcode;
    }

    public function setDeliveryzipcode($deliveryzipcode){
        $this->deliveryzipcode = $deliveryzipcode;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getEmailinvoice(){
        return $this->emailinvoice;
    }

    public function setEmailinvoice($emailinvoice){
        $this->emailinvoice = $emailinvoice;
        return $this;
    }

    public function getEmailinvoicebcc(){
        return $this->emailinvoicebcc;
    }

    public function setEmailinvoicebcc($emailinvoicebcc){
        $this->emailinvoicebcc = $emailinvoicebcc;
        return $this;
    }

    public function getEmailinvoicecc(){
        return $this->emailinvoicecc;
    }

    public function setEmailinvoicecc($emailinvoicecc){
        $this->emailinvoicecc = $emailinvoicecc;
        return $this;
    }

    public function getEmailoffer(){
        return $this->emailoffer;
    }

    public function setEmailoffer($emailoffer){
        $this->emailoffer = $emailoffer;
        return $this;
    }

    public function getEmailofferbcc(){
        return $this->emailofferbcc;
    }

    public function setEmailofferbcc($emailofferbcc){
        $this->emailofferbcc = $emailofferbcc;
        return $this;
    }

    public function getEmailoffercc(){
        return $this->emailoffercc;
    }

    public function setEmailoffercc($emailoffercc){
        $this->emailoffercc = $emailoffercc;
        return $this;
    }

    public function getEmailorder(){
        return $this->emailorder;
    }

    public function setEmailorder($emailorder){
        $this->emailorder = $emailorder;
        return $this;
    }

    public function getEmailorderbcc(){
        return $this->emailorderbcc;
    }

    public function setEmailorderbcc($emailorderbcc){
        $this->emailorderbcc = $emailorderbcc;
        return $this;
    }

    public function getEmailordercc(){
        return $this->emailordercc;
    }

    public function setEmailordercc($emailordercc){
        $this->emailordercc = $emailordercc;
        return $this;
    }

    public function getFax(){
        return $this->fax;
    }

    public function setFax($fax){
        $this->fax = $fax;
        return $this;
    }

    public function getInvoiceadministrationfee(){
        return $this->invoiceadministrationfee;
    }

    public function setInvoiceadministrationfee($invoiceadministrationfee){
        $this->invoiceadministrationfee = $invoiceadministrationfee;
        return $this;
    }

    public function getInvoicediscount(){
        return $this->invoicediscount;
    }

    public function setInvoicediscount($invoicediscount){
        $this->invoicediscount = $invoicediscount;
        return $this;
    }

    public function getInvoicefreight(){
        return $this->invoicefreight;
    }

    public function setInvoicefreight($invoicefreight){
        $this->invoicefreight = $invoicefreight;
        return $this;
    }
InvoiceFreight
    public function getInvoiceremark(){
        return $this->invoiceremark;
    }

    public function setInvoiceremark($invoiceremark){
        $this->invoiceremark = $invoiceremark;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getOrganisationnumber(){
        return $this->organisationnumber;
    }

    public function setOrganisationnumber($organisationnumber){
        $this->organisationnumber = $organisationnumber;
        return $this;
    }

    public function getOurreference(){
        return $this->ourreference;
    }

    public function setOurreference($ourreference){
        $this->ourreference = $ourreference;
        return $this;
    }

    public function getPhone1(){
        return $this->phone1;
    }

    public function setPhone1($phone1){
        $this->phone1 = $phone1;
        return $this;
    }

    public function getPhone2(){
        return $this->phone2;
    }

    public function setPhone2($phone2){
        $this->phone2 = $phone2;
        return $this;
    }

    public function getPricelist(){
        return $this->pricelist;
    }

    public function setPricelist($pricelist){
        $this->pricelist = $pricelist;
        return $this;
    }

    public function getProject(){
        return $this->project;
    }

    public function setProject($project){
        $this->project = $project;
        return $this;
    }

    public function getSalesaccount(){
        return $this->salesaccount;
    }

    public function setSalesaccount($salesaccount){
        $this->salesaccount = $salesaccount;
        return $this;
    }

    public function getShowpricevatincluded(){
        return $this->showpricevatincluded;
    }

    public function setShowpricevatincluded($showpricevatincluded){
        $this->showpricevatincluded = $showpricevatincluded;
        return $this;
    }

    public function getTermsofdelivery(){
        return $this->termsofdelivery;
    }

    public function setTermsofdelivery($termsofdelivery){
        $this->termsofdelivery = $termsofdelivery;
        return $this;
    }

    public function getTermsofpayment(){
        return $this->termsofpayment;
    }

    public function setTermsofpayment($termsofpayment){
        $this->termsofpayment = $termsofpayment;
        return $this;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }

    public function getVattype(){
        return $this->vattype;
    }

    public function setVattype($vattype){
        $this->vattype = $vattype;
        return $this;
    }

    public function getVisitingaddress(){
        return $this->visitingaddress;
    }

    public function setVisitingaddress($visitingaddress){
        $this->visitingaddress = $visitingaddress;
        return $this;
    }

    public function getVisitingcity(){
        return $this->visitingcity;
    }

    public function setVisitingcity($visitingcity){
        $this->visitingcity = $visitingcity;
        return $this;
    }

    public function getVisitingcountry(){
        return $this->visitingcountry;
    }

    public function setVisitingcountry($visitingcountry){
        $this->visitingcountry = $visitingcountry;
        return $this;
    }

    public function getVisitingcountrycode(){
        return $this->visitingcountrycode;
    }

    public function setVisitingcountrycode($visitingcountrycode){
        $this->visitingcountrycode = $visitingcountrycode;
        return $this;
    }

    public function getVisitingzipcode(){
        return $this->visitingzipcode;
    }

    public function setVisitingzipcode($visitingzipcode){
        $this->visitingzipcode = $visitingzipcode;
        return $this;
    }

    public function getWww(){
        return $this->www;
    }

    public function setWww($www){
        $this->www = $www;
        return $this;
    }

    public function getWayofdelivery(){
        return $this->wayofdelivery;
    }

    public function setWayofdelivery($wayofdelivery){
        $this->wayofdelivery = $wayofdelivery;
        return $this;
    }

    public function getYourreference(){
        return $this->yourreference;
    }

    public function setYourreference($yourreference){
        $this->yourreference = $yourreference;
        return $this;
    }

    public function getZipcode(){
        return $this->zipcode;
    }

    public function setZipcode($zipcode){
        $this->zipcode = $zipcode;
        return $this;
    }

    public __toString() {
           $customer = [
               "Customer" => [
                   "Address1" => $this->getAddress1(),
                   "Address2" => $this->getAddress2(),
                   "City" => $this->getCity(),
                   "Country" => $this->getCountry(),
                   "Comments" => $this->getComments(),
                   "Currency" => $this->getCurrency(),
                   "CostCenter" => $this->getCostcenter(),
                   "CountryCode" => $this->getCountrycode(),
                   "CustomerNumber" => $this->getCustomernumber(),
                   "DefaultDeliveryTypes" => $this->getDefaultdeliverytypes(),
                   "DefaultTemplates" => $this->getDefaulttemplates(),
                   "DeliveryAddress1" => $this->getDeliveryaddress1(),
                   "DeliveryAddress2" => $this->getDeliveryaddress2(),
                   "DeliveryCity" => $this->getDeliverycity(),
                   "DeliveryCountry" => $this->getDeliverycountry(),
                   "DeliveryCountryCode" => $this->getDeliverycountrycode(),
                   "DeliveryFax" => $this->getDeliveryfax(),
                   "DeliveryName" => $this->getDeliveryname(),
                   "DeliveryPhone1" => $this->getDeliveryphone1(),
                   "DeliveryPhone2" => $this->getDeliveryphone2(),
                   "DeliveryZipCode" => $this->getDeliveryzipcode(),
                   "Email" => $this->getEmail(),
                   "EmailInvoice" => $this->getEmailinvoice(),
                   "EmailInvoiceBCC" => $this->getEmailinvoicebcc(),
                   "EmailInvoiceCC" => $this->getEmailinvoicecc(),
                   "EmailOffer" => $this->getEmailoffer(),
                   "EmailOfferBCC" => $this->getEmailofferbcc(),
                   "EmailOfferCC" => $this->getEmailoffercc(),
                   "EmailOrder" => $this->getEmailorder(),
                   "EmailOrderBCC" => $this->getEmailorderbcc(),
                   "EmailOrderCC" => $this->getEmailordercc(),
                   "Fax" => $this->getFax(),
                   "InvoiceAdministrationFee" => $this->getInvoiceadministrationfee(),
                   "InvoiceDiscount" => $this->getInvoicediscount(),
                   "InvoiceFreight" => $this->getInvoicefreight(),
                   "InvoiceRemark" => $this->getInvoiceremark(),
                   "Name" => $this->getName(),
                   "OrganisationNumber" => $this->getOrganisationnumber(),
                   "OurReference" => $this->getOurreference(),
                   "Phone1" => $this->getPhone1(),
                   "Phone2" => $this->getPhone2(),
                   "PriceList" => $this->getPricelist(),
                   "Project" => $this->getProject(),
                   "SalesAccount" => $this->getSalesaccount(),
                   "ShowPriceVATIncluded" => $this->getShowpricevatincluded(),
                   "TermsOfDelivery" => $this->getTermsofdelivery(),
                   "TermsOfPayment" => $this->getTermsofpayment(),
                   "Type" => $this->getType(),
                   "VATType" => $this->getVattype(),
                   "VisitingAddress" => $this->getVisitingaddress(),
                   "VisitingCity" => $this->getVisitingcity(),
                   "VisitingCountry" => $this->getVisitingcountry(),
                   "VisitingCountryCode" => $this->getVisitingcountrycode(),
                   "VisitingZipCode" => $this->getVisitingzipcode(),
                   "WWW" => $this->getWww(),
                   "WayOfDelivery" => $this->getWayofdelivery(),
                   "YourReference" => $this->getYourreference(),
                   "ZipCode" => getZipcode()
               ]
           ];
        return json_encode($customer);
    }
}
