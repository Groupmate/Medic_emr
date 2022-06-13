<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate Template</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<button class="show" data-toggle="modal" data-target="#CertificationModal" aria-haspopup="true">Show Modal</button>

<!-- Modal -->
<div class="">
    <div class="">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
              
                       
                             <button wire:click="generateMedicalPDF()" class="mr-12 text-xl  background-color:red py-8 px-22">Print-Pdf </button>
                 
        
                        <div class="col-sm-1">
                            <img id="bannerProp" src={{ asset('assets/left_banner.png') }}>
                        </div>

                        <div class="col-sm-11">
                            <img class="pull-right" id="logoProp" src={{ asset('assets/logo2.png')}}>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <p class="header-large">MEDICAL CERTIFICATE</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><strong>About the medical certificate</strong>
                                                The purpose of the medical certificate is to help a Medical
                                                Indemnity Insurer (MII) determine whether an insured medical
                                                practitioner is eligible to participate in the Australian
                                                Government's Run-off Cover Indemnity Scheme (ROCS). The MII
                                                will submit the certificate to Medicare Australia in the event that
                                                they apply for a ROCS indemnity payment on behalf of the
                                                medical practitioner.</b></p>
                                        </div>
                                
                                    </div><br>
                                    @foreach($PatientInfo as $PatientInfo) 
                                        <div class="row text-left">
                                            <div class="col-sm-8 "><b> National Identification : {{ $PatientInfo['national_id']}} </b> </div>
                                            <div class="col-sm-8 "><b> Full Name : {{$PatientInfo['firstname']}} {{$PatientInfo['lastname']}}</b> </div>
                                            <div class="col-sm-8 "><b> Date and place of birth : {{$PatientInfo['date_of_birth']}} </div>
                                            <div class="col-sm-8 "><b> Residing at: {{$PatientInfo['city']}} {{$PatientInfo['zone']}}</b></div>
                                        </div>
                                        <br>

                                        <div class="col-sm-8">
                                            <b class="medium-font">Issued at : on : {{$PatientInfo['updated_at']}}
                                        </div>
                                    @endforeach  
                                    <div class="col-sm-12">
                                      
                                        <p>Certifies that he/she has examined this day with diagnosis info</p>
                                        <p> <i><b>{{$PatientInfo['diagnosis_info']}}</b> </i> </p>
                                    </div>                               
                         
                                    <div class="row text-right">
                                        <div id="specMargin" class="col-sm-10">
                                            <h4>Medical ID:-OHSAS 18001:2007</h4>
                                        </div>
                                   
                                    </div>
                                    @foreach($DoctorInfo as $DoctorInfo) 
                                        <div class="row ">
                                            <div class="col-sm-12">
                                                <p >The undersigned Doctor in medicine (full name): {{$DoctorInfo['firstname']}}{{$DoctorInfo['lastname']}} </p>
                                                <p> The certificate is valid until 2018-08-26</p>
                                            </div>
                                        </div>
                                    @endforeach 
                                        <div class="row">
                                        <div class="col-sm-12">
                                            <img class="pull-right" id="signLogo" src={{ asset('assets/sign.png')}}>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <p id="smallFont">Medic EMR Hospital. &#9679; 29F, Two IFC, 10 Addis Ababa &#9679; Ethiopia</p>
                                        </div>
                                    </div>
                                    <img class="pull-right" id="footerLogo" src={{ asset('assets/logo1.png')}}>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@livewireScripts
</html>