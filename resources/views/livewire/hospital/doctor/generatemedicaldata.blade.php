<<<<<<< Updated upstream
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
</head>
<button class="show" data-toggle="modal" data-target="#CertificationModal" aria-haspopup="true">Show Modal</button>


<!-- Modal -->
<div class="modal fade" id="CertificationModal" tabindex="-1" role="dialog" aria-labelledby="CertificationModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
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
                                <div class="row text-left">
                                    <div class="col-sm-8 "><b> Nationality :</b> </div>
                                    <div class="col-sm-8 "><b> Date and place of birth : </div>
                                    <div class="col-sm-8 "><b> Residing at:</b></div>
                                   <br>
                                   <div class="col-sm-8">
                                    <b class="medium-font">Issued at : on : 
                                </div>
                                    <div class="col-sm-12">
                                      
                                        <p>Certifies that he/she has examined this day</p>
                                        <p>........................................</p>
                                    </div>                               
                         
                                    <div class="row text-right">
                                        <div id="specMargin" class="col-sm-10">
                                            <h4>Medical ID:-OHSAS 18001:2007</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <p >The undersigned Doctor in medicine (full name)……………………………………………………………… </p>
                                            <p> The certificate is valid until 2018-08-26</p>
                                        </div>
                                       
                                    </div>
                                  
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

</html>
=======
 
    <div class="p-6"> 
        <div x-data @tags-update="console.log('tags updated', $event.detail.tags)" data-tags='["aaa","bbb"]' class="max-w-lg m-6">
            <div x-data="tagSelect()" x-init="init('parentEl')" @click.away="clearSearch()" @keydown.escape="clearSearch()">
              <div class="relative" @keydown.enter.prevent="addTag(textInput)">
                <input x-model="textInput" x-ref="textInput" @input="search($event.target.value)" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter some tags">
                <div :class="[open ? 'block' : 'hidden']">
                  <div class="absolute z-40 left-0 mt-2 w-full">
                    <div class="py-1 text-sm bg-white rounded shadow-lg border border-gray-300">
                      <a @click.prevent="addTag(textInput)" class="block py-1 px-5 cursor-pointer hover:bg-indigo-600 hover:text-white">Add tag "<span class="font-semibold" x-text="textInput"></span>"</a>
                    </div>
                  </div>
                </div>
                <!-- selections -->
                <template x-for="(tag, index) in tags">
                  <div class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
                    <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs" x-text="tag"></span>
                    <button @click.prevent="removeTag(index)" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                      <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
                    </button>
                  </div>
                </template>
              </div>
            </div>
        </div>
        <div x-data @tags-update="console.log('tags updated', $event.detail.tags)" data-tags='["aaa","bbb"]' class="max-w-lg m-6">
            <div x-data="tagSelect()" x-init="init('parentEl')" @click.away="clearSearch()" @keydown.escape="clearSearch()">
              <div class="relative" @keydown.enter.prevent="addTag(textInput)">
                <input x-model="textInput" x-ref="textInput" @input="search($event.target.value)" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter some tags">
                <div :class="[open ? 'block' : 'hidden']">
                  <div class="absolute z-40 left-0 mt-2 w-full">
                    <div class="py-1 text-sm bg-white rounded shadow-lg border border-gray-300">
                      <a @click.prevent="addTag(textInput)" class="block py-1 px-5 cursor-pointer hover:bg-indigo-600 hover:text-white">Add tag "<span class="font-semibold" x-text="textInput"></span>"</a>
                    </div>
                  </div>
                </div>
                <!-- selections -->
                <template x-for="(tag, index) in tags">
                  <div class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
                    <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs" x-text="tag"></span>
                    <button @click.prevent="removeTag(index)" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                      <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
                    </button>
                  </div>
                </template>
              </div>
            </div>
        </div>
        <div x-data @tags-update="console.log('tags updated', $event.detail.tags)" data-tags='["aaa","bbb"]' class="max-w-lg m-6">
            <div x-data="tagSelect()" x-init="init('parentEl')" @click.away="clearSearch()" @keydown.escape="clearSearch()">
              <div class="relative" @keydown.enter.prevent="addTag(textInput)">
                <input x-model="textInput" x-ref="textInput" @input="search($event.target.value)" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter some tags">
                <div :class="[open ? 'block' : 'hidden']">
                  <div class="absolute z-40 left-0 mt-2 w-full">
                    <div class="py-1 text-sm bg-white rounded shadow-lg border border-gray-300">
                      <a @click.prevent="addTag(textInput)" class="block py-1 px-5 cursor-pointer hover:bg-indigo-600 hover:text-white">Add tag "<span class="font-semibold" x-text="textInput"></span>"</a>
                    </div>
                  </div>
                </div>
                <!-- selections -->
                <template x-for="(tag, index) in tags">
                  <div class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
                    <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs" x-text="tag"></span>
                    <button @click.prevent="removeTag(index)" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                      <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
                    </button>
                  </div>
                </template>
              </div>
            </div>
        </div>
    </div>
>>>>>>> Stashed changes
