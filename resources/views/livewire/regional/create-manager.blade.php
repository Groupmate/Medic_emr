<div class="p-6">
    <x-guest-layout>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        @if (session()->has('message'))
            <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
       @endif
        <div>
            <x-jet-label for="firstname" value="{{ __('First name') }}"/>
            <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="firstname"/>
            @error('firstname') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="lastname" value="{{ __('Last name') }}"/>
            <x-jet-input id="lastname" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="lastname"/>
            @error('lastname') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>        
        <div class="mt-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}"/>
            <x-jet-input id="phone" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="phone"/>
            @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            <select wire:model.debounce.800ms="role" class="block mt-1 w-full border-gray-300 focus:border" >
                <option>---Select Role---</option>
                <option value="3">Zonal Health Bureau Admin</option>
                <option value="3">Zonal SubCity Adminstration Health Buraeu Admin</option>
            </select>
            @error('role') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            @foreach($userID as $userId)
                @if($userId->role == 2)
                    @switch($userId->address)
                        @case ("Adama, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Arsi, Oromia">Arsi Zone</option>
                                <option value="Bale, Oromia">Bale Zone</option>
                                <option value="Borena, Oromia">Borena Zone</option>
                                <option value="Buno Bedele, Oromia">Buno Bedele Zone</option>
                                <option value="East Hararghe, Oromia">East Hararghe Zone</option>
                                <option value="East Shewa, Oromia">East Shewa Zone</option>
                                <option value="East Welega, Oromia">East Welega Zone</option>
                                <option value="Guji, Oromia">Guji Zone</option>
                                <option value="Horo Guduru Welega, Oromia">Horo Guduru Welega Zone</option>
                                <option value="Illubabor, Oromia">Illubabor Zone</option>
                                <option value="Jimma, Oromia">Jimma Zone</option>
                                <option value="Kelam Welega, Oromia">Kelam Welega Zone</option>
                                <option value="North Shewa, Oromia">North Shewa Zone</option>
                                <option value="Southwest Shewa, Oromia">Southwest Shewa Zone</option>
                                <option value="West Arsi, Oromia">West Arsi Zone</option>
                                <option value="West Guji, Oromia">West Guji Zone</option>
                                <option value="West Hararghe, Oromia">West Hararghe Zone</option>
                                <option value="West Shewa, Oromia">West Shewa Zone</option>
                                <option value="West Welega, Oromia">West Welega Zone</option>
                                <option value="Adama Special Zone, Oromia">Adama Special Zone</option>
                                <option value="Jimma Special Zone, Oromia">Jimma Special Zone</option>
                                <option value="Oromia Special Zone Surrounding Finfinne, Oromia">Oromia Special Zone Surrounding Finfinne</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Bahirdar, Amahara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Agew Awi, Amhara">Agew Awi Zone</option>
                                <option value="East Gojjam, Amhara">East Gojjam Zone</option>
                                <option value="North Gondar, Amhara">North Gondar Zone</option>
                                <option value="North Shewa, Amhara">North Shewa Zone</option>
                                <option value="North Wollo, Amhara">North Wollo Zone</option>
                                <option value="Oromia Special Zone, Amhara">Oromia Special Zone</option>
                                <option value="South Gondar, Amhara">South Gondar Zone</option>
                                <option value="South Wollo, Amhara">South Wollo, Zone</option>
                                <option value="Weg Hemra, Amhara">Weg Hemra Zone</option>
                                <option value="West Gojjam, Amhara">West Gojjam Zone</option>
                                <option value="Bahirdar Special Zone, Amhara">Bahirdar Special Zone</option>
                                <option value="Argobba Special Zone, Amhara">Argobba Special Zone</option>                            
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Mekelle, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Central, Tigray">Central Zone</option>
                                <option value="Eastern, Tigray">Eastern Zone</option>
                                <option value="South Eastern, Tigray">South Eastern Zone</option>
                                <option value="Southern, Tigray">Southern Zone</option>                            
                                <option value="Western, Tigray">Western Zone</option>
                                <option value="North Western, Tigray">North Western Zone</option>
                                <option value="Mekelle Special Zone, Tigray">Mekelle Special Zone</option>                            
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Semera, Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Awsi Rasu(Zone1), Afar">Awsi Rasu(Zone1)</option>
                                <option value="Kilbet Rasu(Zone2), Afar">Kilbet Rasu(Zone2)</option>
                                <option value="Gabi Rasu(Zone3), Afar">Gabi Rasu(Zone3)</option>
                                <option value="Fanti Rasu(Zone4), Afar">Fanti Rasu(Zone4)</option>
                                <option value="Hari Rasu(Zone5), Afar">Hari Rasu(Zone5)</option>
                                <option value="Argobba Special Zone, Afar">Argobba Special Zone</option>                            
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Jigjiga, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Afder, Somali">Afder zone</option>
                                <option value="Daawa, Somali">Daawa Zone</option>
                                <option value="Dollo, Somali">Dollo Zone</option>
                                <option value="Erer, Somali">Erer Zone</option>
                                <option value="Fafan, Somali">Fafan Zone</option>
                                <option value="Jarar, Somali">Jarar Zone</option>
                                <option value="Korahe, Somali">Korahe Zone</option>
                                <option value="Liben, Somali">Liben Zone</option>
                                <option value="Nogob, Somali">Nogob Zone</option>
                                <option value="Shabelle, Somali">Shabelle Zone</option>
                                <option value="Sitti, Somali">Sitti Zone</option>                        
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Harar, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Amir-Nur Woreda, Harari">Amir-Nur Woreda, Harari</option>
                                <option value="Abadir Woreda, Harari">Abadir Woreda, Harari</option>
                                <option value="Shenkor Woreda, Harari">Shenkor Woreda, Harari</option>
                                <option value="Jin'Eala Woreda, Harari">Jin'Eala Woreda, Harari</option>
                                <option value="AboKer Woreda, Harari">AboKer Woreda, Harari</option>
                                <option value="Hakim Woreda, Harari">Hakim Woreda, Harari</option>
                                <option value="Sofi Woreda, Harari">Sofi Woreda, Harari</option>
                                <option value="Erer Woreda, Harari">Erer Woreda, Harari</option>
                                <option value="Dire-Tiyara Woreda, Harari">Dire-Tiyara Woreda, Harari</option>                            
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Hawassa, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Aleta Chuko, Sidama">Aleta Chuko, Sidama</option>
                                <option value="Aleta Wendo, Sidama">Aleta Wendo, Sidama</option>
                                <option value="Arbegona, Sidama">Arbegona, Sidama</option>
                                <option value="Aroresa, Sidama">Aroresa, Sidama</option>
                                <option value="Hawassa Zuria, Sidama">Hawassa Zuria, Sidama</option>
                                <option value="Bensa, Sidama">Bensa, Sidama</option>
                                <option value="Bona Zuria, Sidama">Bona Zuria, Sidama</option>
                                <option value="Boricha, Sidama">Boricha, Sidama</option>
                                <option value="Bursa, Sidama">Bursa, Sidama</option>
                                <option value="Chere, Sidama">Chere, Sidama</option>
                                <option value="Dale, Sidama">Dale, Sidama</option>
                                <option value="Dara, Sidama">Dara, Sidama</option>
                                <option value="Gorche, Sidama">Gorche, Sidama</option>
                                <option value="Hawassa Special Zone, Sidama">Hawassa Special Zone, Sidama</option>
                                <option value="Hula, Sidama">Hula, Sidama</option>
                                <option value="Loko Abaya, Sidama">Loko Abaya, Sidama</option>
                                <option value="Malga, Sidama">Malga, Sidama</option>
                                <option value="Shebedina, Sidama">Shebedina, Sidama</option>
                                <option value="Wensho, Sidama">Wensho, Sidama</option>
                                <option value="Wondo Genet, Sidama">Wondo Genet, Sidama</option>                            
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Hawassa, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Gamo Gofa, SNNPR">Gamo Gofa Zone</option>
                                <option value="Gedeo, SNNPR">Gedeo Zone</option>
                                <option value="Gurage, SNNPR">Gurage Zone</option>
                                <option value="Hadiya, SNNPR">Hadiya Zone</option>
                                <option value="Kembata Tembaro, SNNPR">Kembata Tembaro Zone</option>
                                <option value="Silt'e, SNNPR">Silt'e Zone</option>
                                <option value="South Omo, SNNPR">South Omo Zone</option>
                                <option value="Konso, SNNPR">Konso Zone</option>
                                <option value="Wolayita, SNNPR">Wolayita Zone</option>
                                <option value="Alaba, SNNPR">Alaba Zone</option>
                                <option value="Amaro, SNNPR">Amaro Special Zone</option>
                                <option value="Basketo, SNNPR">Basketo Special Zone</option>
                                <option value="Burji, SNNPR">Burji Special Zone</option>
                                <option value="Dirasha, SNNPR">Dirasha Special Zone</option>
                                <option value="Yem, SNNPR">Yem Special Zone</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Jinka, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Bench Maji, SWNNPR">Bench Maji Zone</option>
                                <option value="Dawro, SWNNPR">Dawro Zone</option>
                                <option value="Keffa, SWNNPR">Keffa Zone</option>
                                <option value="Sheka, SWNNPR">Sheka Zone</option>
                                <option value="Konta, SWNNPR">Konta Zone</option>
                                <option value="West Omo, SWNNPR">West Omo Zone</option>                           
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Gambela, Gambela")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Agnwaak, Gambela">Agnwaak Zone</option>
                                <option value="Mehzenger, Gambela">Mehzenger Zone</option>
                                <option value="Nuer, Gambela">Nuer Zone</option>
                                <option value="Itang, Gambela">Itang Zone</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Assosa, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Assosa Special Zone, Benisahngul Gumuz">Assosa Zone</option>
                                <option value="Kamashi, Benisahngul Gumuz">Kemashi Zone</option>
                                <option value="Metekel, Benisahngul Gumuz">Metekel Zone</option>
                                <option value="Mao-Komo, Benishangul Gumuz">Mao-Komo Special Zone</option>
                                <option value="Pawe, Benishangul Gumuz">Pawe Special Zone</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Addis Ababa, Ethiopia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Subcity Health Bureau Manager Address---</option>
                                <option value="Addis Ketema, Addis Ababa">Addis Ketema Subcity</option>
                                <option value="Akaky Kaliti, Addis Ababa">Akaky Kaliti Subcity</option>
                                <option value="Arada, Addis Ababa">Arada Subcity</option>
                                <option value="Bole, Addis Ababa">Bole Subcity</option>
                                <option value="Gullele, Addis Ababa">Gullele Subcity</option>
                                <option value="Kirkos, Addis Ababa">Kirkos Subcity</option>
                                <option value="Kolfe Keranio, Addis Ababa">Kolfe Keranio Subcity</option>
                                <option value="Lideta, Addis Ababa">Lideta Subcity</option>
                                <option value="Lemi Kura, Addis Ababa">Lemi Kura Subcity</option>
                                <option value="Nifas Silk-lafto, Addis Ababa">Nifas Silk-lafto Subcity</option>
                                <option value="Yeka, Addis Ababa">Yeka Subcity</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case ("Dire Dawa, Ethiopia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option>---Select Zonal Health Bureau Manager Address---</option>
                                <option value="Arsi">Arsi</option>
                                <option value="Bale">Bale Zone</option>
                                <option value="Borena">Borena Zone</option>
                                <option value="Buno Bedele">Buno Bedele Zone</option>
                                <option value="East Hararghe">East Hararghe Zone</option>
                                <option value="East Shewa">East Shewa Zone</option>
                                <option value="East Welega">East Welega Zone</option>
                                <option value="Guji">Guji Zone</option>
                                <option value="Horo Guduru Welega">Horo Guduru Welega Zone</option>
                                <option value="Illubabor">Illubabor Zone</option>
                                <option value="Jimma">Jimma Zone</option>
                                <option value="Kelam Welega">Kelam Welega Zone</option>
                                <option value="North Shewa">North Shewa Zone</option>
                                <option value="Southwest Shewa">Southwest Shewa Zone</option>
                                <option value="West Arsi">West Arsi Zone</option>
                                <option value="West Guji">West Guji Zone</option>
                                <option value="West Hararghe">West Hararghe Zone</option>
                                <option value="West Shewa">West Shewa Zone</option>
                                <option value="West Welega">West Welega Zone</option>
                                <option value="Adama">Adama Special Zone</option>
                                <option value="Jimma">Jimma Special Zone</option>
                                <option value="Sululta">Oromia Special Zone Surrounding Finfinne</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @default 
                            <strong style = "color:red">Your Address were not correct, Go back and ask the Ministry Of Health to correct it for you.</strong>                   
                    @endswitch
                @endif                          
            @endforeach
        </div>
        <div class="mt-4">
            <x-jet-label  value="{{ __('Sex') }}" />
            <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.defer="sex" >
                <option>---Select sex---</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('sex') <span class="error text-red-600">{{ $message }}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="date_of_birth" value="{{ __('date_of_birth') }}" />
            <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" wire:model.debounce.800ms="date_of_birth"/>
            @error('date_of_birth') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.800ms="email" :value="old('email')" required />
            @error('email') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4"  wire:click="create" wire:loading.attr="disabled">
                Submit
            </x-jet-button>
        </div>
    </x-guest-layout>
</div>


