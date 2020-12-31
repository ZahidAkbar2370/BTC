@extends('frontLayout')
@section('title', 'Home')
@section('content')

<form action="{{ route('make_order') }}" method="post">
@csrf

<div class="card container" style="margin-top:30px;margin-bottom: 30px;    background-image: url(img/bg-img/bg-2.jpg);position: relative;
    z-index: 1;
    background-attachment: fixed;
    position: relative;
    z-index: 2;
    background-position: center center;
    background-size: cover;
    border: 3px solid white">
    <div class="row" style="margin-top: 20px;">

        <div class="col-sm-3">
            
        </div>
         <div class="col-sm-6">
            <h2 class="text-center text-white my-5 bg">Select Amount to Exchange</h2>
            <div class="input-group mb-3">

                <select   id="bitcoin_value" class="cointType" name="bitcoin_convert_to" style="background-color:#e9ecef;width:100% !important;margin-bottom: 20px">
                        <option value="select_currency">Select Currency</option>
                        @foreach ($View_Bit_Cry_Prices as  $Prices)
                            <option value="{{$Prices->symbol }}" coin-id='{{$Prices->id }}' >{{$Prices->symbol }}</option>
                        @endforeach
                    </select>

                    <input type="number" name="bitcoin_entered_amount"  id="bitcoin_value" class="form-control bitcoin_valuefConverion" min="1" value="1" style="background-color:#e9ecef;margin-bottom:20px">


                    <select  id="bitcoin_convert_to" class="currencyType select_currency" name="bitcoin_convert_to" style="background-color:#e9ecef;width:100% !important;margin-bottom:20px">
                        {{-- <option value="">Select Currency You Need</option> --}}
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                        <option value="ALL">ALL</option>
                        <option value="DZD">DZD</option>
                        <option value="ARS">ARS</option>
                        <option value="AMD">AMD</option>
                        <option value="AUD">AUD</option>
                        <option value="AZN">AZN</option>
                        <option value="BHD">BHD</option>
                        <option value="BDT">BDT</option>
                        <option value="BYN">BYN</option>
                        <option value="BMD">BMD</option>
                        <option value="BOB">BOB</option>
                        <option value="BAM">BAM</option>
                        <option value="BRL">BRL</option>
                        <option value="BGN">BGN</option>
                        <option value="KHR">KHR</option>
                        <option value="CAD">CAD</option>
                        <option value="CLP">CLP</option>
                        <option value="CNY">CNY</option>
                        <option value="COP">COP</option>
                        <option value="CRC">CRC</option>
                        <option value="HRK">HRK</option>
                        <option value="CUP">CUP</option>
                        <option value="CZK">CZK</option>
                        <option value="DKK">DKK</option>
                        <option value="PHP">PHP</option>
                        <option value="PLN">PLN</option>
                        <option value="GBP">GBP</option>
                        <option value="QAR">QAR</option>
                        <option value="RON">RON</option>
                        <option value="RUB">RUB</option>
                        <option value="SAR">SAR</option>
                        <option value="RSD">RSD</option>
                        <option value="SGD">SGD</option>
                        <option value="ZAR">ZAR</option>
                        <option value="KRW">KRW</option>
                        <option value="SSP">SSP</option>
                        <option value="VES">VES</option>
                        <option value="LKR">LKR</option>
                        <option value="SEK">SEK</option>
                        <option value="CHF">CHF</option>
                        <option value="THB">THB</option>
                        <option value="TTD">TTD</option>
                        <option value="TND">TND</option>
                        <option value="TRY">TRY</option>
                        <option value="UGX">UGX</option>
                        <option value="UAH">UAH</option>
                        <option value="AED">AED</option>
                        <option value="UYU">UYU</option>
                        <option value="UZS">UZS</option>
                        <option value="VND">VND</option>
                        <option value="DOP">DOP</option>
                        <option value="EGP">EGP</option>
                        <option value="GEL">GEL</option>
                        <option value="GHS">GHS</option>
                        <option value="GTQ">GTQ</option>
                        <option value="HNL">HNL</option>
                        <option value="HKD">HKD</option>
                        <option value="HUF">HUF</option>
                        <option value="ISK">ISK</option>
                        <option value="INR">INR</option>
                        <option value="IDR">IDR</option>
                        <option value="IRR">IRR</option>
                        <option value="IQD">IQD</option>
                        <option value="ILS">ILS</option>
                        <option value="JMD">JMD</option>
                        <option value="JPY">JPY</option>
                        <option value="JOD">JOD</option>
                        <option value="KZT">KZT</option>
                        <option value="KES">KES</option>
                        <option value="KWD">KWD</option>
                        <option value="KGS">KGS</option>
                        <option value="LBP">LBP</option>
                        <option value="MKD">MKD</option>
                        <option value="MYR">MYR</option>
                        <option value="MUR">MUR</option>
                        <option value="MXN">MXN</option>
                        <option value="MDL">MDL</option>
                        <option value="MNT">MNT</option>
                        <option value="MAD">MAD</option>
                        <option value="MMK">MMK</option>
                        <option value="NAD">NAD</option>
                        <option value="NPR">NPR</option>
                        <option value="TWD">TWD</option>
                        <option value="NZD">NZD</option>
                        <option value="NIO">NIO</option>
                        <option value="NGN">NGN</option>
                        <option value="NOK">NOK</option>
                        <option value="OMR">OMR</option>
                        <option value="PKR">PKR</option>
                        <option value="PAB">PAB</option>
                        <option value="PEN">PEN</option>


                        <input type="number" name="bitcoin_converted_amount"  id="bitcoin_value" class="form-control bitcoin_converted_amount select_currency" readonly="" required>
                </select>


            </div>
         </div>
    </div>

    <div class="row" style="margin-top: 10px;margin-bottom:5px;">
        <div class="col-sm-3">
            
        </div>
         <div class="col-sm-6">
            <div class="input-group mb-3">
                <select id="bitcoin_value" class="paymentVal select_currency_to" name="paymentVal" style="width: 100%;background-color:#e9ecef">
                    <option>Select Payment Method</option>
                    <option value="paypal">Paypal</option>
                    <option value="bank_wire">Bank Wire</option>
                    <option value="westren_union">Western Union</option>
                    <option value="perfect_money">Perfect Money</option>
                    <option value="payza">Payza</option>
                    <option value="payoneer">Payoneer</option>
                    <option value="webmoney">Webmoney</option>
                    <option value="okpay">Okpay</option>
                    <option value="skrill">Skrill</option>
                    <option value="nettler">Nettler</option>
                    <option value="dash">Dash</option>
                    <option value="money_gram">Money Gram</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="instaforex">Instaforex</option>
                    <option value="solid_trust_pay">Solid Trust Pay</option>
                    <option value="us_bank">US Bank</option>
                    <option value="advcash">AdvCash</option>
                    <option value="alipay_china">Alipay China</option>
                    <option value="paysafecard">Paysafecard</option>
                    <option value="onecard">OneCard</option>
                    <option value="sofort">SOFORT</option>
                    <option value="qivi_wallet">QIWI Wallet</option>
                    <option value="entromoney">Entromoney</option>
                    <option value="mobile_wallet">Mobile Wallet</option>
                    <option value="wordremit">Word Remit</option>
                    <option value="mobile_pay">Mobile Pay</option>
                    <option value="capital_one">Capital One</option>
                    <option value="apple_pay">Apple Pay</option>
                    <option value="chase_quick_pay">Chase Quick Pay</option>
                    <option value="transfer_wise">TransferWise</option>
                    <option value="venmo_mobile_payment">Venmo Mobile Payment</option>
                    <option value="xoom_money_transfer">Xoom Money Transfer</option>
                    <option value="swift_transfer">Swift Transfer</option>
                    <option value="direct_bank_deposit">Direct Bank Deposit</option>
                    <option value="buy_virtual_card">Buy Virtual Card</option>
                </select>
                                        
            </div>
         </div>
    </div>

    






<div class="row" style="margin-top: 5px;margin-bottom:20px;">

        <div class="col-sm-3">
            
        </div>

         <div class="col-sm-6">
            <div class="input-group mb-3">
                <input type="text" name="paypal_email" class="paypal" placeholder="e.g abc@gmail.com" id="account_id" style="width: 100% !important;margin-bottom:20px" required >

                <input type="text" name="bankwire_holder_name"  placeholder="A/c Holder Name" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="westrenunion_full_name"  placeholder="Full Name" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="perfectmoney_pm_id"  placeholder="PM ID" id="account_id" class="perfect_money" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="payza_payza_email"  placeholder="Payza Email" id="account_id" class="payza" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="payoneer_payoneer_email"  placeholder="Payoneer Email" id="account_id" class="payoneer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="webmoney_webmoney_purse"  placeholder="Webmoney Purse" id="account_id" class="webmoney" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="okpay_okpay_email"  placeholder="Okpay Email" id="account_id" class="okpay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="skrill_skrill_email"  placeholder="Skrill Email" id="account_id" class="skrill" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="nettler_nettler_id"  placeholder="Nettler ID" id="account_id" class="nettler" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="dash_dash_id"  placeholder="Dash ID" id="account_id" class="dash" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="moneygram_full_name"  placeholder="Full Name" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="creditcard_card_number"  placeholder="Card Number" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="instaforex_instaforex_id"  placeholder="Instaforex ID" id="account_id" class="instaforex" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="solidtrustpay_std_id"  placeholder="STD ID" id="account_id" class="solid_trust_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="usbank_us_id"  placeholder="US ID" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px" required>
                                        
                <input type="text" name="advcash_wallet_id"  placeholder="Wallet ID" id="account_id" class="advcash" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="alipaychina_email_id"  placeholder="Email ID" id="account_id" class="alipay_china" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="paysafecard_email_id"  placeholder="Email ID" id="account_id" class="paysafecard" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="onecard_email_id"  placeholder="Email ID" id="account_id" class="onecard" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="sofort_email_id"  placeholder="Email ID" id="account_id" class="sofort" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="qiviwallet_id"  placeholder="ID" id="account_id" class="qivi_wallet" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="wordremit_wallet_address"  placeholder="Wallet Address" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px" required>

{{-- Start///////////////////////////////////Start --}}
                <input type="text" name="mobilepay_full_name"  placeholder="Full Name" id="account_id" class="mobile_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="capitalone_email_id"  placeholder="Email ID" id="account_id" class="capital_one" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="applepay_full_name"  placeholder="Full Name" id="account_id" class="apple_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="chasequickpay_email_id"  placeholder="Email ID" id="account_id" class="chase_quick_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="transferwise_email_address"  placeholder="Email Address" id="account_id" class="transfer_wise" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="venmomobilepayment_full_name"  placeholder="Full Name" id="account_id" class="venmo_mobile_payment" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="riamoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="ria_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="xoommoneytransfer_email_address"  placeholder="Email Address" id="account_id" class="xoom_money_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="swifttransfer_holder_name"  placeholder="A/c Holder Name" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="directbankdeposit_holder_name"  placeholder="A/c Holder Name" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="buyvirtualcard_email_address"  placeholder="Email Address" id="account_id" class="buy_virtual_card" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="mobilewallet_full_name"  placeholder="Full Name" id="account_id" class="mobile_wallet" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name=""  placeholder="Wallet Address" id="account_id" class="payco" style="width: 100% !important;margin-bottom:20px" required>
                                        
                <input type="text" name="entromoney_wallet_address"  placeholder="Wallet Address" id="account_id" class="entromoney" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="yandexmoney_email_address"  placeholder="Email Address" id="account_id" class="yandex_money" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="googlepay_gmail_id"  placeholder="Gmail ID" id="account_id" class="google_pay" style="width: 100% !important;margin-bottom:20px" required>

                <input type="text" name="bankwire_swift_card"  placeholder="Swift Card" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="bankwire_bank_name"  placeholder="Bank Name" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="bankwire_iban"  placeholder="IBAN" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="bankwire_country"  placeholder="Country" id="account_id" class="bank_wire" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="wordremit_swift_card"  placeholder="Swift Card" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="wordremit_bank_name"  placeholder="Bank Name" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="wordremit_iban"  placeholder="IBAN" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="wordremit_country"  placeholder="Country" id="account_id" class="wordremit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="westrenunion_address"  placeholder="Address" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="westrenunion_country"  placeholder="Country" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="westrenunion_phone_no"  placeholder="Phone No" id="account_id" class="westren_union" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="moneygram_address"  placeholder="Address" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>


                <input type="text" name="moneygram_country"  placeholder="Country" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="moneygram_phone_no"  placeholder="Phone No" id="account_id" class="money_gram" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="creditcard_expiry"  placeholder="Expiry m/y" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="creditcard_cvv"  placeholder="CVV" id="account_id" class="credit_card" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="usbank_expiry"  placeholder="Expiry m/y" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px;" required>
                <input type="text" name="usbank_cvv"  placeholder="CVV" id="account_id" class="us_bank" style="width: 100% !important;margin-bottom:20px;" required>
                <input type="text" name="mobilewallet_phone_number"  placeholder="Phone Number" id="account_id" class="mobile_wallet" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="mobilepay_phone_number"  placeholder="Phone Number" id="account_id" class="mobile_pay" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="applepay_phone_number"  placeholder="Phone Number" id="account_id" class="apple_pay" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="venmomobilepayment_phone_number"  placeholder="Phone Number" id="account_id" class="venmo_mobile_payment" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="swifttransfer_swift_transfer"  placeholder="Swift Code" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="swifttransfer_bank_name"  placeholder="Bank Name" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="swifttransfer_iban"  placeholder="IBAN" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="swifttransfer_country"  placeholder="Country" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="directbankdeposit_swift_code"  placeholder="Swift Code" id="account_id" class="swift_transfer" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="directbankdeposit_bank_name"  placeholder="Bank Name" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="directbankdeposit_iban"  placeholder="IBAN" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>

                <input type="text" name="directbankdeposit_country"  placeholder="Country" id="account_id" class="direct_bank_deposit" style="width: 100% !important;margin-bottom:20px;" required>



                <button type="submit" class="btn btn-primary mb-5 font-weight-bold" style="width:250px;background-color:#28A745;border:1px solid orange;height: 60px">Order Now</button>
                                        
            </div>
         </div>
    </div>



    





</div>
</form>



<div class="container-fluid">
            <div class="row table_rows" style="background-color:white">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <center><div class=" " >
                        
                        <div class="card-body text-center shadow-lg border rounded mb-4">
                            
                            <div class="table-responsive">
                                <table id="coins-info-table" class="display coins-table dataTable table table-striped">
                                    <thead>
                                        <tr role="row">
                                            <th class="mobile-hide">Id</th>
                                            <th >Coin Name</th>
                                            <th >Price</th>
                                            <th class="mobile-hide">Market Cap</th>
                                            <th  class="mobile-hide" >Volume (24hr)</th>
                                            <th  class="mobile-hide">Supply</th>
                                            <th  class="mobile-hide">Change (24hr)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($View_Bit_Cry_Prices as  $Prices)
                                        
                                        
                                        <tr>
                                            <td class="mobile-hide">{{ $Prices->id }}</td>
                                            <td>
                                                <span class="sprite sprite-{{ $Prices->slug }} small_coin_logo"></span>
                                                <div class="coin-code">{{ $Prices->symbol }}</div> <strong>{{ $Prices->name }}</strong>
                                            </td>
                                            <td class="market_capital  sorting_1" style="font-size:19px;font-weight: 600;width: 310px">$@php
                                               echo CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price +$Prices->price;
                                            @endphp</td>
                                            <td class="price mobile-hide" data-usd="17,819.1743" style="font-size:19px;font-weight: 600;">{{ $Prices->market_cap}}</td>
                                            <td class="volume mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->volume_24h }}</td>
                                            <td class="supply mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->total_supply }}</td>
                                            <td class="increment change mobile-hide" style="font-size:19px;font-weight: 600;">${{ $Prices->percent_change_24h }}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
        
        <!-- ##### Course Area Start ##### -->
        <div class="cryptos-feature-area section-padding-100-0">
                <div class="container">
                    
                    <div class="row">
                        <!-- Single Course Area -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-feature-area active mb-100  rounded text-justify">
                                <i class="icon-safebox text-center"></i>
                                <h3 class="text-center">Lorem Ipsum</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- Single Course Area -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-feature-area active mb-100 rounded text-justify">
                                <i class="icon-bitcoin text-center"></i>
                                <h3 class="text-center">Lorem Ipsum</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- Single Course Area -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-feature-area active mb-100 rounded text-justify">
                                <i class="icon-exchange text-center"></i>
                                <h3 class="text-center">Lorem Ipsum</h3>
                                <p style="padding-bottom:25px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <!-- Single Course Area -->
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="single-feature-area active mb-100 rounded text-justify">
                                <i class="icon-wallet text-center"></i>
                                <h3 class="text-center">Lorem Ipsum</h3>
                                <p style="padding-bottom:25px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Course Area End ##### -->
            <!-- ##### About Area Start ##### -->
            <div class="container-fluid let_exchange_class" style="background-color:rgb(34, 39, 41) !important">
                <div class="row">
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-center text-white" style="margin-top:20px;">Lorem Ipsum</h4>
                        <p class="text-justify text-white" style="margin-top: 30px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        {{-- <img src="img/download.jpg" width="600" style="margin-top:30px"> --}}
                    </div>
                    <div class="col-md-1">
                        
                    </div>
                    
                    <div class="col-md-1">
                        
                    </div>
                    
                </div>
                <div class="row" style="padding-bottom:40px;">
                    <div class="col-md-1">
                        
                    </div>
                    <div class="col-md-5 ">
                        <img src="img/bitcoin.jpg" width="600" style="border-radius:20px;border:1px solid">
                    </div>
                    <div class="col-md-5">
                        <p class="text-justify text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-1">
                        
                    </div>
                    
                </div>
            </div>
            
            <!-- ##### About Area End ##### -->
            <!-- ##### Currency Area Start ##### -->
            <section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center white mx-auto text-justify">
                                <h4 class="mb-4 text-white">Lorem Ipsum</h4>
                                {{-- <h5 class="mb-2">BTC to usd converter startup current exchange value in all popular currencies like american canadian dollar aud great british pound euro inr php or transfer to paypal.</h5> --}}
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                    
                </section>
                <!-- ##### Currency Area End ##### -->
                <!-- ##### Blog Area Start ##### -->
                <section class="cryptos-blog-area section-padding-100" style="background-color: black;">
                    <div class="container card" style="padding: 40px;border-radius:20px">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="blog-area">
                                    <div class="single-blog-area d-flex align-items-start ">
                                        <div class="blog-thumbnail">
                                            <img src="img/blog-img/paypal (2).png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            <img src="img/blog-img/perfectmoney.png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            <img src="img/blog-img/withdraw.png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            <img src="img/blog-img/westernunio.png" alt="" style="border-radius:20px;height: 90px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="blog-area">
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            {{-- <img src="img/blog-img/1.jpg" alt="" style="border-radius:20px"> --}}
                                            <img src="img/blog-img/paypal (2).png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            {{-- <img src="img/blog-img/1.jpg" alt="" style="border-radius:20px"> --}}
                                            <img src="img/blog-img/perfectmoney.png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            {{-- <img src="img/blog-img/2.jpg" alt="" style="border-radius:20px"> --}}
                                            <img src="img/blog-img/withdraw.png" alt="" style="border-radius:20px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-blog-area d-flex align-items-start">
                                        <div class="blog-thumbnail">
                                            {{-- <img src="img/blog-img/3.jpg" alt="" style="border-radius:20px"> --}}
                                            <img src="{{ asset('img/blog-img/westernunio.png') }}" alt="" style="border-radius:20px;height: 90px">
                                        </div>
                                        <div class="blog-content">
                                            <a href="#" class="post-title">Lorem Ipsum</a>
                                            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </section>
                    <!-- ##### Blog Area End ##### -->
                    <!-- Newsletter Area -->
                    <div class="container-fluid" style="background-color:black;padding-left:130px;padding-right:130px;padding-bottom:40px">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-area mt-100" style="border-radius:20px;">
                                    <div class="section-heading mx-auto">
                                        <h3 class="text-white text-center">Lorem Ipsum</h3>
                                        <p class="text-justify text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            
                                        </div>
                                        <div class="col-md-5 ">
                                            <img src="img/profile_image.jpg" class="rounded-circle">
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Author Profile</h3><br><br>
                                            <strong>Name :</strong><span>Lorem Ipsum</span><br><br>
                                            <strong>Date of birth : </strong><span>01/01/0001</span><br><br>
                                            <strong>Address:</strong><span>Lorem Ipsum</span><br><br>
                                            <strong>Article post date : </strong><span>01/01/0001</span><br><br>
                                            <strong>Last updated :</strong><span>none</span><br><br>
                                            <strong>Total Views : </strong><span>00000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection


                @section('footer')
                  <script >
                    $(document).ready(function () {
    
                        $('.paypal').prop('required',true);
                       function GetbtcConvertedValues(){

                         // $('.loader').show();
                      var   coinid=$('option:selected').attr('coin-id');
                    
                    var coinVal= $('.bitcoin_valuefConverion').val();
                    var coinType= $('.cointType').val();
                    var currencyVal= $('.bitcoin_converted_amount').val();
                    var currencyType= $('.currencyType').val();
                    console.log(coinVal,coinType,currencyVal,currencyType,coinid);
                    // $('.loader').show();
                    $.ajax({
                    url:"{{ route('converter') }}",
                    type:"POST",
                    dataType:"json",
                    data:{coinVal:coinVal,coinType:coinType,currencyVal:currencyVal,currencyType:currencyType,coinid:coinid,_token:"{{ csrf_token() }}"},
                    success:function(res)
                    {
                        
                        
                       
                        var converted_amount= + res.data.quote[currencyType].price + +{{ CH::Get_Latest_Additional_price()[0]->cryptocurrency_additional_price }};

                    
                    $('.bitcoin_converted_amount').val(converted_amount);
                    
                    console.log(res.data.quote[currencyType]);
                    $('.loader').hide();
                    },

                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);
                    }
                    });
                 
                    }

                        GetbtcConvertedValues();
                   
                    $(".bitcoin_valuefConverion,.cointType,.currencyType").change(function() {


                    
                     GetbtcConvertedValues();
                    });
                   
                    
                    $('#coins-info-table').DataTable( {
                    
                    "pageLength": 25
                    } );
                    });
                    </script>



                    <style type="text/css">
                    
                    .coin-code {
                    display: inline-block;
                    font-size: 10px;
                    padding: 2px 5px;
                    border: 1px solid #fcc118;
                    color: #fcc118;
                    border-radius: 4px;
                    margin-right: 10px;
                    }
                    .navbar-toggle {
                    margin-top: 25px;
                    }
                    table.dataTable thead th {
                    position: relative;
                    background-image: none !important;
                    }
                    table.dataTable thead th.sorting:after, table.dataTable thead th.sorting_asc:after, table.dataTable thead th.sorting_desc:after {
                    position: absolute;
                    top: 12px;
                    right: 8px;
                    display: block;
                    
                    }
                    
                    .navbar-inverse {
                    background-color: #101820;
                    border-color: #101820;
                    margin-bottom: 0px;
                    }
                    .navbar-brand {
                    float: left;
                    height: 50px;
                    padding: 33px 30px 50px 0px;
                    font-size: 18px;
                    line-height: 20px;
                    }
                    .navbar-inverse .navbar-nav>li>a {
                    color: #ffffff;
                    }
                    .well {
                    min-height: 20px;
                    padding: 19px;
                    margin-bottom: 20px;
                    background-color: #f9f9f9;
                    border: 1px solid #eee;
                    border-radius: 4px;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    }
                    tr.increment td{
                    background-color:rgba(0,255,0,.4)!important;
                    transition:all .7s ease;
                    }
                    tr.decrement td{
                    background-color:rgba(255,0,0,.4)!important;
                    transition:all .7s ease;
                    }
                    .container.content {
                    padding: 40px;
                    background: #fff;
                    }
                    .container.content.chart {
                    background: #f9f9f9;
                    padding: 40px;
                    border-top: 1px solid #eee;
                    border-bottom: 1px solid #eee;
                    }
                    .header-bar {
                    font-size: 16px;
                    padding: 15px 0 17px 0;
                    text-align: center;
                    background: #fcc118;
                    color: #fff;
                    }
                    .banner-ad {
                    text-align: center;
                    margin-bottom: 30px;
                    }
                    .banner-ad img {
                    max-width: 100%;
                    }
                    a.header-link:hover {
                    text-decoration: none;
                    }
                    .btn-value {
                    background: #fcc118;
                    color: #101820;
                    border: 2px solid #fcc118;
                    border-radius: 210px;
                    padding: 10px 25px;
                    font-weight: bold;
                    }
                    form.navbar-form.navbar-right {
                    padding: 15px 0;
                    }
                    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                    padding: 15px;
                    line-height: 1.42857143;
                    vertical-align: top;
                    border-top: 1px solid #ddd;
                    }
                    .coin-header {
                    font-size: 16px;
                    text-transform: uppercase;
                    font-weight: 600;
                    }
                    .tx {
                    }
                    footer {
                    background: #101820;
                    padding: 0px 0;
                    text-align: center;
                    }
                    footer img {
                    -webkit-filter: grayscale(100%);
                    -moz-filter: grayscale(100%);
                    -ms-filter: grayscale(100%);
                    -o-filter: grayscale(100%);
                    filter: grayscale(100%);
                    opacity: 0.3;
                    }
                    @keyframes fadein {
                    from {
                    opacity: 0;
                    }
                    to {
                    opacity: 1;
                    }
                    }
                    /* Firefox < 16 */
                    @-moz-keyframes fadein {
                    from {
                    opacity: 0;
                    }
                    to {
                    opacity: 1;
                    }
                    }
                    /* Safari, Chrome and Opera > 12.1 */
                    @-webkit-keyframes fadein {
                    from {
                    opacity: 0;
                    }
                    to {
                    opacity: 1;
                    }
                    }
                    /* Internet Explorer */
                    @-ms-keyframes fadein {
                    from {
                    opacity: 0;
                    }
                    to {
                    opacity: 1;
                    }
                    }
                    /* Opera < 12.1 */
                    @-o-keyframes fadein {
                    from {
                    opacity: 0;
                    }
                    to {
                    opacity: 1;
                    }
                    }
                    @media (min-width: 992px) {
                    /* 992px and above */
                    .affix-sidebar.affix {
                    top: 30px;
                    /* Top Position */
                    width: 294px;
                    /* Widget Width (small desktop) */
                    }
                    }
                    @media (min-width: 1200px) {
                    /* 1200px and above */
                    .affix-sidebar.affix {
                    width: 364px;
                    /* Widget Width (large desktop) */
                    }
                    }
                    @media (max-width: 991px) {
                    /* 991px and below */
                    .affix-sidebar.affix {
                    position: static;
                    }
                    .mobile-hide {
                    display: none;
                    }
                    .mobile-center {
                    text-align: center;
                    }
                    .mobile-center h2 {
                    margin-bottom: 30px;
                    }
                    .table-responsive {
                    border: 0px;
                    }
                    .well {
                    margin-bottom: 0px;
                    }
                    .col-sm-6 {
                    width: 50%;
                    display: inline-block;
                    }
                    .container.content {
                    padding: 15px 0;
                    }
                    }
                    @media (min-width: 768px) {
                    .navbar-nav>li>a {
                    padding-top: 35px;
                    padding-bottom: 35px;
                    }
                    }
                    .sprite {
                    display: inline-block;
                    vertical-align: middle;
                    margin-right: 5px;
                    min-width: 25px;
                    min-height: 25px;
                    background: url(../img/default-coin.png);
                    background-size: 25px 25px;
                    }
                    .sprite-0x {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-komodo {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-2give {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-300token {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-808coin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-8bit {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-BilShares {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-BlockShares {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-Ixcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-J1wuW41H {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-MONACOINtop {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-ziftrcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-zetacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-adex {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-adtoken {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-adzcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-aeon {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-aerome {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-aeternity {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-agorastokens {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-aiden {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-aidoskuneen {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-airswap {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-ambercoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-anc_icon {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-anoncoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-antshares {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-apicoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-applebyte {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-applecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-apx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-aragon {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-archcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-arcticcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-ardor {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-ark {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-artbyte {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-asch {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-asiacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-atmchain {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-atmos {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-atomic {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-aud {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-augur {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-auroracoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-bancor {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-bancornetwork {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-banx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-basicattenti... {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-basicattenti {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-bata {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-batcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-bcap {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-belacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-betacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-binancecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitGold {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitasean {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitbar {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitbay {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitbean {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcny {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcoincash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcoindark {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcoinplus {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcointx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitconnect {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitcrystals {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitdeal {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitgem {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitland {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitlux {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitmark {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitpark-coin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitquence {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitshares pts {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitshares {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitsharespts {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitsharesx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitstake {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitstar {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitswift {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-bitusd {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-blackcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-blackmooncrypto {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-blitz {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-blitzcash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-blocknet {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-blockpay {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-bluecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-boolberry {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-boomcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-boostcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-bottlecaps {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-breakout {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-breakoutstake {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-brl {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-burst {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-byteball {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-byteballbytes {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-bytecent {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-bytecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-bytom {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-cad {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-caix {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-camorracoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-cannabiscoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-cardano {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-carpediemcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-casinocoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-catcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-centra {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chaincoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chainlink {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chancecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chf {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chncoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chococoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-chronobank {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-cinni {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-circuitsofv {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-civic {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-clams {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-cleanwatercoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-cloakcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-cny {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-coeval {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-cofoundit {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-coin2 {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-coindash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-coino {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-coinomat {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-coinousd {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-communitycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-counterparty {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-crave {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-creditbit {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-crevacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-crown {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-cryptcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-crypti {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-cryptobuk {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-cryptobullion {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-cryptocoins {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-cryptonite {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-curecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-cvcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-czacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-czechcrowncoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-darcrus {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-darkcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-darknote {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-dash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-databits {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-daxxcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-daytradercoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-debune {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-decent {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-decred {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-default {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-dentacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-deutscheemark {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-devcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-diamond {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-digibyte {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-digitalcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-digitalnote {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-digixdao {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-dirac {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-district0x {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-dnotes {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-dogecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-dogecoindark {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-dogeparty {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-dollar {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-dopecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-doubloons {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-dubaicoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-e-dinarcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-earthcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-eb3coin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-eboost {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-ecccoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-ecobit {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-ecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-ecurrencycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-edgeless {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-edinarcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-einsteinium {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-elastic {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-electronic-gulden {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-electronicgulden {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-embers {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-emc {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-emercoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-encryptotel {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-energycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-eos {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-eryllium {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-espers {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-ethercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-ethereum {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-ethereumclassic {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-ethereummovi {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-etheroll {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-eur {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-exclusivecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-execoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-expanse {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-experiment-10k {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-experiment10k {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-extreme {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-extremecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-factom {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-faircoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-fastcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-favela_da_mare {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-feathercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-fedoracoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-fibre {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-fimkrypto {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-firstblood {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-firstbloodprelaunch {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-firstcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-flappycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-florincoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-fluttercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-foldingcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-freemarket {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-freicoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-freshcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-fuelcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-funfair {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-gambit {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-gamecredits {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-zennies {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-ganjacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-gas {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-gbp {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-geocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-getgems {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-givecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-globalcurren {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-glyph {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-gnosis {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-goldcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-golem {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-golos {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-grandcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-greenbacks {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-gridcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-groestlcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-gulden {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-guldencoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-gxshares {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-hackergold {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-happycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-heat {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-hellascoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-hkd {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-hobonickels {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-horizon {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-hshare {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-htmlcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-humaniq {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-huntercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-hyper {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-hyperstake {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-i0coin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-icash {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-ico {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-icoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-iconomi {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-icoopenledger {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-iexecrlc {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-incakoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-incent {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-infinitecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-influxcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-inr {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-insanecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-instantdex {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-insurex {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-iocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-ion {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-iota {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-isracoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-jackpot {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-jackpotcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-jay {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-jinn {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-jl777hodl {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-jpy {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-jumbucks {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-karma {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-kin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-klondikecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-kolschcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-pinkcoin {
                    width: 21px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -845px -774px;
                    background-size: 875px 840px;
                    }
                    .sprite-krugercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-krypton {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-kybernetwork {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-lbry_credits {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-lbrycredits {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-leocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-librexcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-limecoinx {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-liquid {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-lisk {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-litecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-lomocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-loopring {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-lottoshares {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-ltbcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-luckchain {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-luckycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-lunyr {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-lykke {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-magi {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-maidsafecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-maryjane {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-mastercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-mastercoinomni {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-matchpool {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-maxcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-mazacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-mcap {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-megacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-melon {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-memorycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-mergecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-metal {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-metaverseent {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-metaverseetp {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-mgw {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-midas-rezerv {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-midas.rezerv {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-mincoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-mintcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-missing {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-mmnxt {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-mobilego {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-monaco {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-monacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-monero {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-monetaryunit {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-monetha {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-mooncoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-mothership {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-muse {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-musicoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-mxn {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-myriad {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-myriadcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-mysterium {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-namecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-nas {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-nautiluscoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-navajo {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-navajocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-navcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-neblio {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-nem {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-neo {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-neodice {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-neoscoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-netcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-newyorkcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-nexium {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-nexus {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-nexuseconomy {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-nimiq {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-noblecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-node {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-noirshares {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-nolimitcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-novacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-nubits {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-numeraire {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-nushares {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-nvo {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-nxt {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-nxtprivacy {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-nxttycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-nxtventure {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-obits {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-octocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-okcash {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-omisego {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-omni {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-omnicoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-opal {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-orbitcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-pandacoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-pandacoin_coin_transparent {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-zencash {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-pangeapoker {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-pangeapokercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-particl {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-particle {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-pascalcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-patientory {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-paycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-peercoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-peerplays {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-pepecash {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-phoenixcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-php {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-piggycoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-pillar {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-zeitcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-pivx {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-pln {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-pluton {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-polybius {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-popularcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-populous {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-positron {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-postcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-potcoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -5px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-potcoinlogo {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -40px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-primecoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -75px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-privatebet {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -110px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-prizm {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -145px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-projectdecorum {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -180px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-pseudocash {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -215px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-pura {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -250px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-putincoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -285px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-qibuck {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -320px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-qora {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -355px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-qtum {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -390px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-quantum {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -425px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-quantumresis... {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -460px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-quantumresis {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -495px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-quark {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -530px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-quatloocoin {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -565px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-qwark {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -600px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-r-270x250 {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -635px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-radium {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -670px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-raiblocks {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -705px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-razor {
                    width: 25px;
                    height: 25px;
                    background: url("../img/spritesheet.png") -740px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-redcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-reddcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-regalcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-rialto {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-ribbitrewards {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-riecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-rimbit {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-ripple {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-rise {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-rlc {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-roulettetoken {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-round {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-roxcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-rub {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-rubycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-safeexchang {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-safeexchange {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-safeexchangecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-saffroncoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-salt {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-salus {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-santimentnet {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sapience aifx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-saturn2coin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-scorecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-scotcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-securecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sek {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sembro.token {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sequence {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sexcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sgd {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-shadowcash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-shadowcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sharkfund0 {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-shift {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -530px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-siacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -565px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sibcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -600px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-silkcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -635px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-singulardtv {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -670px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sixeleven {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -705px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-skycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-skynet {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-slimcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-smartcash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-smileycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-snowballs {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-soarcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-solarcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-solarfarm {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-solorfarm {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-sonm {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-spectrecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-sphere {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-spreadcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-sprouts {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-starta {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-startcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-status {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-stealthcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-steem {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-steemdollars {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-stellar {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-stellarlumens {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-sterlingcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-storj {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-stox {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-stratis {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-supercoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-supernet {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-swarm {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-swarmcity {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-sync {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-synccoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-syndicate {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-synereo {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-synergy {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-syscoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-taas {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-tekcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -530px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-tenx {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -565px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-terracoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -600px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-teslacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -635px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-tether {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -670px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-thechampcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -705px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-thedao {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-tickets {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-tilecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-titcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-tixcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-tokencard {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-tokes {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-tradebots {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-triggers {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-tron {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-trumpcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-trustplus {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-ubiq {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-ucicoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-ufocoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-ultracoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-unbreakablecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-unityingot {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-unobtanium {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-uro-coin-logo {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-uro {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-usd {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-usde {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-utilitycoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-vanillacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -775px;
                    background-size: 875px 840px;
                    }
                    .sprite-vcash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -5px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vechain {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -40px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-veltor {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -75px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-verge {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -110px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vericoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -145px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-veritaseum {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -180px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-veros {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -215px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vertacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -250px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vertcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -285px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-viacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -320px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-virtacoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -355px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vootcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -390px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-voxels {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -425px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vpncoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -460px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vslice {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -495px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vslice_white {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -530px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-vtorrent {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -565px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-wagerr {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -600px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-walton {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -635px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-wankcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -670px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-waves {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -705px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-wavescommuni {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -740px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-wetrust {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -775px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-whitecoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -810px -810px;
                    background-size: 875px 840px;
                    }
                    .sprite-wildbeastblock {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -5px;
                    background-size: 875px 840px;
                    }
                    .sprite-wings {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -40px;
                    background-size: 875px 840px;
                    }
                    .sprite-woodcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -75px;
                    background-size: 875px 840px;
                    }
                    .sprite-worldcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -110px;
                    background-size: 875px 840px;
                    }
                    .sprite-xaurum {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -145px;
                    background-size: 875px 840px;
                    }
                    .sprite-xcurrency {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -180px;
                    background-size: 875px 840px;
                    }
                    .sprite-xljhog {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -215px;
                    background-size: 875px 840px;
                    }
                    .sprite-xtrabytes {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -250px;
                    background-size: 875px 840px;
                    }
                    .sprite-xxxcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -285px;
                    background-size: 875px 840px;
                    }
                    .sprite-ybcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -320px;
                    background-size: 875px 840px;
                    }
                    .sprite-ybcoin_logo_60 {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -355px;
                    background-size: 875px 840px;
                    }
                    .sprite-yocoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -390px;
                    background-size: 875px 840px;
                    }
                    .sprite-zar {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -425px;
                    background-size: 875px 840px;
                    }
                    .sprite-zcash {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -460px;
                    background-size: 875px 840px;
                    }
                    .sprite-zccoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -495px;
                    background-size: 875px 840px;
                    }
                    .sprite-zclassic {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -530px;
                    background-size: 875px 840px;
                    }
                    .sprite-zcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -565px;
                    background-size: 875px 840px;
                    }
                    .sprite-zrcoin {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -600px;
                    background-size: 875px 840px;
                    }
                    .sprite-gameleaguecoin {
                    width: 24px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -635px;
                    background-size: 875px 840px;
                    }
                    .sprite-adelphoi {
                    width: 24px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -670px;
                    background-size: 875px 840px;
                    }
                    .sprite-adel {
                    width: 24px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -705px;
                    background-size: 875px 840px;
                    }
                    .sprite-pangea poker {
                    width: 25px;
                    height: 24px;
                    background: url("{{ asset('img/spritesheet.png') }}") -845px -740px;
                    background-size: 875px 840px;
                    }
                    .sprite-1 {
                    width: 25px;
                    height: 25px;
                    background: url("{{ asset('img/spritesheet.png') }}") -600px -355px;
                    background-size: 875px 840px;
                    }
                    #account_id
                    {
                        background-color:#e9ecef;
                    }

                    .paypal,.bank_wire,.westren_union,.perfect_money,.payza,.payoneer,.webmoney,.okpay,.skrill,.nettler,.dash,.money_gram,.credit_card,.instaforex,.solid_trust_pay,.us_bank,.advcash,.alipay_china,.paysafecard,.onecard,.sofort,.qivi_wallet,.entromoney,.mobile_wallet,.mobile_pay,.capital_one,.apple_pay,.chase_quick_pay,.transfer_wise,.venmo_mobile_payment,.xoom_mobile_payment,.swift_transfer,.direct_bank_deposit,.buy_gift_card,.buy_virtual_card,.google_pay,.yandex_money,.payco,.ria_money_transfer,.xoom_money_transfer,.wordremit,.select_currency_to,.select_currency,.select_currency_to{
                    display: none;
                    }
                    </style>
                    <script>
                    // let classesCss=[{paypal:'paypal'},{bank_wire:'bank_wire'},{westren_union:'westren_union'},{perfect_money:'perfect_money'},{payza:'payza'},{payoneer:'payoneer'},{webmoney:'webmoney'},{okpay:'okpay'},{skrill:'skrill'},{nettler:'nettler'},{dash:'dash'},{money_gram:'money_gram'},{credit_card:'credit_card'},{instaforex:'instaforex'},{solid_trust_pay:'solid_trust_pay'},{us_bank:'us_bank'},{advcash:'advcash'},{alipay_china:'alipay_china'},{paysafecard:'paysafecard'},{onecard:'onecard'},{sofort:'sofort'},{qivi_wallet:'qivi_wallet'},{entromoney:'entromoney'},{mobile_wallet:'mobile_wallet'},{mobile_pay:'mobile_pay'},{capital_one:'capital_one'},{apple_pay:'apple_pay'},{chase_quick_pay:'chase_quick_pay'},{transfer_wise:'transfer_wise'},{venmo_mobile_payment:'venmo_mobile_payment'},{xoom_mobile_payment:'chase_quick_pay'},{swift_transfer:'swift_transfer'},{direct_bank_deposit:'direct_bank_deposit'},{buy_gift_card:'buy_gift_card'},{buy_virtual_card:'buy_virtual_card'},{google_pay:'google_pay'},{yandex_money:'yandex_money'},{payco:'payco'},{ria_money_transfer:'ria_money_transfer'},{xoom_money_transfer:'xoom_money_transfer'}];
                    
                    let classesCss=['paypal','bank_wire','westren_union','perfect_money','payza','payoneer','webmoney','okpay','skrill','nettler','dash','money_gram','credit_card','instaforex','solid_trust_pay','us_bank','advcash','alipay_china','paysafecard','onecard','sofort','qivi_wallet','entromoney','mobile_wallet','mobile_pay','capital_one','apple_pay','chase_quick_pay','transfer_wise','venmo_mobile_payment','chase_quick_pay','swift_transfer','direct_bank_deposit','buy_gift_card','buy_virtual_card','google_pay','yandex_money','payco','ria_money_transfer','xoom_money_transfer','wordremit'];
                    
                    $('.paymentVal').on('change', function() {
                    classesCss.filter(word => word !=this.value);
                    classesCss.map(function(key, index) {
                    
                    $('.'+key).hide();
                      $('.'+key).prop('required',false);
                    console.log(key);
                    
                    });
                    $('.'+this.value).show();
                     $('.'+this.value).prop('required',true);

                    //alert( this.value );
                    });
                    </script>


                    {{-- Select Currency like BTC,ETH --}}

    <script>
                    let classesCss1=['select_currency'];
                    
                    $('.cointType').on('change', function() {
                    classesCss1.filter(word => word !=this.value);
                    classesCss1.map(function(key1, index) {
                    
                    $('.'+key1).show();
                      $('.'+key1).prop('required',false);
                    console.log(key1);
                    
                    });
                    $('.'+this.value).hide();
                     $('.'+this.value).prop('required',true);

                    });
    </script>

    <script>
                    let classesCss2=['select_currency_to'];
                    
                    $('.currencyType').on('change', function() {
                    classesCss2.filter(word => word !=this.value);
                    classesCss2.map(function(key2, index) {
                      $('.loader').show();
                    $('.'+key2).show();
                      $('.'+key2).prop('required',false);
                    console.log(key2);

                    
                    });

                    // $('.loader').hide();
                    $('.'+this.value).hide();
                     
                     $('.'+this.value).prop('required',true);

                    });
    </script>




                @endsection  
                
                    
           