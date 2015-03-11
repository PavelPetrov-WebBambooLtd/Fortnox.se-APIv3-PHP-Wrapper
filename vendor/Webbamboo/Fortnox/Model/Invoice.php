<?php
namespace Webbamboo\Fortnox\Model;

interface iInvoice {
    public function getAdministrationfee();
    public function setAdministrationfee($administrationfee);
    public function getAddress1();
    public function setAddress1($address1);
    public function getAddress2();
    public function setAddress2($address2);
    public function getCreditinvoicereference();
    public function setCreditinvoicereference($creditinvoicereference);
    public function getCity();
    public function setCity($city);
    public function getComments();
    public function setComments($comments);
    public function getCountry();
    public function setCountry($country);
    public function getCostcenter();
    public function setCostcenter($costcenter);
    public function getCurrency();
    public function setCurrency($currency);
    public function getCurrencyrate();
    public function setCurrencyrate($currencyrate);
    public function getCurrencyunit();
    public function setCurrencyunit($currencyunit);
    public function getCustomername();
    public function setCustomername($customername);
    public function getDeliveryaddress1();
    public function setDeliveryaddress1($deliveryaddress1);
    public function getDeliveryaddress2();
    public function setDeliveryaddress2($deliveryaddress2);
    public function getDeliverycity();
    public function setDeliverycity($deliverycity);
    public function getDeliverycountry();
    public function setDeliverycountry($deliverycountry);
    public function getDeliverydate();
    public function setDeliverydate($deliverydate);
    public function getDeliveryzipcode();
    public function setDeliveryzipcode($deliveryzipcode);
    public function getDocumentnumber();
    public function setDocumentnumber($documentnumber);
    public function getDuedate();
    public function setDuedate($duedate);
    public function getEdiinformation();
    public function setEdiinformation($ediinformation);
    public function getEmailinformation();
    public function setEmailinformation($emailinformation);
    public function getExternalinvoicereference1();
    public function setExternalinvoicereference1($externalinvoicereference1);
    public function getExternalinvoicereference();
    public function setExternalinvoicereference($externalinvoicereference);
    public function getFreight();
    public function setFreight($freight);
    public function getInvoicedate();
    public function setInvoicedate($invoicedate);
    public function getInvoicerows();
    public function setInvoicerows($invoicerows);
    public function getInvoicetype();
    public function getLanguage();
    public function setLanguage($language);
    public function getNotcompleted();
    public function setNotcompleted($notcompleted);
    public function getOcr();
    public function setOcr($ocr);
    public function getOurreference();
    public function setOurreference($ourreference);
    public function getPhone1();
    public function setPhone1($phone1);
    public function getPhone2();
    public function setPhone2($phone2);
    public function getPricelist();
    public function setPricelist($pricelist);
    public function getPrinttemplate();
    public function setPrinttemplate($printtemplate);
    public function getProject();
    public function setProject($project);
    public function getRemarks();
    public function setRemarks($remarks);
    public function getTermsofdelivery();
    public function setTermsofdelivery($termsofdelivery);
    public function getTermsofpayment();
    public function setTermsofpayment($termsofpayment);
    public function getVatincluded();
    public function setVatincluded($vatincluded);
    public function getWayofdelivery();
    public function setWayofdelivery($wayofdelivery);
    public function getYourordernumber();
    public function setYourordernumber($yourordernumber);
    public function getYourreference();
    public function setYourreference($yourreference);
    public function getZipcode();
    public function setZipcode($zipcode);
}

class Invoice implements iInvoice {
    protected $administrationfee;
    protected $address1;
    protected $address2;
    protected $creditinvoicereference;
    protected $city;
    protected $comments;
    protected $country;
    protected $costcenter;
    protected $currency;
    protected $currencyrate;
    protected $currencyunit;
    protected $customername;
    protected $deliveryaddress1;
    protected $deliveryaddress2;
    protected $deliverycity;
    protected $deliverycountry;
    protected $deliverydate;
    protected $deliveryzipcode;
    protected $documentnumber;
    protected $duedate;
    protected $ediinformation;
    protected $emailinformation;
    protected $externalinvoicereference1;
    protected $externalinvoicereference;
    protected $freight;
    protected $invoicedate;
    protected $invoicerows = array();
    protected $invoicetype;
    protected $language;
    protected $notcompleted;
    protected $ocr;
    protected $ourreference;
    protected $phone1;
    protected $phone2;
    protected $pricelist;
    protected $printtemplate;
    protected $project;
    protected $remarks;
    protected $termsofdelivery;
    protected $termsofpayment;
    protected $vatincluded;
    protected $wayofdelivery;
    protected $yourordernumber;
    protected $yourreference;
    protected $zipcode;

    public function getAdministrationfee(){
        return $this->administrationfee;
    }

    public function setAdministrationfee($administrationfee){
        $this->administrationfee = $administrationfee;
        return $this;
    }

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

    public function getCreditinvoicereference(){
        return $this->creditinvoicereference;
    }

    public function setCreditinvoicereference($creditinvoicereference){
        $this->creditinvoicereference = $creditinvoicereference;
        return $this;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
        return $this;
    }

    public function getComments(){
        return $this->comments;
    }

    public function setComments($comments){
        $this->comments = $comments;
        return $this;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
        return $this;
    }

    public function getCostcenter(){
        return $this->costcenter;
    }

    public function setCostcenter($costcenter){
        $this->costcenter = $costcenter;
        return $this;
    }

    public function getCurrency(){
        return $this->currency;
    }

    public function setCurrency($currency){
        $this->currency = $currency;
        return $this;
    }

    public function getCurrencyrate(){
        return $this->currencyrate;
    }

    public function setCurrencyrate($currencyrate){
        $this->currencyrate = $currencyrate;
        return $this;
    }

    public function getCurrencyunit(){
        return $this->currencyunit;
    }

    public function setCurrencyunit($currencyunit){
        $this->currencyunit = $currencyunit;
        return $this;
    }

    public function getCustomername(){
        return $this->customername;
    }

    public function setCustomername($customername){
        $this->customername = $customername;
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

    public function getDeliverydate(){
        return $this->deliverydate;
    }

    public function setDeliverydate($deliverydate){
        $this->deliverydate = $deliverydate;
        return $this;
    }

    public function getDeliveryzipcode(){
        return $this->deliveryzipcode;
    }

    public function setDeliveryzipcode($deliveryzipcode){
        $this->deliveryzipcode = $deliveryzipcode;
        return $this;
    }

    public function getDocumentnumber(){
        return $this->documentnumber;
    }

    public function setDocumentnumber($documentnumber){
        $this->documentnumber = $documentnumber;
        return $this;
    }

    public function getDuedate(){
        return $this->duedate;
    }

    public function setDuedate($duedate){
        $this->duedate = $duedate;
        return $this;
    }

    public function getEdiinformation(){
        return $this->ediinformation;
    }

    public function setEdiinformation(EDIInformation $ediinformation){
        $this->ediinformation = $ediinformation->toArray();
        return $this;
    }

    public function getEmailinformation(){
        return $this->emailinformation;
    }

    public function setEmailinformation(EmailInformation $emailinformation){
        $this->emailinformation = $emailinformation->toArray();
        return $this;
    }

    public function getExternalinvoicereference1(){
        return $this->externalinvoicereference1;
    }

    public function setExternalinvoicereference1($externalinvoicereference1){
        $this->externalinvoicereference1 = $externalinvoicereference1;
        return $this;
    }

    public function getExternalinvoicereference(){
        return $this->externalinvoicereference;
    }

    public function setExternalinvoicereference($externalinvoicereference){
        $this->externalinvoicereference = $externalinvoicereference;
        return $this;
    }

    public function getFreight(){
        return $this->freight;
    }

    public function setFreight($freight){
        $this->freight = $freight;
        return $this;
    }

    public function getInvoicedate(){
        return $this->invoicedate;
    }

    public function setInvoicedate($invoicedate){
        $this->invoicedate = $invoicedate;
        return $this;
    }

    public function getInvoicerows(){
        return $this->invoicerows;
    }

    public function addInvoicerow(InvoiceRow $invoicerow){
        $this->invoicerows[] = $invoicerow->toArray();
        return $this;
    }

    public function getInvoicetype(){
        return $this->invoicetype;
    }

    public function setInvoicetype($invoicetype){
        $this->invoicetype = $invoicetype;
        return $this;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function setLanguage($language){
        $this->language = $language;
        return $this;
    }

    public function getNotcompleted(){
        return $this->notcompleted;
    }

    public function setNotcompleted($notcompleted){
        $this->notcompleted = $notcompleted;
        return $this;
    }

    public function getOcr(){
        return $this->ocr;
    }

    public function setOcr($ocr){
        $this->ocr = $ocr;
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

    public function getPrinttemplate(){
        return $this->printtemplate;
    }

    public function setPrinttemplate($printtemplate){
        $this->printtemplate = $printtemplate;
        return $this;
    }

    public function getProject(){
        return $this->project;
    }

    public function setProject($project){
        $this->project = $project;
        return $this;
    }

    public function getRemarks(){
        return $this->remarks;
    }

    public function setRemarks($remarks){
        $this->remarks = $remarks;
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

    public function getVatincluded(){
        return $this->vatincluded;
    }

    public function setVatincluded($vatincluded){
        $this->vatincluded = $vatincluded;
        return $this;
    }

    public function getWayofdelivery(){
        return $this->wayofdelivery;
    }

    public function setWayofdelivery($wayofdelivery){
        $this->wayofdelivery = $wayofdelivery;
        return $this;
    }

    public function getYourordernumber(){
        return $this->yourordernumber;
    }

    public function setYourordernumber($yourordernumber){
        $this->yourordernumber = $yourordernumber;
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
}

class InvoiceRow {
    protected $accountnumber;
    protected $articlenumber;
    protected $costcenter;
    protected $deliveredquantity;
    protected $description;
    protected $discount;
    protected $discounttype;
    protected $housework;
    protected $price;
    protected $project;
    protected $unit;
    protected $VAT;

    public function getAccountnumber(){
        return $this->accountnumber;
    }

    public function setAccountnumber($accountnumber){
        $this->accountnumber = $accountnumber;
        return $this;
    }

    public function getArticlenumber(){
        return $this->articlenumber;
    }

    public function setArticlenumber($articlenumber){
        $this->articlenumber = $articlenumber;
        return $this;
    }

    public function getCostcenter(){
        return $this->costcenter;
    }

    public function setCostcenter($costcenter){
        $this->costcenter = $costcenter;
        return $this;
    }

    public function getDeliveredquantity(){
        return $this->deliveredquantity;
    }

    public function setDeliveredquantity($deliveredquantity){
        $this->deliveredquantity = $deliveredquantity;
        return $this;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
        return $this;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount($discount){
        $this->discount = $discount;
        return $this;
    }

    public function getDiscounttype(){
        return $this->discounttype;
    }

    public function setDiscounttype($discounttype){
        $this->discounttype = $discounttype;
        return $this;
    }

    public function getHousework(){
        return $this->housework;
    }

    public function setHousework($housework){
        $this->housework = $housework;
        return $this;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
        return $this;
    }

    public function getProject(){
        return $this->project;
    }

    public function setProject($project){
        $this->project = $project;
        return $this;
    }

    public function getUnit(){
        return $this->unit;
    }

    public function setUnit($unit){
        $this->unit = $unit;
        return $this;
    }

    public function getVAT(){
        return $this->VAT;
    }

    public function setVAT($VAT){
        $this->VAT = $VAT;
        return $this;
    }

    public function toArray()
    {
        $InvoiceRow = [
            "AccountNumber" => $this->getAccountnumber(),
            "ArticleNumber" => $this->getArticlenumber(),
            "CostCenter" => $this->getCostcenter(),
            "DeliveredQuantity" => $this->getDeliveredquantity(),
            "Description" => $this->getDescription(),
            "Discount" => $this->getDiscount(),
            "DiscountType" => $this->getDiscounttype(),
            "HouseWork" => $this->getHousework(),
            "Price" => $this->getPrice(),
            "Project" => $this->getProject(),
            "Unit" => $this->getUnit(),
            "VAT" => $this->getVAT()
        ];
        return $InvoiceRow;
    }
}

class EDIInformation {
    protected $edigloballocationnumber;
    protected $edigloballocationnumberdelivery;
    protected $ediinvoiceextra1;
    protected $ediinvoiceextra2;
    protected $ediourelectronicreference;
    protected $ediyourelectronicreference;

    public function getEdigloballocationnumber(){
        return $this->edigloballocationnumber;
    }

    public function setEdigloballocationnumber($edigloballocationnumber){
        $this->edigloballocationnumber = $edigloballocationnumber;
        return $this;
    }

    public function getEdigloballocationnumberdelivery(){
        return $this->edigloballocationnumberdelivery;
    }

    public function setEdigloballocationnumberdelivery($edigloballocationnumberdelivery){
        $this->edigloballocationnumberdelivery = $edigloballocationnumberdelivery;
        return $this;
    }

    public function getEdiinvoiceextra1(){
        return $this->ediinvoiceextra1;
    }

    public function setEdiinvoiceextra1($ediinvoiceextra1){
        $this->ediinvoiceextra1 = $ediinvoiceextra1;
        return $this;
    }

    public function getEdiinvoiceextra2(){
        return $this->ediinvoiceextra2;
    }

    public function setEdiinvoiceextra2($ediinvoiceextra2){
        $this->ediinvoiceextra2 = $ediinvoiceextra2;
        return $this;
    }

    public function getEdiourelectronicreference(){
        return $this->ediourelectronicreference;
    }

    public function setEdiourelectronicreference($ediourelectronicreference){
        $this->ediourelectronicreference = $ediourelectronicreference;
        return $this;
    }

    public function getEdiyourelectronicreference(){
        return $this->ediyourelectronicreference;
    }

    public function setEdiyourelectronicreference($ediyourelectronicreference){
        $this->ediyourelectronicreference = $ediyourelectronicreference;
        return $this;
    }

    public function toArray()
    {
        $EDIInformation = [
            "EDIGlobalLocationNumber" => $this->getEdigloballocationnumber(),
            "EDIGlobalLocationNumberDelivery" => $this->getEdigloballocationnumberdelivery(),
            "EDIInvoiceExtra1" => $this->getEdiinvoiceextra1(),
            "EDIInvoiceExtra2" => $this->getEdiinvoiceextra2(),
            "EDIOurElectronicReference" => $this->getEdiourelectronicreference(),
            "EDIYourElectronicReference" => $this->getEdiyourelectronicreference()
        ];
        return $EDIInformation;
    }
}

class EmailInformation {
    protected $emailaddressto;
    protected $emailaddresscc;
    protected $emailaddressbcc;
    protected $emailsubject;
    protected $emailbody;

    public function getEmailaddressto(){
        return $this->emailaddressto;
    }

    public function setEmailaddressto($emailaddressto){
        $this->emailaddressto = $emailaddressto;
        return $this;
    }

    public function getEmailaddresscc(){
        return $this->emailaddresscc;
    }

    public function setEmailaddresscc($emailaddresscc){
        $this->emailaddresscc = $emailaddresscc;
        return $this;
    }

    public function getEmailaddressbcc(){
        return $this->emailaddressbcc;
    }

    public function setEmailaddressbcc($emailaddressbcc){
        $this->emailaddressbcc = $emailaddressbcc;
        return $this;
    }

    public function getEmailsubject(){
        return $this->emailsubject;
    }

    public function setEmailsubject($emailsubject){
        $this->emailsubject = $emailsubject;
        return $this;
    }

    public function getEmailbody(){
        return $this->emailbody;
    }

    public function setEmailbody($emailbody){
        $this->emailbody = $emailbody;
        return $this;
    }

    public function toArray()
    {
        $emailInformation = [
            "EmailAddressTo" => $this->getEmailaddressto(),
            "EmailAddressCC" => $this->getEmailaddresscc(),
            "EmailAddressBCC" => $this->getEmailaddressbcc(),
            "EmailSubject" => $this->getEmailsubject(),
            "EmailBody" => $this->getEmailbody()
        ];
        return $emailInformation;
    }
}
