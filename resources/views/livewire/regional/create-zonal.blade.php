<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
                {{ __('Add Zonal Health Bureaus') }}
         </x-jet-button>
    </div>
    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Add Zonal Health Bureau') }} {{$modelId}}
        </x-slot>
        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name Of Zonal Health Bureau') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="name">                
                    <option>---Select Zonal Health Bureau Name---</option>
                    @foreach ($userID as $userId)
                        @if($userId->role == 2)
                            @switch($userId->address)
                                @case("Adama, Oromia")
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Bale zone Health Bureau">Bale zone Health Bureau</option>
                                    <option value="Borena zone Health Bureau">Borena zone Health Bureau</option>
                                    <option value="Buno Bedele zone Health Bureau">Buno Bedele zone Health Bureau</option>
                                    <option value="East Hararghe zone Health Bureau">East Hararghe zone Health Bureau</option>
                                    <option value="East Shewa zone Health Bureau">East Shewa zone Health Bureau</option>
                                    <option value="East Welega zone Health Bureau">East Welega zone Health Bureau</option>
                                    <option value="Guji zone Health Bureau">Guji zone Health Bureau</option>
                                    <option value="Horo Guduru Welega zone Health Bureau">Horo Guduru Welega zone Health Bureau</option>
                                    <option value="Illubabor zone Health Bureau">Illubabor zone Health Bureau</option>
                                    <option value="Jimma zone Health Bureau">Jimma zone Health Bureau</option>
                                    <option value="Kelam Welega zone Health Bureau">Kelam Welega zone Health Bureau</option>
                                    <option value="North Shewa zone Health Bureau">North Shewa zone Health Bureau</option>
                                    <option value="Southwest Shewa zone Health Bureau">Southwest Shewa zone Health Bureau</option>
                                    <option value="West Arsi zone Health Bureau">West Arsi zone Health Bureau</option>
                                    <option value="West Guji zone Health Bureau">West Guji zone Health Bureau</option>
                                    <option value="West Hararghe zone Health Bureau">West Hararghe zone Health Bureau</option>
                                    <option value="West Shewa zone Health Bureau">West Shewa zone Health Bureau</option>
                                    <option value="West Welega zone Health Bureau">West Welega zone Health Bureau</option>
                                    <option value="Adama Special Zone Health Bureau">Adama Special Zone Health Bureau</option>
                                    <option value="Jimma Special zone Health Bureau">Jimma Special zone Health Bureau</option>
                                    <option value="Oromia Special Zone Surrounding Finfinne Health Bureau">Oromia Special Zone Surrounding Finfinne Health Bureau</option>
                                    @break
                                @case("Bahirdar, Amahara")
                                    <option value="Agew Awi zone Health Bureau">Agew Awi zone Health Bureau</option>
                                    <option value="East Gojjam zone Health Bureau">East Gojjam zone Health Bureau</option>
                                    <option value="North Gondar zone Health Bureau">North Gondar zone Health Bureau</option>
                                    <option value="North Shewa zone Health Bureau">North Shewa zone Health Bureau</option>
                                    <option value="North Wollo zone Health Bureau">North Wollo zone Health Bureau</option>
                                    <option value="Oromia Special zone Health Bureau">Oromia Special zone Health Bureau</option>
                                    <option value="South Gondar zone Health Bureau">South Gondar zone Health Bureau</option>
                                    <option value="South Wollo zone Health Bureau">South Wollo zone Health Bureau</option>
                                    <option value="Weg Hemra zone Health Bureau">Weg Hemra zone Health Bureau</option>
                                    <option value="West Gojjam zone Health Bureau">West Gojjam zone Health Bureau</option>
                                    <option value="Bahirdar Special zone Health Bureau">Bahirdar Special zone Health Bureau</option>
                                    <option value="Argobba Special zone Health Bureau">Argobba Special zone Health Bureau</option>                                    
                                    @break
                                @case("Mekelle, Tigray")
                                    <option value="Central zone Health Bureau">Central zone Health Bureau</option>
                                    <option value="Eastern zone Health Bureau">Eastern zone Health Bureau</option>
                                    <option value="South Eastern zone Health Bureau">South Eastern zone Health Bureau</option>
                                    <option value="Southern zone Health Bureau">Southern zone Health Bureau</option>
                                    <option value="Western zone Health Bureau">Western zone Health Bureau</option>
                                    <option value="North Western zone Health Bureau">North Western zone Health Bureau</option>
                                    <option value="Mekelle Special zone Health Bureau">Mekelle Special zone Health Bureau</option>                                    
                                    @break
                                @case("Semera, Afar")
                                    <option value="Awsi Rasu zone Health Bureau">Awsi Rasu zone Health Bureau</option>
                                    <option value="Kilbet Rasu zone Health Bureau">Kilbet Rasu zone Health Bureau</option>
                                    <option value="Gabi Rasu zone Health Bureau">Gabi Rasu zone Health Bureau</option>
                                    <option value="Fanti Rasu zone Health Bureau">Fanti Rasu zone Health Bureau</option>
                                    <option value="Hari Rasu zone Health Bureau">Hari Rasu zone Health Bureau</option>
                                    <option value="Argobba Special zone Health Bureau">Argobba Special zone Health Bureau</option>                                    
                                    @break
                                @case("Jigjiga, Somali")
                                    <option value="Afder zone Health Bureau">Afder zone Health Bureau</option>
                                    <option value="Daawa zone Health Bureau">Daawa zone Health Bureau</option>
                                    <option value="Dollo zone Health Bureau">Dollo zone Health Bureau</option>
                                    <option value="Erer zone Health Bureau">Erer zone Health Bureau</option>
                                    <option value="Fafan zone Health Bureau">Fafan zone Health Bureau</option>
                                    <option value="Jarar zone Health Bureau">Jarar zone Health Bureau</option>
                                    <option value="Korahe zone Health Bureau">Korahe zone Health Bureau</option>
                                    <option value="Liben zone Health Bureau">Liben zone Health Bureau</option>
                                    <option value="Nogob zone Health Bureau">Nogob zone Health Bureau</option>
                                    <option value="Shabelle zone Health Bureau">Nogob zone Health Bureau</option>
                                    <option value="Sitti zone Health Bureau">Sitti zone Health Bureau</option>                                    
                                    @break
                                @case("Harar, Harari")
                                    <option value="Amir-Nur Woreda Health Bureau">Amir-Nur Woreda Health Bureau</option>
                                    <option value="Abadir Woreda Health Bureau">Abadir Woreda Health Bureau</option>
                                    <option value="Shenkor Woreda Health Bureau">Shenkor Woreda Health Bureau</option>
                                    <option value="Jin'Eala Woreda Health Bureau">Jin'Eala Woreda Health Bureau</option>
                                    <option value="AboKer Woreda Health Bureau">AboKer Woreda Health Bureau</option>
                                    <option value="Hakim Woreda Health Bureau">Hakim Woreda Health Bureau</option>
                                    <option value="Sofi Woreda Health Bureau">Sofi Woreda Health Bureau</option>
                                    <option value="Erer Woreda Health Bureau">Erer Woreda Health Bureau</option>
                                    <option value="Dire-Tiyara Woreda Health Bureau">Dire-Tiyara Woreda Health Bureau</option>                                    
                                    @break
                                @case("Hawassa, Sidama")
                                    <option value="Aleta Chuko zone Health Bureau">Aleta Chuko zone Health Bureau</option>
                                    <option value="Aleta Wendo zone Health Bureau">Aleta Wendo zone Health Bureau</option>
                                    <option value="Arbegona zone Health Bureau">Arbegona zone Health Bureau</option>
                                    <option value="Aroresa zone Health Bureau">Aroresa zone Health Bureau</option>
                                    <option value="Hawassa Zuria zone Health Bureau">Hawassa Zuria zone Health Bureau</option>
                                    <option value="Bensa zone Health Bureau">Bensa zone Health Bureau</option>
                                    <option value="Bona zone Health Bureau">Bona zone Health Bureau</option>
                                    <option value="Boricha zone Health Bureau">Boricha zone Health Bureau</option>
                                    <option value="Bursa zone Health Bureau">Bursa zone Health Bureau</option>
                                    <option value="Chere zone Health Bureau">Chere zone Health Bureau</option>
                                    <option value="Dale zone Health Bureau">Dale zone Health Bureau</option>
                                    <option value="Dara zone Health Bureau">Dara zone Health Bureau</option>
                                    <option value="Gorche zone Health Bureau">Gorche zone Health Bureau</option>
                                    <option value="Hawassa Special zone Health Bureau">Hawassa Special zone Health Bureau</option>
                                    <option value="Hula zone Health Bureau">Hula zone Health Bureau</option>
                                    <option value="Loko zone Health Bureau">Loko zone Health Bureau</option>
                                    <option value="Malga zone Health Bureau">Malga zone Health Bureau</option>
                                    <option value="Shebedina zone Health Bureau">Shebedina zone Health Bureau</option>
                                    <option value="Wensho zone Health Bureau">Wensho zone Health Bureau</option>
                                    <option value="Wondo Genet zone Health Bureau">Wondo Genet zone Health Bureau</option>                                    
                                    @break
                                @case("Hawassa, SNNPR")
                                    <option value="Gamo Gofa zone Health Bureau">Gamo Gofa zone Health Bureau</option>
                                    <option value="Gedeo zone Health Bureau">Gedeo zone Health Bureau</option>
                                    <option value="Gurage zone Health Bureau">Gurage zone Health Bureau</option>
                                    <option value="Hadiya zone Health Bureau">Hadiya zone Health Bureau</option>
                                    <option value="Kembata zone Health Bureau">Kembata zone Health Bureau</option>
                                    <option value="Silt'e zone Health Bureau">Silt'e zone Health Bureau</option>
                                    <option value="South Omo zone Health Bureau">South Omo zone Health Bureau</option>
                                    <option value="Konso zone Health Bureau">Konso zone Health Bureau</option>
                                    <option value="Wolayita zone Health Bureau">Wolayita zone Health Bureau</option>
                                    <option value="Alaba zone Health Bureau">Alaba zone Health Bureau</option>
                                    <option value="Amaro zone Health Bureau">Amaro zone Health Bureau</option>
                                    <option value="Basketo zone Health Bureau">Basketo zone Health Bureau</option>
                                    <option value="Burji zone Health Bureau">Burji zone Health Bureau</option>
                                    <option value="Dirasha zone Health Bureau">Dirasha zone Health Bureau</option>
                                    <option value="Yem zone Health Bureau">Yem zone Health Bureau</option>                                    
                                    @break
                                @case("Jinka, SWNNPR")
                                    <option value="Bench Maji zone Health Bureau">Bench Maji zone Health Bureau</option>
                                    <option value="Dawro zone Health Bureau">Dawro zone Health Bureau</option>
                                    <option value="Keffa zone Health Bureau">Keffa zone Health Bureau</option>
                                    <option value="Sheka zone Health Bureau">Sheka zone Health Bureau</option>
                                    <option value="Konta zone Health Bureau">Konta zone Health Bureau</option>
                                    <option value="West Omo zone Health Bureau">West Omo zone Health Bureau</option>                                    
                                    @break
                                @case("Gambela, Gambela")
                                    <option value="Agnwaak zone Health Bureau">Agnwaak zone Health Bureau</option>
                                    <option value="Mehzenger zone Health Bureau">Mehzenger zone Health Bureau</option>
                                    <option value="Nuer zone Health Bureau">Nuer zone Health Bureau</option>
                                    <option value="Itang zone Health Bureau">Itang zone Health Bureau</option>                                    
                                    @break
                                @case("Assosa, Benishangul Gumuz")
                                    <option value="Assosa Special zone Health Bureau">Assosa Special zone Health Bureau</option>
                                    <option value="Kamashi zone Health Bureau">Kamashi zone Health Bureau</option>
                                    <option value="Metekel zone Health Bureau">Metekel zone Health Bureau</option>
                                    <option value="Mao-Komo zone Health Bureau">Mao-Komo zone Health Bureau</option>
                                    <option value="Pawe zone Health Bureau">Pawe zone Health Bureau</option>                                   
                                    @break
                                @case("Addis Ababa, Ethiopia")
                                    <option value="Addis Ketema Subcity Health Bureau">Addis Ketema Subcity Health Bureau</option>
                                    <option value="Akaky Kaliti Subcity Health Bureau">Akaky Kaliti Subcity Health Bureau</option>
                                    <option value="Arada Subcity Health Bureau">Arada Subcity Health Bureau</option>
                                    <option value="Bole Subcity Health Bureau">Bole Subcity Health Bureau</option>
                                    <option value="Gullele Subcity Health Bureau">Gullele Subcity Health Bureau</option>
                                    <option value="Kirkos Subcity Health Bureau">Kirkos Subcity Health Bureau</option>
                                    <option value="Kirkos Subcity Health Bureau">Kirkos Subcity Health Bureau</option>
                                    <option value="Lideta Subcity Health Bureau">Lideta Subcity Health Bureau</option>
                                    <option value="Lemi Kura Subcity Health Bureau">Lemi Kura Subcity Health Bureau</option>
                                    <option value="Nifas Silk-lafto Subcity Health Bureau">Nifas Silk-lafto Subcity Health Bureau</option>
                                    <option value="Yeka Subcity Health Bureau">Arsi zone Health Bureau</option>                                   
                                    @break
                                @case("Dire Dawa, Ethiopia")
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    <option value="Arsi zone Health Bureau">Arsi zone Health Bureau</option>
                                    @break  
                                @default
                                    <strong>Something Want Wrong!</strong>                                                        
                            @endswitch
                        @endif                   
                    @endforeach
                </select>
                @error('name') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="manager" value="{{ __('Manager ') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="user_id">                
                    <option><---Select Manager of Zonal Health Office---></option>
                    @forelse ($users as $user)
                        <option value={{ $user->id }}>{{ $user->firstname }} {{ $user->lastname }}-{{$user->address}}</option>
                    @empty
                        <option disabled><---No Manager to select. First create free/unassigned zonal health office manager---></option>
                    @endforelse
                </select>
                @error('user_id') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}" />
                <select name="type" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="type">                
                    <option><---Select Type of the office---></option>
                    <option value="4">Zone Health Bureau</option>
                </select>
                @error('type') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="region" value="{{ __('Region') }}" />
                <select name="region" class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="region">                
                    <option selected><---Select Region of Zonal Health Bureau ---></option>
                    @foreach ($userID as $userId)
                        @if($userId->role == 2)
                            @switch($userId->address)
                                @case("Adama, Oromia")
                                    <option value="Oromia">Oromia Region</option>
                                    @break
                                @case("Bahirdar, Amahara")
                                    <option value="Amhara">Amhara Region</option>
                                    @break
                                @case("Mekelle, Tigray")
                                    <option value="Tigray">Tigray Region</option>
                                    @break
                                @case("Semera, Afar")
                                    <option value="Afar">Afar Region</option>
                                    @break
                                @case("Assosa, Benishangul Gumuz")
                                    <option value="Benishangul Gumuz">Benishangul Gumuz Region</option>
                                    @break
                                @case("Jigjiga, Somali")
                                    <option value="Somali">Somali Region</option>
                                    @break
                                @case("Harar, Harari")
                                    <option value="Harari">Harari Region</option>
                                    @break
                                @case("Hawassa, SNNPR")
                                    <option value="SNNP">SNNP Region</option>
                                    @break
                                @case("Jinka, SWNNPR")
                                    <option value="SWNNP">SWNNP Region</option>
                                    @break
                                @case("Gambela, Gambela")
                                    <option value="Gambela">Gambela Region</option>
                                    @break                                
                                @case("Hawassa, Sidama")
                                    <option value="Sidama">Sidama Region</option>
                                    @break
                                @case("Addis Ababa, Ethiopia")
                                    <option value="Addis Ababa">Addis Ababa</option> 
                                    @break
                                @case("Dire Dawa, Ethiopia")
                                    <option value="Dire Dawa">Dire dawa</option>
                                    @break
                                @default
                                    <strong class = "error text-red-500">Something Want Wrong</strong>
                            @endswitch
                        @endif
                    @endforeach 
                </select>
                @error('region') <span class="error text-red-600">{{$message}}</span>@enderror
            </div> 
            <div class="mt-4">
            <x-jet-label for="Zone" value="{{ __('Zone') }}" />
                <select class="block mt-1 w-full border-gray-300 focus:border" wire:model.debounce.800ms="zone">                
                    <option><---Select Zona---></option>
                    @foreach ($userID as $userId)
                        @if($userId->role == 2)
                            @switch($userId->address)
                                @case("Adama, Oromia")
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Bale zone ">Bale zone </option>
                                    <option value="Borena zone ">Borena zone </option>
                                    <option value="Buno Bedele zone ">Buno Bedele zone </option>
                                    <option value="East Hararghe zone ">East Hararghe zone </option>
                                    <option value="East Shewa zone ">East Shewa zone </option>
                                    <option value="East Welega zone ">East Welega zone </option>
                                    <option value="Guji zone ">Guji zone </option>
                                    <option value="Horo Guduru Welega zone ">Horo Guduru Welega zone </option>
                                    <option value="Illubabor zone ">Illubabor zone </option>
                                    <option value="Jimma zone ">Jimma zone </option>
                                    <option value="Kelam Welega zone ">Kelam Welega zone </option>
                                    <option value="North Shewa zone ">North Shewa zone </option>
                                    <option value="Southwest Shewa zone ">Southwest Shewa zone </option>
                                    <option value="West Arsi zone ">West Arsi zone </option>
                                    <option value="West Guji zone ">West Guji zone </option>
                                    <option value="West Hararghe zone ">West Hararghe zone </option>
                                    <option value="West Shewa zone ">West Shewa zone </option>
                                    <option value="West Welega zone ">West Welega zone </option>
                                    <option value="Adama Special Zone ">Adama Special Zone </option>
                                    <option value="Jimma Special zone ">Jimma Special zone </option>
                                    <option value="Oromia Special Zone Surrounding Finfinne ">Oromia Special Zone Surrounding Finfinne </option>
                                    @break
                                @case("Bahirdar, Amahara")
                                    <option value="Agew Awi zone ">Agew Awi zone </option>
                                    <option value="East Gojjam zone ">East Gojjam zone </option>
                                    <option value="North Gondar zone ">North Gondar zone </option>
                                    <option value="North Shewa zone ">North Shewa zone </option>
                                    <option value="North Wollo zone ">North Wollo zone </option>
                                    <option value="Oromia Special zone ">Oromia Special zone </option>
                                    <option value="South Gondar zone ">South Gondar zone </option>
                                    <option value="South Wollo zone ">South Wollo zone </option>
                                    <option value="Weg Hemra zone ">Weg Hemra zone </option>
                                    <option value="West Gojjam zone ">West Gojjam zone </option>
                                    <option value="Bahirdar Special zone ">Bahirdar Special zone </option>
                                    <option value="Argobba Special zone ">Argobba Special zone </option>                                    
                                    @break
                                @case("Mekelle, Tigray")
                                    <option value="Central zone ">Central zone </option>
                                    <option value="Eastern zone ">Eastern zone </option>
                                    <option value="South Eastern zone ">South Eastern zone </option>
                                    <option value="Southern zone ">Southern zone </option>
                                    <option value="Western zone ">Western zone </option>
                                    <option value="North Western zone ">North Western zone </option>
                                    <option value="Mekelle Special zone ">Mekelle Special zone </option>                                    
                                    @break
                                @case("Semera, Afar")
                                    <option value="Awsi Rasu zone ">Awsi Rasu zone </option>
                                    <option value="Kilbet Rasu zone ">Kilbet Rasu zone </option>
                                    <option value="Gabi Rasu zone ">Gabi Rasu zone </option>
                                    <option value="Fanti Rasu zone ">Fanti Rasu zone </option>
                                    <option value="Hari Rasu zone ">Hari Rasu zone </option>
                                    <option value="Argobba Special zone ">Argobba Special zone </option>                                    
                                    @break
                                @case("Jigjiga, Somali")
                                    <option value="Afder zone ">Afder zone </option>
                                    <option value="Daawa zone ">Daawa zone </option>
                                    <option value="Dollo zone ">Dollo zone </option>
                                    <option value="Erer zone ">Erer zone </option>
                                    <option value="Fafan zone ">Fafan zone </option>
                                    <option value="Jarar zone ">Jarar zone </option>
                                    <option value="Korahe zone ">Korahe zone </option>
                                    <option value="Liben zone ">Liben zone </option>
                                    <option value="Nogob zone ">Nogob zone </option>
                                    <option value="Shabelle zone ">Nogob zone </option>
                                    <option value="Sitti zone ">Sitti zone </option>                                    
                                    @break
                                @case("Harar, Harari")
                                    <option value="Amir-Nur Woreda ">Amir-Nur Woreda </option>
                                    <option value="Abadir Woreda ">Abadir Woreda </option>
                                    <option value="Shenkor Woreda ">Shenkor Woreda </option>
                                    <option value="Jin'Eala Woreda ">Jin'Eala Woreda </option>
                                    <option value="AboKer Woreda ">AboKer Woreda </option>
                                    <option value="Hakim Woreda ">Hakim Woreda </option>
                                    <option value="Sofi Woreda ">Sofi Woreda </option>
                                    <option value="Erer Woreda ">Erer Woreda </option>
                                    <option value="Dire-Tiyara Woreda ">Dire-Tiyara Woreda </option>                                    
                                    @break
                                @case("Hawassa, Sidama")
                                    <option value="Aleta Chuko zone ">Aleta Chuko zone </option>
                                    <option value="Aleta Wendo zone ">Aleta Wendo zone </option>
                                    <option value="Arbegona zone ">Arbegona zone </option>
                                    <option value="Aroresa zone ">Aroresa zone </option>
                                    <option value="Hawassa Zuria zone ">Hawassa Zuria zone </option>
                                    <option value="Bensa zone ">Bensa zone </option>
                                    <option value="Bona zone ">Bona zone </option>
                                    <option value="Boricha zone ">Boricha zone </option>
                                    <option value="Bursa zone ">Bursa zone </option>
                                    <option value="Chere zone ">Chere zone </option>
                                    <option value="Dale zone ">Dale zone </option>
                                    <option value="Dara zone ">Dara zone </option>
                                    <option value="Gorche zone ">Gorche zone </option>
                                    <option value="Hawassa Special zone ">Hawassa Special zone </option>
                                    <option value="Hula zone ">Hula zone </option>
                                    <option value="Loko zone ">Loko zone </option>
                                    <option value="Malga zone ">Malga zone </option>
                                    <option value="Shebedina zone ">Shebedina zone </option>
                                    <option value="Wensho zone ">Wensho zone </option>
                                    <option value="Wondo Genet zone ">Wondo Genet zone </option>                                    
                                    @break
                                @case("Hawassa, SNNPR")
                                    <option value="Gamo Gofa zone ">Gamo Gofa zone </option>
                                    <option value="Gedeo zone ">Gedeo zone </option>
                                    <option value="Gurage zone ">Gurage zone </option>
                                    <option value="Hadiya zone ">Hadiya zone </option>
                                    <option value="Kembata zone ">Kembata zone </option>
                                    <option value="Silt'e zone ">Silt'e zone </option>
                                    <option value="South Omo zone ">South Omo zone </option>
                                    <option value="Konso zone ">Konso zone </option>
                                    <option value="Wolayita zone ">Wolayita zone </option>
                                    <option value="Alaba zone ">Alaba zone </option>
                                    <option value="Amaro zone ">Amaro zone </option>
                                    <option value="Basketo zone ">Basketo zone </option>
                                    <option value="Burji zone ">Burji zone </option>
                                    <option value="Dirasha zone ">Dirasha zone </option>
                                    <option value="Yem zone ">Yem zone </option>                                    
                                    @break
                                @case("Jinka, SWNNPR")
                                    <option value="Bench Maji zone ">Bench Maji zone </option>
                                    <option value="Dawro zone ">Dawro zone </option>
                                    <option value="Keffa zone ">Keffa zone </option>
                                    <option value="Sheka zone ">Sheka zone </option>
                                    <option value="Konta zone ">Konta zone </option>
                                    <option value="West Omo zone ">West Omo zone </option>                                    
                                    @break
                                @case("Gambela, Gambela")
                                    <option value="Agnwaak zone ">Agnwaak zone </option>
                                    <option value="Mehzenger zone ">Mehzenger zone </option>
                                    <option value="Nuer zone ">Nuer zone </option>
                                    <option value="Itang zone ">Itang zone </option>                                    
                                    @break
                                @case("Assosa, Benishangul Gumuz")
                                    <option value="Assosa Special zone ">Assosa Special zone </option>
                                    <option value="Kamashi zone ">Kamashi zone </option>
                                    <option value="Metekel zone ">Metekel zone </option>
                                    <option value="Mao-Komo zone ">Mao-Komo zone </option>
                                    <option value="Pawe zone ">Pawe zone </option>                                   
                                    @break
                                @case("Addis Ababa, Ethiopia")
                                    <option value="Addis Ketema Subcity ">Addis Ketema Subcity </option>
                                    <option value="Akaky Kaliti Subcity ">Akaky Kaliti Subcity </option>
                                    <option value="Arada Subcity ">Arada Subcity </option>
                                    <option value="Bole Subcity ">Bole Subcity </option>
                                    <option value="Gullele Subcity ">Gullele Subcity </option>
                                    <option value="Kirkos Subcity ">Kirkos Subcity </option>
                                    <option value="Kirkos Subcity ">Kirkos Subcity </option>
                                    <option value="Lideta Subcity ">Lideta Subcity </option>
                                    <option value="Lemi Kura Subcity ">Lemi Kura Subcity </option>
                                    <option value="Nifas Silk-lafto Subcity ">Nifas Silk-lafto Subcity </option>
                                    <option value="Yeka Subcity ">Arsi zone </option>                                   
                                    @break
                                @case("Dire Dawa, Ethiopia")
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    <option value="Arsi zone ">Arsi zone </option>
                                    @break  
                                @default
                                    <strong>Something Want Wrong!</strong>                                                        
                            @endswitch
                        @endif                   
                    @endforeach
                </select>
                @error('zone') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="woreda" value="{{ __('Woreda') }}" />
                <x-jet-input id="woreda" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="woreda" />
                @error('woreda') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="kebele" value="{{ __('Kebele') }}" />
                <x-jet-input id="kebele" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="kebele" />
                @error('kebele') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('City_Name') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="city" />
                @error('city') <span class="error text-red-600">{{$message}}</span>@enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            @if($modelId)
                <x-jet-secondary-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                    {{ __('update') }}
                </x-jet-secondary-button>
            @else
                <x-jet-secondary-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                    {{ __('create') }}
                </x-jet-secondary-button>
            @endif


            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
                <!-- data table -->
    <table class="min-w-full leading-normal">
        <thead class="text-purple-500">
            <tr >
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">Name center</th>
                {{-- <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">manager</th> --}}
                <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">type</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">region</th>
                <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">city_name</th>
                <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>

            </tr>
        </thead>
        <tbody>
            @forelse($organizations as $organ)
                <tr>
                    <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->name}}</td>
                    {{-- <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->user_id}}</td> --}}
                    @if( $organ->type ==4 )
                        <td class="px-6 py-3 border-b border-gray-200 bg-white text-sm">Zonal</td>
                    @endif
                    <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->region}}</td>
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{$organ->city}}</td>
                    <td>

                        <x-jet-button  class="px-6 py-3 border-b border-gray-200 bg-white text-sm" wire:click="updateShowModal({{ $organ->id }})">
                            {{ __('update') }}
                        </x-jet-button>
                        <x-jet-danger-button wire:click="deleteShowModel({{ $organ->id }})" >
                            {{ __('Delete') }}
                        </x-jet-button>
                        <x-jet-button class="bg-green-500" wire:click="viewShowModel({{ $organ->id }})">
                            {{ __('view') }}
                        </x-jet-button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td class="px-6 py-3 border-b border-black-200 bg-white text-lg">No Zonal Health Bureau added yet!</td>
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                    <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">
                </tr>
            @endforelse
        </tbody>
    </table>
                    <!-- Delete the organization modal -->
    <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

        <x-slot name="title">
            {{ __('Delete Account') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete your organization ? Once your account is deleted, all of its resources and data will be permanently deleted. ') }}


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-3" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Delete ') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
    <!-- For view Detail -->
    <x-jet-dialog-modal wire:model="modalViewDetailVisible">

        <x-slot name="title">
            {{ __('View Detail') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">

            <table class="leading-normal">
                <tbody>
                        <tr>
                            <th>Name of health center:</th>
                            <td> {{ $name }}</td>
                        </tr>
                        <tr>
                            <th>Manager of the health center:</th>
                            <td> {{ $user_id }}</td>
                        </tr>
                        <tr>
                            <th>Type of health center:</th>
                            <td>
                                @if ($type == 4)
                                    Zonal
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Region of health center:</th>
                            <td> {{ $region }} </td>
                        </tr>
                        <tr>
                            <th>City of health center:</th>
                            <td> {{ $city }} </td>
                        </tr>
                </tbody>
            </table>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalViewDetailVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

        </x-slot>
    </x-jet-dialog-modal>
</div>
