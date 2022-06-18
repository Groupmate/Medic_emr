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
            <select wire:model.defer="role" class="block mt-1 w-full border-gray-300 focus:border" >
                <option selected>---Select Role---</option>
                <option value="4">General Provost</option>
            </select>
            @error('role') <span class="error text-red-600">{{$message}}</span>@enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('address') }}" />
            @foreach($userID as $userId)
                @if($userId->role == 3)
                    @switch($userId->address)
                        @case("North Shewa, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wuchale, North Shewa, Oromia">Wuchale Woreda</option>
                                <option value = "Aleltu, North Shewa, Oromia">Aleltu Woreda</option>
                                <option value = "Abichu, North Shewa, Oromia">Abichu Woreda</option>
                                <option value = "Degem, North Shewa, Oromia">Degem Woreda</option>
                                <option value = "Dera North Shewa, Oromia">Dera Woreda</option>
                                <option value = "Fiche Town, North Shewa, Oromia">Fiche Town Woreda</option>
                                <option value = "Gerar Jarso, North Shewa, Oromia">Wucale Woreda</option>
                                <option value = "Hidabu Abote, North Shewa, Oromia">Hidabu Abote Woreda</option>
                                <option value = "Jida, North Shewa, Oromia">Jida Woreda</option>
                                <option value = "Kembibit, North Shewa, Oromia">Kembibit Woreda</option>
                                <option value = "Kuyu, North Shewa, Oromia">Kuyu Woreda</option>
                                <option value = "Debre Libanos, North Shewa, Oromia">Debre Libanos Woreda</option>
                                <option value = "Wara Jarso, North Shewa, Oromia">Wara Jarso Woreda</option>
                                <option value = "Yaya Gulale, North Shewa, Oromia">Yaya Gulale Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Arsi, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Aminya, Arsi, Oromia">Aminya Woreda</option>
                                <option value = "Aseko, Arsi, Oromia">Aseko Woreda</option>
                                <option value = "Asella Town, Arsi, Oromia">Asella Town Woreda</option>
                                <option value = "Bale Gasegar, Arsi, Oromia">Bale Gasegar Woreda</option>
                                <option value = "Batu Dugda, Arsi, Oromia">Batu Dugda Woreda</option>
                                <option value = "Chole, Arsi, Oromia">Chole Woreda</option>
                                <option value = "Digelufi Tijo, Arsi, Oromia">Digelufi Tijo Woreda</option>
                                <option value = "Dodota, Arsi, Oromia">Dodota Woreda</option>
                                <option value = "Enkole Wabe, Arsi, Oromia">Enkole Wabe Woreda</option>
                                <option value = "Gololcha, Arsi, Oromia">Gololcha Woreda</option>
                                <option value = "Guna, Arsi, Oromia">Guna Woreda</option>
                                <option value = "Hetosa, Arsi, Oromia">Hetosa Woreda</option>
                                <option value = "Yeju, Arsi, Oromia">Yeju Woreda</option>
                                <option value = "Leimofi Bilbilo, Arsi, Oromia">Leimofi Bilbilo Woreda</option>
                                <option value = "Lode Hetosa, Arsi, Oromia">Lode Hetosa Woreda</option>
                                <option value = "Merti, Arsi, Oromia">Merti Woreda</option>
                                <option value = "Munesa, Arsi, Oromia">Munesa Woreda</option>
                                <option value = "Robe, Arsi, Oromia">Robe Woreda</option>
                                <option value = "Seru, Arsi, Oromia">Seru Woreda</option>
                                <option value = "Sire, Arsi, Oromia">Sire Woreda</option>
                                <option value = "Shirka, Arsi, Oromia">Shirka Woreda</option>
                                <option value = "Sude, North Shewa, Oromia">Sude Woreda</option>
                                <option value = "Tena, North Shewa, Oromia">Tena Woreda</option>
                                <option value = "Tiya, North Shewa, Oromia">Tiya Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Bale, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Agarfa, Bale, Oromia">Agarfa Woreda</option>
                                <option value = "Berbere, Bale, Oromia">Berbere Woreda</option>
                                <option value = "Dawe Kachen, Bale, Oromia">Dawe Kachen Woreda</option>
                                <option value = "Dawe Serara, Bale, Oromia">Dawe Serara Woreda</option>
                                <option value = "Delo Menna, Bale, Oromia">Delo Menna Woreda</option>
                                <option value = "Dinsho, Bale, Oromia">Dinsho Woreda</option>
                                <option value = "Gasera, Bale, Oromia">Gasera Woreda</option>
                                <option value = "Ginir, Bale, Oromia">Ginir Woreda</option>
                                <option value = "Goba, Bale, Oromia">Goba Woreda</option>
                                <option value = "Goba Town, Bale, Oromia">Goba Town Woreda</option>
                                <option value = "Gololcha, Bale, Oromia">Wucale Woreda</option>
                                <option value = "Goro, Bale, Oromia">Goro Woreda</option>
                                <option value = "Guradamole, Bale, Oromia">Guradamole Woreda</option>
                                <option value = "Harena Buluk, Bale, Oromia">Harena Buluk Woreda</option>
                                <option value = "Legehida, Bale, Oromia">Legehida Woreda</option>
                                <option value = "Meda Welabu, Bale, Oromia">Meda Welabu Woreda</option>
                                <option value = "Raytu, Bale, Oromia">Raytu Woreda</option>
                                <option value = "Robe Town, Bale, Oromia">Robe Town Woreda</option>
                                <option value = "Seweyna, Bale, Oromia">Seweyna Woreda</option>
                                <option value = "Sinana, Bale, Oromia">Sinana Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Borena, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abaya, Borena, Oromia">Abaya Woreda</option>
                                <option value = "Arero, Borena, Oromia">Arero Woreda</option>
                                <option value = "Bule Hora, Borena, Oromia">Bule Hora Woreda</option>
                                <option value = "Dillo, Borena, Oromia">Dillo Woreda</option>
                                <option value = "Dire, Borena, Oromia">Dire Woreda</option>
                                <option value = "Dugda Dawa, Borena, Oromia">Dugda Dawa Woreda</option>
                                <option value = "Gelana, Borena, Oromia">Gelana Woreda</option>
                                <option value = "Gomole, Borena, Oromia">Gomole Woreda</option>
                                <option value = "Malka Soda, Borena, Oromia">Malka Soda Woreda</option>
                                <option value = "Miyu, Borena, Oromia">Miyu Woreda</option>
                                <option value = "Moyale, Borena, Oromia">Moyale Woreda</option>
                                <option value = "Teltele, Borena, Oromia">Teltele Woreda</option>
                                <option value = "Yabelo, Borena, Oromia">Yabelo Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Buno Bedele, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bedele, Buno Bedele, Oromia">Bedele Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("East Hararghe, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Babile, East Hararghe, Oromia">Babile Woreda</option>
                                <option value = "Badeno, East Hararghe, Oromia">Badeno Woreda</option>
                                <option value = "Chinaksen, East Hararghe, Oromia">Chinaksen Woreda</option>
                                <option value = "Dadar, East Hararghe, Oromia">Dadar Woreda</option>
                                <option value = "Fedis, East Hararghe, Oromia">Fedis Woreda</option>
                                <option value = "Girawa, East Hararghe, Oromia">Girawa Woreda</option>
                                <option value = "Gola Oda, East Hararghe, Oromia">Gola Oda Woreda</option>
                                <option value = "Goro Gutu, East Hararghe, Oromia">Goro Gutu Woreda</option>
                                <option value = "Gursum, East Hararghe, Oromia">Gursum Woreda</option>
                                <option value = "Haro Maya, East Hararghe, Oromia">Haro Maya Woreda</option>
                                <option value = "Jarso, East Hararghe, Oromia">Jarso Woreda</option>
                                <option value = "Kersa, East Hararghe, Oromia">Kersa Woreda</option>
                                <option value = "Kombolcha, East Hararghe, Oromia">Kombolcha Woreda</option>
                                <option value = "Kurfa Chele, East Hararghe, Oromia">Kurfa Chele Woreda</option>
                                <option value = "Malka Balo, East Hararghe, Oromia">Melka Balo Woreda</option>
                                <option value = "Meyumuluke, East Hararghe, Oromia">Meyumuluke Woreda</option>
                                <option value = "Meta, East Hararghe, Oromia">Meta Woreda</option>
                                <option value = "Midega Tola, East Hararghe, Oromia">Midaga Tola Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("East Shewa, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ada'a, East Shewa, Oromia">Ada'a Woreda</option>
                                <option value = "Adami Tullu and Jido Kombolcha, East Shewa, Oromia">Adami Tullu and Jido Kombolcha Woreda</option>
                                <option value = "Batu Town, East Shewa, Oromia">Batu Town Woreda</option>
                                <option value = "Bishoftu, East Shewa, Oromia">Bishoftu Woreda</option>
                                <option value = "Bora, East Shewa, Oromia">Bora Woreda</option>
                                <option value = "Boset, East Shewa, Oromia">Boset Woreda</option>
                                <option value = "Dugda, East Shewa, Oromia">Dugda Woreda</option>
                                <option value = "Fentale, East Shewa, Oromia">Fentale Woreda</option>
                                <option value = "Gimbichu, East Shewa, Oromia">Gimbichu Woreda</option>
                                <option value = "Liben, East Shewa, Oromia">Liben Woreda</option>
                                <option value = "Lume, East Shewa, Oromia">Lume Woreda</option>
                                <option value = "Adama Town, East Shewa, Oromia">Adama Town Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("East Welega, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bunaya Boshe, East Welega, Oromia">Bunaya Boshe Woreda</option>
                                <option value = "Diga, East Welega, Oromia">Diga Woreda</option>
                                <option value = "Gida Kiremu, East Welega, Oromia">Gida Kiremu Woreda</option>
                                <option value = "Gobu Seyo, East Welega, Oromia">Gobu Seyo Woreda</option>
                                <option value = "Gudeya Bila, East Welega, Oromia">Gudeya Bila Woreda</option>
                                <option value = "Guto Gida, East Welega, Oromia">Guto Gida Woreda</option>
                                <option value = "Haro Limmu, East Welega, Oromia">Haro Limmu Woreda</option>
                                <option value = "Ibantu, East Welega, Oromia">Ibantu Woreda</option>
                                <option value = "Jimma Arjo, East Welega, Oromia">Jimma Arjo Woreda</option>
                                <option value = "Leka Dulecha, East Welega, Oromia">Leka Dulecha Woreda</option>
                                <option value = "Limmu, East Welega, Oromia">Limmu Woreda</option>
                                <option value = "Naqamte, East Welega, Oromia">Naqamte Woreda</option>
                                <option value = "Nunu Kumba, East Welega, Oromia">Nunu Kumba Woreda</option>
                                <option value = "Sasiga, East Welega, Oromia">Sasiga Woreda</option>
                                <option value = "sibu Sire, East Welega, Oromia">sibu Sire Woreda</option>
                                <option value = "Wama Hagalo, East Welega, Oromia">Wama Hagalo Woreda</option>
                                <option value = "Wayu Tuka, East Welega, Oromia">Wayu Tuka Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Guji, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Adola, Guji, Oromia">Adola Woreda</option>
                                <option value = "Adola Town, Guji, Oromia">Adola Town Woreda</option>
                                <option value = "Ana Sora, Guji, Oromia">Ana Sora Woreda</option>
                                <option value = "Bore, Guji, Oromia">Bore Woreda</option>
                                <option value = "Dima, Guji, Oromia">Dima Woreda</option>
                                <option value = "Girja, Guji, Oromia">Girja Woreda</option>
                                <option value = "Hambela Wamena, Guji, Oromia">Hambela Wamena Woreda</option>
                                <option value = "Harenfema, Guji, Oromia">Harenfema Woreda</option>
                                <option value = "Kercha, Guji, Oromia">Kercha Woreda</option>
                                <option value = "Liben, Guji, Oromia">Liben Woreda</option>
                                <option value = "Negelle Borana, Guji, Oromia">Negelle Borana Woreda</option>
                                <option value = "Odo Shekiso, Guji, Oromia">Odo Shekiso Woreda</option>
                                <option value = "Uraga, Guji, Oromia">Uraga Woreda</option>
                                <option value = "Wadera, Guji, Oromia">Wadera Woreda</option>
                                <option value = "Gumi Eldallo, Guji, Oromia">Gumi Eldallo Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Horo Guduru Welega, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abaya Chomen, Horo Guduru Welega, Oromia">Abaya Chomen Woreda</option>
                                <option value = "Abe Dongoro, Horo Guduru Welega, Oromia">Abe Dongoro Woreda</option>
                                <option value = "Amuru, Horo Guduru Welega, Oromia">Amuru Woreda</option>
                                <option value = "Guduru, Horo Guduru Welega, Oromia">Guduru Woreda</option>
                                <option value = "Hababo Guduru, Horo Guduru Welega, Oromia">Hababo Guduru Woreda</option>
                                <option value = "Horo, Horo Guduru Welega, Oromia">Horo Woreda</option>
                                <option value = "Jardega Jarte, Horo Guduru Welega, Oromia">Jardega Jarte Woreda</option>
                                <option value = "Jimma Genete, Horo Guduru Welega, Oromia">Jimma Genete Woreda</option>
                                <option value = "Jimma Rare, Horo Guduru Welega, Oromia">Jimma Rare Woreda</option>
                                <option value = "Shambu Town, Horo Guduru Welega, Oromia">Shambu Town Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Illubabor, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ale, Illubabor, Oromia">Ale Woreda</option>
                                <option value = "Alge Sache, Illubabor, Oromia">Alge Sache Woreda</option>
                                <option value = "Bedele, Illubabor, Oromia">Bedele Woreda</option>
                                <option value = "Bedele Town, Illubabor, Oromia">Bedele Town Woreda</option>
                                <option value = "Bicho, Illubabor, Oromia">Bicho Woreda</option>
                                <option value = "Bilo Nopha, Illubabor, Oromia">Bilo Nopha Woreda</option>
                                <option value = "Borecha, Illubabor, Oromia">Borecha Woreda</option>
                                <option value = "Bure, Illubabor, Oromia">Bure Woreda</option>
                                <option value = "Chewaka, Illubabor, Oromia">Chewaka Woreda</option>
                                <option value = "Chora, Illubabor, Oromia">Chora Woreda</option>
                                <option value = "Dabo Hana, Illubabor, Oromia">Dabo Hana Woreda</option>
                                <option value = "Darimu, Illubabor, Oromia">Darimu Woreda</option>
                                <option value = "Dega, Illubabor, Oromia">Dega Woreda</option>
                                <option value = "Didessa, Illubabor, Oromia">Didessa Woreda</option>
                                <option value = "Didu, Illubabor, Oromia">Didu Woreda</option>
                                <option value = "Doreni, Illubabor, Oromia">Doreni Woreda</option>
                                <option value = "Gechi, Illubabor, Oromia">Gechi Woreda</option>
                                <option value = "Huka Halu, Illubabor, Oromia">Huka Halu Woreda</option>
                                <option value = "Hurumu, Illubabor, Oromia">Hurumu Woreda</option>
                                <option value = "Mako, Illubabor, Oromia">Mako Woreda</option>
                                <option value = "Metu, Illubabor, Oromia">Metu Woreda</option>
                                <option value = "Metu Town, Illubabor, Oromia">Metu Town Woreda</option>
                                <option value = "Nono Sele, Illubabor, Oromia">Nono Sele Woreda</option>
                                <option value = "Supena Sodo, Illubabor, Oromia">Supena Sodo Woreda</option>
                                <option value = "Bacho, Illubabor, Oromia">Bacho Woreda</option>
                                <option value = "Yayu, Illubabor, Oromia">Yayu Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Jimma, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Agaro Town, Jimma, Oromia">Agaro Town Woreda</option>
                                <option value = "Chora Botor, Jimma, Oromia">Chora Botor Woreda</option>
                                <option value = "Dedo, Jimma, Oromia">Dedo Woreda</option>
                                <option value = "Gera, Jimma, Oromia">Gera Woreda</option>
                                <option value = "Gomma, Jimma, Oromia">Gomma Woreda</option>
                                <option value = "Guma, Jimma, Oromia">Guma Woreda</option>
                                <option value = "Kersa, Jimma, Oromia">Kersa Woreda</option>
                                <option value = "Limmu Sakka, Jimma, Oromia">Limmu Sakka Woreda</option>
                                <option value = "Limmu Kosa, Jimma, Oromia">Limmu Kosa Woreda</option>
                                <option value = "Mana, Jimma, Oromia">Mana Woreda</option>
                                <option value = "Omo Nada, Jimma, Oromia">Omo Nada Woreda</option>
                                <option value = "Seka Chekorsa, Jimma, Oromia">Seka Chekorsa Woreda</option>
                                <option value = "Setema, Jimma, Oromia">Setema Woreda</option>
                                <option value = "shebe Senbo, Jimma, Oromia">shebe Senbo Woreda</option>
                                <option value = "Sigmo, Jimma, Oromia">Sigmo Woreda</option>
                                <option value = "Sokoru, Jimma, Oromia">Sokoru Woreda</option>
                                <option value = "Tiro Afeta, Jimma, Oromia">Tiro Afeta Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("kelam Welega, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Anfillo, kelam Welega, Oromia">Anfillo Woreda</option>
                                <option value = "Dale Sedi, kelam Welega, Oromia">Dale Sedi Woreda</option>
                                <option value = "Dale Wabera, kelam Welega, Oromia">Dale Wabera Woreda</option>
                                <option value = "Dembidolo Town, kelam Welega, Oromia">Dembidolo Town Woreda</option>
                                <option value = "Gawo Kebe, kelam Welega, Oromia">Gawo Kebe Woreda</option>
                                <option value = "Gidami, kelam Welega, Oromia">Gidami Woreda</option>
                                <option value = "Hawa Gelan, kelam Welega, Oromia">Hawa Gelan Woreda</option>
                                <option value = "Jimma Horo, kelam Welega, Oromia">Jimma Horo Woreda</option>
                                <option value = "Lalo Kile, kelam Welega, Oromia">Lalo Kile Woreda</option>
                                <option value = "Saye, kelam Welega, Oromia">Saye Woreda</option>
                                <option value = "Yemalogi Welele, kelam Welega, Oromia">Yemalogi Welele Woreda</option>
                                <option value = "Sedi Chenka, kelam Welega, Oromia">Sedi Chenka Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Southwest Shewa, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Amaya, Southwest Shewa, Oromia">Amaya Woreda</option>
                                <option value = "Becho, Southwest Shewa, Oromia">Becho Woreda</option>
                                <option value = "Dawo, Southwest Shewa, Oromia">Dawo Woreda</option>
                                <option value = "Elu, Southwest Shewa, Oromia">Elu Woreda</option>
                                <option value = "Goro, Southwest Shewa, Oromia">Goro Woreda</option>
                                <option value = "Kersana Malima, Southwest Shewa, Oromia">Kersana Malima Woreda</option>
                                <option value = "Seden Sodo, Southwest Shewa, Oromia">Seden Sodo Woreda</option>
                                <option value = "Sodo Dacha, Southwest Shewa, Oromia">Sodo Dacha Woreda</option>
                                <option value = "Tole, Southwest Shewa, Oromia">Tole Woreda</option>
                                <option value = "Waliso, Southwest Shewa, Oromia">Waliso Woreda</option>
                                <option value = "Waliso Town, Southwest Shewa, Oromia">Waliso Town Woreda</option>
                                <option value = "Wanchi, Southwest Shewa, Oromia">Wanchi Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Westi Arsi, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Adaba, Westi Arsi, Oromia">Adaba Woreda</option>
                                <option value = "Arsi Negele, Westi Arsi, Oromia">Arsi Negele Woreda</option>
                                <option value = "Dodola, Westi Arsi, Oromia">Dodola Woreda</option>
                                <option value = "Gedeb Hasasa, Westi Arsi, Oromia">Gedeb Hasasa Woreda</option>
                                <option value = "Kofele, Westi Arsi, Oromia">Kofele Woreda</option>
                                <option value = "Kofele, Westi Arsi, Oromia">Kofele Woreda</option>
                                <option value = "Kokosa, Westi Arsi, Oromia">Kokosa Woreda</option>
                                <option value = "Kore, Westi Arsi, Oromia">Kore Woreda</option>
                                <option value = "Naannawa Shashamane, Westi Arsi, Oromia">Naannawa Shashamane Woreda</option>
                                <option value = "Nensebo, Westi Arsi, Oromia">Nensebo Woreda</option>
                                <option value = "Seraro, Westi Arsi, Oromia">Seraro Woreda</option>
                                <option value = "Shala, Westi Arsi, Oromia">Shala Woreda</option>
                                <option value = "Shashamane Town, Westi Arsi, Oromia">Shashamane Town Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Westi Guji, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bule Hora, Westi Guji, Oromia">Bule Hora Woreda</option>
                                <option value = "Birbirsa Kojowa, Westi Guji, Oromia">Birbirsa Kojowa Woreda</option>
                                <option value = "Kerca, Westi Guji, Oromia">Kerca Woreda</option>
                                <option value = "Abeya, Westi Guji, Oromia">Abeya Woreda</option>
                                <option value = "Suro, Westi Guji, Oromia">Suro Woreda</option>
                                <option value = "Gelana, Westi Guji, Oromia">Gelana Woreda</option>
                                <option value = "Dugda Dawa, Westi Guji, Oromia">Dugda Dawa Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("West Hararghe, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Badessa Town, West Hararghe, Oromia">Badessa Town Woreda</option>
                                <option value = "Boke, West Hararghe, Oromia">Boke Woreda</option>
                                <option value = "char Char, West Hararghe, Oromia">char Char Woreda</option>
                                <option value = "Chiro Town, West Hararghe, Oromia">Chiro Town Woreda</option>
                                <option value = "Daru Labu, West Hararghe, Oromia">Daru Labu Woreda</option>
                                <option value = "Doba, West Hararghe, Oromia">Doba Woreda</option>
                                <option value = "Gamachis, West Hararghe, Oromia">Gamachis Woreda</option>
                                <option value = "Guba Koricha, West Hararghe, Oromia">Guba Koricha Woreda</option>
                                <option value = "Habro, West Hararghe, Oromia">Habro Woreda</option>
                                <option value = "Kuni, West Hararghe, Oromia">Kuni Woreda</option>
                                <option value = "Masela, West Hararghe, Oromia">Masela Woreda</option>
                                <option value = "Mieso, West Hararghe, Oromia">Mieso Woreda</option>
                                <option value = "Nannawa Chiro, West Hararghe, Oromia">Nannawa Chiro Woreda</option>
                                <option value = "Tulo, West Hararghe, Oromia">Tulo Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("West Shewa, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abuna Ginde Beret, West Shewa, Oromia">Abuna Ginde Beret Woreda</option>
                                <option value = "Ada'a Berga, West Shewa, Oromia">Ada'a Berga Woreda</option>
                                <option value = "Ambo Town, West Shewa, Oromia">Ambo Town Woreda</option>
                                <option value = "Bako Tibe, West Shewa, Oromia">Bako Tibe Woreda</option>
                                <option value = "Cheliya, West Shewa, Oromia">Cheliya Woreda</option>
                                <option value = "Dano, West Shewa, Oromia">Dano Woreda</option>
                                <option value = "Dendi, West Shewa, Oromia">Dendi Woreda</option>
                                <option value = "Dire Enchini, West Shewa, Oromia">Dire Enchini Woreda</option>
                                <option value = "Ejerie, West Shewa, Oromia">Ejerie Woreda</option>
                                <option value = "Elfata, West Shewa, Oromia">Elfata Woreda</option>
                                <option value = "Ginde Beret, West Shewa, Oromia">Ginde Beret Woreda</option>
                                <option value = "Gurraacha Enchini, West Shewa, Oromia">Gurraacha Enchini Woreda</option>
                                <option value = "Jeldu, West Shewa, Oromia">Jeldu Woreda</option>
                                <option value = "Jibat, West Shewa, Oromia">Jibat Woreda</option>
                                <option value = "Meta Robi, West Shewa, Oromia">Meta Robi Woreda</option>
                                <option value = "Midakegn, West Shewa, Oromia">Midakegn Woreda</option>
                                <option value = "Naannawa Ambo, West Shewa, Oromia">Naannawa Ambo Woreda</option>
                                <option value = "Nono, West Shewa, Oromia">Nono Woreda</option>
                                <option value = "Toke Kutaye, West Shewa, Oromia">Toke Kutaye Woreda</option>
                                <option value = "Liban Jawi, West Shewa, Oromia">Liban Jawi Woreda</option>
                                <option value = "Cobii, West Shewa, Oromia">Cobii Woreda</option>
                                <option value = "Ilu Galan, West Shewa, Oromia">Ilu Galan Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("West Welega, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ayra, West Welega, Oromia">Ayra Woreda</option>
                                <option value = "Babo Gambela, West Welega, Oromia">Babo Gambela Woreda</option>
                                <option value = "Begi, West Welega, Oromia">Begi Woreda</option>
                                <option value = "Boji Chokorsa, West Welega, Oromia">Boji Chokorsa Woreda</option>
                                <option value = "Boji Dirmaji, West Welega, Oromia">Boji Dirmaji Woreda</option>
                                <option value = "Genji, West Welega, Oromia">Genji Woreda</option>
                                <option value = "Gimbi, West Welega, Oromia">Gimbi Woreda</option>
                                <option value = "Gimbi Town, West Welega, Oromia">Gimbi Town Woreda</option>
                                <option value = "Guliso, West Welega, Oromia">Guliso Woreda</option>
                                <option value = "Haru, West Welega, Oromia">Haru Woreda</option>
                                <option value = "Homa, West Welega, Oromia">Homa Woreda</option>
                                <option value = "Jarso, West Welega, Oromia">Jarso Woreda</option>
                                <option value = "Kondala, West Welega, Oromia">Kondala Woreda</option>
                                <option value = "Kiltu Kara, West Welega, Oromia">Kiltu Kara Woreda</option>
                                <option value = "Lalo Asabi, West Welega, Oromia">Lalo Asabi Woreda</option>
                                <option value = "Mana Sibu, West Welega, Oromia">Mana Sibu Woreda</option>
                                <option value = "Nejo, West Welega, Oromia">Nejo Woreda</option>
                                <option value = "Nole Kaba, West Welega, Oromia">Nole Kaba Woreda</option>
                                <option value = "Sayo Nole, West Welega, Oromia">Sayo Nole Woreda</option>
                                <option value = "Yubdo, West Welega, Oromia">Yubdo Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Adama Special Zone, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Adama, Adama Special Zone, Oromia">Adama Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Jimma Special Zone, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Jimma, Jimma Special Zone, Oromia">Jimma Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Oromia Special Zone Surrounding Finfinne, Oromia")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Akaki, Oromia Special Zone Surrounding Finfinne, Oromia">Akaki Woreda</option>
                                <option value = "Bereh, Oromia Special Zone Surrounding Finfinne, Oromia">Bereh Woreda</option>
                                <option value = "Burayu, Oromia Special Zone Surrounding Finfinne, Oromia">Burayu Woreda</option>
                                <option value = "Holeta, Oromia Special Zone Surrounding Finfinne, Oromia">Holeta Woreda</option>
                                <option value = "Koye Feche, Oromia Special Zone Surrounding Finfinne, Oromia">Koye Feche Woreda</option>
                                <option value = "Mulo, Oromia Special Zone Surrounding Finfinne, Oromia">Mulo Woreda</option>
                                <option value = "Sebeta Hawas, Oromia Special Zone Surrounding Finfinne, Oromia">Sebeta Hawas Woreda</option>
                                <option value = "Sendafa Town, Oromia Special Zone Surrounding Finfinne, Oromia">Sendafa Town Woreda</option>
                                <option value = "Sululta, Oromia Special Zone Surrounding Finfinne, Oromia">Sululta Woreda</option>
                                <option value = "Walmara, Oromia Special Zone Surrounding Finfinne, Oromia">Walmara Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Agew Awi, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ankasha Guagusa, Agew Awi, Amhara">Ankasha Guagusa Woreda</option>
                                <option value = "Banja Shekudad, Agew Awi, Amhara">Banja Shekudad Woreda</option>
                                <option value = "Dangila, Agew Awi, Amhara">Dangila Woreda</option>
                                <option value = "Faggeta Lekoma, Agew Awi, Amhara">Faggeta Lekoma Woreda</option>
                                <option value = "Guagusa Shekudad, Agew Awi, Amhara">Guagusa Shekudad Woreda</option>
                                <option value = "Guangua, Agew Awi, Amhara">Guangua Woreda</option>
                                <option value = "Jawi, Agew Awi, Amhara">Jawi Woreda</option>                               
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("East Gojjam, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Aneded, East Gojjam, Amhara">Aneded Woreda</option>
                                <option value = "Awabel, East Gojjam, Amhara">Awabel Woreda</option>
                                <option value = "Baso Liban, East Gojjam, Amhara">Baso Liban Woreda</option>
                                <option value = "Baso Liben, East Gojjam, Amhara">Baso Liben Woreda</option>
                                <option value = "Bibugn, East Gojjam, Amhara">Bibugn Woreda</option>
                                <option value = "Debay Telatgen, East Gojjam, Amhara">Debay Telatgen Woreda</option>
                                <option value = "Debre Elias, East Gojjam, Amhara">Debre Elias Woreda</option>
                                <option value = "Debre Markos Town, East Gojjam, Amhara">Debre Markos Town Woreda</option>
                                <option value = "Dejen, East Gojjam, Amhara">Dejen Woreda</option>
                                <option value = "Enarj Enawga, East Gojjam, Amhara">Enarj Enawga Woreda</option>
                                <option value = "Enbise Sar Midir, East Gojjam, Amhara">Enbise Sar Midir Woreda</option>
                                <option value = "Enemay, East Gojjam, Amhara">Enemay Woreda</option>
                                <option value = "Goncha, East Gojjam, Amhara">Goncha Woreda</option>
                                <option value = "Goncha Siso Enese, East Gojjam, Amhara">Goncha Siso Enese Woreda</option>
                                <option value = "Gozamin, East Gojjam, Amhara">Gozamin Woreda</option>
                                <option value = "Hulet Ej Enese, East Gojjam, Amhara">Hulet Ej Enese Woreda</option>
                                <option value = "Machakel, East Gojjam, Amhara">Machakel Woreda</option>
                                <option value = "Shebel Berenta, East Gojjam, Amhara">Shebel Berenta Woreda</option>
                                <option value = "Sinan, East Gojjam, Amhara">Sinan Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("North Gondar, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Addi Arkay, North Gondar, Amhara">Addi Arkay Woreda</option>
                                <option value = "Alefa, North Gondar, Amhara">Alefa Woreda</option>
                                <option value = "Beyeda, North Gondar, Amhara">Beyeda Woreda</option>
                                <option value = "Chilga, North Gondar, Amhara">Chilga Woreda</option>
                                <option value = "Dabat, North Gondar, Amhara">Dabat Woreda</option>
                                <option value = "Debark, North Gondar, Amhara">Debark Woreda</option>
                                <option value = "Dembiya, North Gondar, Amhara">Dembiya Woreda</option>
                                <option value = "Gonder Town, North Gondar, Amhara">Gonder Town Woreda</option>
                                <option value = "Gondar Zuria, North Gondar, Amhara">Gondar Zuria Woreda</option>
                                <option value = "Jan Amora, North Gondar, Amhara">Jan Amora Woreda</option>
                                <option value = "Lay Armachiho, North Gondar, Amhara">Lay Armachiho Woreda</option>
                                <option value = "Metemma, North Gondar, Amhara">Metemma Woreda</option>
                                <option value = "Mirab Armachiho, North Gondar, Amhara">Mirab Armachiho Woreda</option>
                                <option value = "Mirab Belessa, North Gondar, Amhara">Mirab Belessa Woreda</option>
                                <option value = "Misraq Belessa, North Gondar, Amhara">Misraq Belessa Woreda</option>
                                <option value = "Qwara, North Gondar, Amhara">Qwara Woreda</option>
                                <option value = "Tach Armachiho, North Gondar, Amhara">Tach Armachiho Woreda</option>
                                <option value = "Takusa, North Gondar, Amhara">Takusa Woreda</option>
                                <option value = "Tegeda, North Gondar, Amhara">Tegeda Woreda</option>
                                <option value = "Tselemt, North Gondar, Amhara">Tselemt Woreda</option>
                                <option value = "Wegera, North Gondar, Amhara">Wegera Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("North Shewa, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Angollala Tera, North Shewa, Amhara">Angollala Tera Woreda</option>
                                <option value = "Ankober, North Shewa, Amhara">Ankober Woreda</option>
                                <option value = "Antsokiyana Gemza, North Shewa, Amhara">Antsokiyana Gemza Woreda</option>
                                <option value = "Asagirt, North Shewa, Amhara">Asagirt Woreda</option>
                                <option value = "Basona Werana, North Shewa, Amhara">Basona Werana Woreda</option>
                                <option value = "Berehet, North Shewa, Amhara">Berehet Woreda</option>
                                <option value = "Debre Birhan Town, North Shewa, Amhara">Debre Birhan Town Woreda</option>
                                <option value = "Efratana Gidim, North Shewa, Amhara">Efratana Gidim Woreda</option>
                                <option value = "Ensaro, North Shewa, Amhara">Ensaro Woreda</option>
                                <option value = "Gishe, North Shewa, Amhara">Gishe Woreda</option>
                                <option value = "Hagere Mariamna Kesem, North Shewa, Amhara">Hagere Mariamna Kesem Woreda</option>
                                <option value = "Kewet, North Shewa, Amhara">Kewet Woreda</option>
                                <option value = "Menjarna Shenkora, North Shewa, Amhara">Menjarna Shenkora Woreda</option>
                                <option value = "Menz Gera Midir, North Shewa, Amhara">Menz Gera Midir Woreda</option>
                                <option value = "Menz Keya Gebreal, North Shewa, Amhara">Menz Keya Gebreal Woreda</option>
                                <option value = "Menz Lalo Midir, North Shewa, Amhara">Menz Lalo Midir Woreda</option>
                                <option value = "Menz Mama Midir, North Shewa, Amhara">Menz Mama Midir Woreda</option>
                                <option value = "Merhabete, North Shewa, Amhara">Merhabete Woreda</option>
                                <option value = "Mida Woremo, North Shewa, Amhara">Mida Woremo Woreda</option>
                                <option value = "Mojana Wadera, North Shewa, Amhara">Mojana Wadera Woreda</option>
                                <option value = "Moratna Jiru, North Shewa, Amhara">Moratna Jiru Woreda</option>
                                <option value = "Siyadebrina Wayu, North Shewa, Amhara">Siyadebrina Wayu Woreda</option>
                                <option value = "Termaber, North Shewa, Amhara">Termaber Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("North Wollo, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bugna, North Wollo, Amhara">Bugna Woreda</option>
                                <option value = "Dawunt, North Wollo, Amhara">Dawunt Woreda</option>
                                <option value = "Delanta, North Wollo, Amhara">Delanta Woreda</option>
                                <option value = "Gidan, North Wollo, Amhara">Gidan Woreda</option>
                                <option value = "Guba Lafto, North Wollo, Amhara">Guba Lafto Woreda</option>
                                <option value = "Habru, North Wollo, Amhara">Habru Woreda</option>
                                <option value = "Kobo, North Wollo, Amhara">Kobo Woreda</option>
                                <option value = "Lasta, North Wollo, Amhara">Lasta Woreda</option>
                                <option value = "Meket, North Wollo, Amhara">Meket Woreda</option>
                                <option value = "Wadla, North Wollo, Amhara">Wadla Woreda</option>
                                <option value = "Weldiya Town, North Wollo, Amhara">Weldiya Town Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Oromia Special Zone, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Artuma Fursi, Oromia Special Zone, Amhara">Artuma Fursi Woreda</option>
                                <option value = "Baati, Oromia Special Zone, Amhara">Baati Woreda</option>
                                <option value = "Dawa Chaffa, Oromia Special Zone, Amhara">Dawa Chaffa Woreda</option>
                                <option value = "Dawa Harewa, Oromia Special Zone, Amhara">Dawa Harewa Woreda</option>
                                <option value = "Jilee Dhummuugaa, Oromia Special Zone, Amhara">Jilee Dhummuugaa Woreda</option>
                                <option value = "Kemise Town, Oromia Special Zone, Amhara">Kemise Town Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("South Gondar, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Debre Tabor Town, South Gondar, Amhara">Debre Tabor Town Woreda</option>
                                <option value = "Dera, South Gondar, Amhara">Dera Woreda</option>
                                <option value = "Ebenat, South Gondar, Amhara">Ebenat Woreda</option>
                                <option value = "Farta, South Gondar, Amhara">Farta Woreda</option>
                                <option value = "Fogera, South Gondar, Amhara">Fogera Woreda</option>
                                <option value = "Lay Gayint, South Gondar, Amhara">Lay Gayint Woreda</option>
                                <option value = "Libo Kemekem, South Gondar, Amhara">Libo Kemekem Woreda</option>
                                <option value = "Mirab Este, South Gondar, Amhara">Mirab Este Woreda</option>
                                <option value = "Misraq Este, South Gondar, Amhara">Misraq Este Woreda</option>
                                <option value = "Simada, South Gondar, Amhara">Simada Woreda</option>
                                <option value = "Tach Gayint, South Gondar, Amhara">Tach Gayint Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("South Wollo, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abuko, South Wollo, Amhara">Abuko Woreda</option>
                                <option value = "Ambasel, South Wollo, Amhara">Ambasel Woreda</option>
                                <option value = "Debre Sina, South Wollo, Amhara">Debre Sina Woreda</option>
                                <option value = "Dessie Town, South Wollo, Amhara">Dessie Town Woreda</option>
                                <option value = "Dessie Zuria, South Wollo, Amhara">Dessie Zuria Woreda</option>
                                <option value = "Jama, South Wollo, Amhara">Jama Woreda</option>
                                <option value = "Kalu, South Wollo, Amhara">Kalu Woreda</option>
                                <option value = "Kelela, South Wollo, Amhara">Kelela Woreda</option>
                                <option value = "Kombolcha Town, South Wollo, Amhara">Kombolcha Town Woreda</option>
                                <option value = "Kutaber, South Wollo, Amhara">Kutaber Woreda</option>
                                <option value = "Legahida, South Wollo, Amhara">Legahida Woreda</option>
                                <option value = "Legambo, South Wollo, Amhara">Legambo Woreda</option>
                                <option value = "Magdala, South Wollo, Amhara">Magdala Woreda</option>
                                <option value = "Mehal Sayint, South Wollo, Amhara">Mehal Sayint Woreda</option>
                                <option value = "Sayint, South Wollo, Amhara">Sayint Woreda</option>
                                <option value = "Tahuledere, South Wollo, Amhara">Tahuledere Woreda</option>
                                <option value = "Tenta, South Wollo, Amhara">Tenta Woreda</option>
                                <option value = "Wegde, South Wollo, Amhara">Wegde Woreda</option>
                                <option value = "Were Babu, South Wollo, Amhara">Were Babu Woreda</option>
                                <option value = "Were Ilu, South Wollo, Amhara">Were Ilu Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Wag Hemra, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abergele, Wag Hemra, Amhara">Abergele Woreda</option>
                                <option value = "Dehana, Wag Hemra, Amhara">Dehana Woreda</option>
                                <option value = "Gazbibla, Wag Hemra, Amhara">Gazbibla Woreda</option>
                                <option value = "sehala, Wag Hemra, Amhara">sehala Woreda</option>
                                <option value = "Soqota, Wag Hemra, Amhara">Soqota Woreda</option>
                                <option value = "Soqota Town, Wag Hemra, Amhara">Soqota Town Woreda</option>
                                <option value = "Zikuala, Wag Hemra, Amhara">Zikuala Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("West Gojjam, Amhara")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bahirdar Zuria, West Gojjam, Amhara">Bahirdar Zuria Woreda</option>
                                <option value = "Bure, West Gojjam, Amhara">Bure Woreda</option>
                                <option value = "Dega Damot, West Gojjam, Amhara">Dega Damot Woreda</option>
                                <option value = "Debub Achefar, West Gojjam, Amhara">Debub Achefar Woreda</option>
                                <option value = "Dembecha, West Gojjam, Amhara">Dembecha Woreda</option>
                                <option value = "Jabi Tehnan, West Gojjam, Amhara">Jabi Tehnan Woreda</option>
                                <option value = "Finota Selam Town, West Gojjam, Amhara">Finota Selam Town Woreda</option>
                                <option value = "Kuarit, West Gojjam, Amhara">Kuarit Woreda</option>
                                <option value = "Mecha, West Gojjam, Amhara">Mecha Woreda</option>
                                <option value = "Sekela, West Gojjam, Amhara">Sekela Woreda</option>
                                <option value = "Semein Achefe, West Gojjam, Amhara">Semein Achefe Woreda</option>
                                <option value = "Wemberma, West Gojjam, Amhara">Wemberma Woreda</option>
                                <option value = "Yilmana Densa, West Gojjam, Amhara">Yilmana Densa Woreda</option>
                                <option value = "Bahirdar Special Woreda, West Gojjam, Amhara">Bahirdar Special Woreda</option>
                                <option value = "Argobba Special Woreda, West Gojjam, Amhara">Argobba Special Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Centeral, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abergele, Centeral, Tigray">Abergele Woreda</option>
                                <option value = "Adwa, Centeral, Tigray">Adwa Woreda</option>
                                <option value = "Adwa Town, Centeral, Tigray">Adwa Town Woreda</option>
                                <option value = "Axum, Centeral, Tigray">Axum Woreda</option>
                                <option value = "Enticho, Centeral, Tigray">Enticho Woreda</option>
                                <option value = "Kola Tembien, Centeral, Tigray">Kola Tembien Woreda</option>
                                <option value = "La'ilay Maychew, Centeral, Tigray">La'ilay Maychew Woreda</option>
                                <option value = "Mered Lehe, Centeral, Tigray">Mered Lehe Woreda</option>
                                <option value = "Naeder Adet, Centeral, Tigray">Naeder Adet Woreda</option>
                                <option value = "Tahtay Maychew, Centeral, Tigray">Tahtay Maychew Woreda</option>
                                <option value = "Tanqua Millash, Centeral, Tigray">Tanqua Millash Woreda</option>
                                <option value = "Werie Lehe, Centeral, Tigray">Werie Lehe Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Eastern, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Adigrat, Eastern, Tigray">Adigrat Woreda</option>
                                <option value = "Atsbi Wenberta, Eastern, Tigray">Atsbi Wenberta Woreda</option>
                                <option value = "Ganta Afeshum, Eastern, Tigray">Ganta Afeshum Woreda</option>
                                <option value = "Gulomahda, Eastern, Tigray">Gulomahda Woreda</option>
                                <option value = "Hawzen, Eastern, Tigray">Hawzen Woreda</option>
                                <option value = "Irob, Eastern, Tigray">Irob Woreda</option>
                                <option value = "Kilte Awulaelo, Eastern, Tigray">Kilte Awulaelo Woreda</option>
                                <option value = "Saesi Tsaedaemba, Eastern, Tigray">Saesi Tsaedaemba Woreda</option>
                                <option value = "Wukro, Eastern, Tigray">Wukro Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("South Eastern, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Dogu'a Tembein, South Eastern, Tigray">Dogu'a Tembein Woreda</option>
                                <option value = "Enderta, South Eastern, Tigray">Enderta Woreda</option>
                                <option value = "Hintalo Wajirat, South Eastern, Tigray">Hintalo Wajirat Woreda</option>
                                <option value = "Saharti Samre, South Eastern, Tigray">Saharti Samre Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Southern, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Alaje, Southern, Tigray">Alaje Woreda</option>
                                <option value = "Alamata, Southern, Tigray">Alamata Woreda</option>
                                <option value = "Endamekoni, Southern, Tigray">Endamekoni Woreda</option>
                                <option value = "Korem, Southern, Tigray">Korem Woreda</option>
                                <option value = "Maychew, Southern, Tigray">Maychew Woreda</option>
                                <option value = "Ofla, Southern, Tigray">Ofla Woreda</option>
                                <option value = "Raya Azebo, Southern, Tigray">Raya Azebo Woreda</option>                         
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Western, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Kafta Humera, Western, Tigray">Kafta Humera Woreda</option>
                                <option value = "Tsegede, Western, Tigray">Tsegede Woreda</option>
                                <option value = "Welkait, Western, Tigray">Welkait Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("North Western, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Asgede Tsimbla, North Western, Tigray">Asgede Tsimbla Woreda</option>
                                <option value = "La'ilay Adiyabo, North Western, Tigray">La'ilay Adiyabo Woreda</option>
                                <option value = "Medebay Zana, North Western, Tigray">Medebay Zana Woreda</option>
                                <option value = "Sheraro, North Western, Tigray">Sheraro Woreda</option>
                                <option value = "Shire Inda Silassie, North Western, Tigray">Shire Inda Silassie Woreda</option>
                                <option value = "Tahtay Adiyabo, North Western, Tigray">Tahtay Adiyabo Woreda</option>
                                <option value = "Tahtay Koraro, North Western, Tigray">Tahtay Koraro Woreda</option>
                                <option value = "Tselemti, North Western, Tigray">Tselemti Woreda</option>
                                <option value = "Tsimbla, North Western, Tigray">Tsimbla Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Mekelle Special Zone, Tigray")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Mekelle Woreda, Mekelle Special Zone, Tigray">Mekelle Woreda</option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                         @case("Awsi Rasu(Zone1), Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ada'ar, Awsi Rasu(Zone1), Afar">Ada'ar Woreda</option>
                                <option value = "Afambo, Awsi Rasu(Zone1), Afar">Afambo Woreda</option>
                                <option value = "Asayita, Awsi Rasu(Zone1), Afar">Asayita Woreda</option>
                                <option value = "Chifra, Awsi Rasu(Zone1), Afar">Chifra Woreda</option>
                                <option value = "Dubti, Awsi Rasu(Zone1), Afar">Dubti Woreda</option>
                                <option value = "Elidar, Awsi Rasu(Zone1), Afar">Elidar Woreda</option>
                                <option value = "Kori, Awsi Rasu(Zone1), Afar">Kori Woreda</option>
                                <option value = "Mille, Awsi Rasu(Zone1), Afar">Mille Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                         @case("Kilbet Rasu(Zone2), Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abala, Kilbet Rasu(Zone2), Afar">Abala Woreda</option>
                                <option value = "Afdera, Kilbet Rasu(Zone2), Afar">Afdera Woreda</option>
                                <option value = "Berhale, Kilbet Rasu(Zone2), Afar">Berhale Woreda</option>
                                <option value = "Bidu, Kilbet Rasu(Zone2), Afar">Bidu Woreda</option>
                                <option value = "Dallol, Kilbet Rasu(Zone2), Afar">Dallol Woreda</option>
                                <option value = "Erebti, Kilbet Rasu(Zone2), Afar">Erebti Woreda</option>
                                <option value = "Koneba, Kilbet Rasu(Zone2), Afar">Koneba Woreda</option>
                                <option value = "Megale, Kilbet Rasu(Zone2), Afar">Megale Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Gabi Rasu(Zone3), Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Amibara, Gabi Rasu(Zone3), Afar">Amibara Woreda</option>
                                <option value = "Awash Fentale, Gabi Rasu(Zone3), Afar">Awash Fentale Woreda</option>
                                <option value = "Bure Mudaytu, Gabi Rasu(Zone3), Afar">Bure Mudaytu Woreda</option>
                                <option value = "Dulecha, Gabi Rasu(Zone3), Afar">Dulecha Woreda</option>
                                <option value = "Gewane, Gabi Rasu(Zone3), Afar">Gewane Woreda</option>                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Fanti Rasu(Zone4), Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Aura, Fanti Rasu(Zone4), Afar">Aura Woreda</option>
                                <option value = "Ewa, Fanti Rasu(Zone4), Afar">Ewa Woreda</option>
                                <option value = "Gulina, Fanti Rasu(Zone4), Afar">Gulina Woreda</option>
                                <option value = "Teru, Fanti Rasu(Zone4), Afar">Teru Woreda</option>
                                <option value = "Yalo, Fanti Rasu(Zone4), Afar">Yalo Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hari Rasu(Zone5), Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Dalifage, Hari Rasu(Zone5), Afar">Dalifage Woreda</option>
                                <option value = "Dewe, Hari Rasu(Zone5), Afar">Dewe Woreda</option>
                                <option value = "Hadele Ele, Hari Rasu(Zone5), Afar">Hadele Ele Woreda</option>
                                <option value = "Simurobi Gele'alo, Hari Rasu(Zone5), Afar">Simurobi Gele'alo Woreda</option>
                                <option value = "Telalak, Hari Rasu(Zone5), Afar">Telalak Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Argobba Special Zone, Afar")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Argobba, Argobba Special Zone, Afar">Argobba Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Afder, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Afder, Afder, Somali">Afder Woreda</option>
                                <option value = "Bare, Afder, Somali">Bare Woreda</option>
                                <option value = "Chereti, Afder, Somali">Chereti Woreda</option>
                                <option value = "Dolobay, Afder, Somali">Dolobay Woreda</option>
                                <option value = "Elekere, Afder, Somali">Elekere Woreda</option>
                                <option value = "GodGod, Afder, Somali">GodGod Woreda</option>
                                <option value = "Hargelle, Afder, Somali">Hargelle Woreda</option>
                                <option value = "IIlig Dheere, Afder, Somali">IIlig Dheere Woreda</option>
                                <option value = "Mirab Imi, Afder, Somali">Mirab Imi Woreda</option>
                                <option value = "Raaso, Afder, Somali">Raaso Woreda</option>
                                <option value = "Qooxle, Afder, Somali">Qooxle Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Daawa, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Hudet, Daawa, Somali">Hudet Woreda</option>
                                <option value = "Moyale, Daawa, Somali">Moyale Woreda</option>
                                <option value = "Mubaarak, Daawa, Somali">Mubaarak Woreda</option>
                                <option value = "Qadhaadhumo, Daawa, Somali">Qadhaadhumo Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dollo, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Boh, Dollo, Somali">Boh Woreda</option>
                                <option value = "Danot, Dollo, Somali">Danot Woreda</option>
                                <option value = "Daratole, Dollo, Somali">Daratole Woreda</option>
                                <option value = "Geladin, Dollo, Somali">Geladin Woreda</option>
                                <option value = "Gal-Hamur, Dollo, Somali">Gal-Hamur Woreda</option>
                                <option value = "Lehel-Yucub, Dollo, Somali">Lehel-Yucub Woreda</option>
                                <option value = "Warder, Dollo, Somali">Warder Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Erer, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Fiq, Erer, Somali">Fiq Woreda</option>
                                <option value = "Lagahida, Erer, Somali">Lagahida Woreda</option>
                                <option value = "Mayaa-Muluqo, Erer, Somali">Mayaa-Muluqo Woreda</option>
                                <option value = "Qubi, Erer, Somali">Qubi Woreda</option>
                                <option value = "Salahad, Erer, Somali">Salahad Woreda</option>
                                <option value = "Waangaay, Erer, Somali">Waangaay Woreda</option>
                                <option value = "Xamaro, Erer, Somali">Xamaro Woreda</option>
                                <option value = "Yaxoob, Erer, Somali">Yaxoob Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                         @case("Fafan, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Awbare, Fafan, Somali">Awbare Woreda</option>
                                <option value = "Babille, Fafan, Somali">Babille Woreda</option>
                                <option value = "Goljano, Fafan, Somali">Goljano Woreda</option>
                                <option value = "Gursum, Fafan, Somali">Gursum Woreda</option>
                                <option value = "Harawo, Fafan, Somali">Harawo Woreda</option>
                                <option value = "Haroorayso, Fafan, Somali">Haroorayso Woreda</option>
                                <option value = "Harshin, Fafan, Somali">Harshin Woreda</option>
                                <option value = "Jijiga, Fafan, Somali">Jijiga Woreda</option>
                                <option value = "Kebri Beyah Special Woreda, Fafan, Somali">Kebri Beyah Special Woreda</option>
                                <option value = "Qooran, Fafan, Somali">Qooran Woreda</option>
                                <option value = "Shabeeley, Fafan, Somali">Shabeeley Woreda</option>
                                <option value = "Wajale Special Woreda, Fafan, Somali">Wajale Special Woreda </option>
                                <option value = "Tuli Guled, Fafan, Somali">Tuli Guled Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Jarar, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Araarso, Jarar, Somali">Araarso Woreda</option>
                                <option value = "Awaare, Jarar, Somali">Awaare Woreda</option>
                                <option value = "Bilcil Buur, Jarar, Somali">Bilcil Buur Woreda</option>
                                <option value = "Birqod, Jarar, Somali">Birqod Woreda</option>
                                <option value = "Daroor, Jarar, Somali">Daroor Woreda</option>
                                <option value = "Degehabur Special Woreda, Jarar, Somali">Degehabur Special Woreda</option>
                                <option value = "Dhagaxmadow, Jarar, Somali">Dhagaxmadow Woreda</option>
                                <option value = "Dig, Jarar, Somali">Dig Woreda</option>
                                <option value = "Gunagado, Jarar, Somali">Gunagado Woreda</option>
                                <option value = "Misraq Gashamo, Jarar, Somali">Misraq Gashamo Woreda</option>
                                <option value = "Yoocaale, Jarar, Somali">Yoocaale Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Korahe, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Boodaley, Korahe, Somali">Boodaley Woreda</option>
                                <option value = "Ceel-Ogadeen, Korahe, Somali">Ceel-Ogadeen Woreda</option>
                                <option value = "Dobawein, Korahe, Somali">Dobawein Woreda</option>
                                <option value = "Higloley, Korahe, Somali">Higloley Woreda</option>
                                <option value = "Kebri Dehar Special Woreda, Korahe, Somali">Kebri Dehar Special Woreda</option>
                                <option value = "kudunbuur, Korahe, Somali">kudunbuur Woreda</option>
                                <option value = "Laas-dhankayre, Korahe, Somali">Laas-dhankayre Woreda</option>
                                <option value = "Marsin, Korahe, Somali">Marsin Woreda</option>
                                <option value = "Shekosh, Korahe, Somali">Shekosh Woreda</option>
                                <option value = "Shilavo, Korahe, Somali">Shilavo Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Liben, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bokolmayo, Liben, Somali">Bokolmayo Woreda</option>
                                <option value = "Deka Softi, Liben, Somali">Deka Softi Woreda</option>
                                <option value = "Dollo Ado, Liben, Somali">Dollo Ado Woreda</option>
                                <option value = "Filtu, Liben, Somali">Filtu Woreda</option>
                                <option value = "Goro Bekeksa, Liben, Somali">Goro Bekeksa Woreda</option>
                                <option value = "Guradamole, Liben, Somali">Guradamole Woreda</option>
                                <option value = "Kersa Dula, Liben, Somali">Kersa Dula Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Nogob, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ayun, Nogob, Somali">Ayun Woreda</option>
                                <option value = "Duhun, Nogob, Somali">Duhun Woreda</option>
                                <option value = "Elweyne, Nogob, Somali">Elweyne Woreda</option>
                                <option value = "Gerbo, Nogob, Somali">Gerbo Woreda</option>
                                <option value = "Xaraarey, Nogob, Somali">Xaraarey Woreda</option>
                                <option value = "Hora-Shagax, Nogob, Somali">Hora-Shagax Woreda</option>
                                <option value = "Segeg, Nogob, Somali">Segeg Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Shabelle, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abaaqoorow, Shabelle, Somali">Abaaqoorow Woreda</option>
                                <option value = "Adadle, Shabelle, Somali">Adadle Woreda</option>
                                <option value = "Beercaano, Shabelle, Somali">Beercaano Woreda</option>
                                <option value = "Danan, Shabelle, Somali">Danan Woreda</option>
                                <option value = "Elele, Shabelle, Somali">Elele Woreda</option>
                                <option value = "Ferfer, Shabelle, Somali">Ferfer Woreda</option>
                                <option value = "Gode Special Woreda, Shabelle, Somali">Gode Special Woreda</option>
                                <option value = "Imiberi, Shabelle, Somali">Imiberi Woreda</option>
                                <option value = "Kelafo, Shabelle, Somali">Kelafo Woreda</option>
                                <option value = "Mustahil, Shabelle, Somali">Mustahil Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Sitti, Somali")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Adigala, Sitti, Somali">Adigala Woreda</option>
                                <option value = "Afdem, Sitti, Somali">Afdem Woreda</option>
                                <option value = "Ayesha, Sitti, Somali">Ayesha Woreda</option>
                                <option value = "Bike, Sitti, Somali">Bike Woreda</option>
                                <option value = "Dambal, Sitti, Somali">Dambal Woreda</option>
                                <option value = "Erer, Sitti, Somali">Erer Woreda</option>
                                <option value = "Gablalu, Sitti, Somali">Gablalu Woreda</option>
                                <option value = "Mieso, Sitti, Somali">Mieso Woreda</option>
                                <option value = "Shinile, Sitti, Somali">Shinile Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Amir-Nur Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Amir-Nur Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Amir-Nur Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Amir-Nur Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Amir-Nur Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Amir-Nur Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Amir-Nur Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Amir-Nur Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Amir-Nur Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Amir-Nur Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Amir-Nur Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Amir-Nur Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Amir-Nur Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Amir-Nur Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Amir-Nur Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Amir-Nur Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Amir-Nur Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Amir-Nur Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Amir-Nur Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Amir-Nur Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Amir-Nur Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Amir-Nur Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Amir-Nur Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Amir-Nur Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Amir-Nur Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Amir-Nur Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Amir-Nur Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Amir-Nur Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Amir-Nur Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Amir-Nur Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Amir-Nur Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Amir-Nur Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Amir-Nur Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Amir-Nur Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Amir-Nur Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Amir-Nur Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Amir-Nur Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Abadir Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Abadir Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Abadir Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Abadir Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Abadir Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Abadir Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Abadir Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Abadir Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Abadir Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Abadir Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Abadir Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Abadir Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Abadir Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Abadir Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Abadir Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Abadir Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Abadir Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Abadir Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Abadir Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Abadir Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Abadir Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Abadir Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Abadir Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Abadir Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Abadir Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Abadir Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Abadir Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Abadir Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Abadir Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Abadir Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Abadir Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Abadir Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Abadir Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Abadir Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Abadir Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Abadir Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Abadir Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Shenkor Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Shenkor Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Shenkor Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Shenkor Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Shenkor Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Shenkor Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Shenkor Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Shenkor Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Shenkor Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Shenkor Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Shenkor Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Shenkor Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Shenkor Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Shenkor Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Shenkor Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Shenkor Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Shenkor Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Shenkor Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Shenkor Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Shenkor Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Shenkor Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Shenkor Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Shenkor Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Shenkor Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Shenkor Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Shenkor Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Shenkor Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Shenkor Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Shenkor Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Shenkor Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Shenkor Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Shenkor Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Shenkor Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Shenkor Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Shenkor Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Shenkor Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Shenkor Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Jin'Eala Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Jin'Eala Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Jin'Eala Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Jin'Eala Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Jin'Eala Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Jin'Eala Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Jin'Eala Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Jin'Eala Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Jin'Eala Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Jin'Eala Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Jin'Eala Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Jin'Eala Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Jin'Eala Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Jin'Eala Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Jin'Eala Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Jin'Eala Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Jin'Eala Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Jin'Eala Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Jin'Eala Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Jin'Eala Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Jin'Eala Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Jin'Eala Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Jin'Eala Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Jin'Eala Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Jin'Eala Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Jin'Eala Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Jin'Eala Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Jin'Eala Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Jin'Eala Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Jin'Eala Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Jin'Eala Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Jin'Eala Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Jin'Eala Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Jin'Eala Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Jin'Eala Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Jin'Eala Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Jin'Eala Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Aboker Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Aboker Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Aboker Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Aboker Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Aboker Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Aboker Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Aboker Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Aboker Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Aboker Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Aboker Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Aboker Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Aboker Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Aboker Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Aboker Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Aboker Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Aboker Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Aboker Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Aboker Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Aboker Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Aboker Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Aboker Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Aboker Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Aboker Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Aboker Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Aboker Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Aboker Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Aboker Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Aboker Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Aboker Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Aboker Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Aboker Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Aboker Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Aboker Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Aboker Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Aboker Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Aboker Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Aboker Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hakim Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Hakim Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Hakim Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Hakim Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Hakim Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Hakim Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Hakim Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Hakim Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Hakim Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Hakim Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Hakim Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Hakim Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Hakim Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Hakim Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Hakim Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Hakim Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Hakim Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Hakim Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Hakim Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Hakim Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Hakim Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Hakim Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Hakim Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Hakim Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Hakim Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Hakim Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Hakim Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Hakim Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Hakim Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Hakim Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Hakim Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Hakim Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Hakim Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Hakim Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Hakim Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Hakim Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Hakim Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Sofi Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Sofi Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Sofi Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Sofi Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Sofi Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Sofi Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Sofi Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Sofi Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Sofi Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Sofi Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Sofi Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Sofi Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Sofi Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Sofi Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Sofi Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Sofi Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Sofi Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Sofi Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Sofi Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Sofi Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Sofi Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Sofi Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Sofi Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Sofi Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Sofi Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Sofi Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Sofi Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Sofi Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Sofi Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Sofi Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Sofi Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Sofi Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Sofi Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Sofi Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Sofi Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Sofi Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Sofi Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Erer Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Erer Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Erer Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Erer Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Erer Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Erer Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Erer Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Erer Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Erer Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Erer Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Erer Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Erer Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Erer Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Erer Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Erer Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Erer Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Erer Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Erer Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Erer Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Erer Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Erer Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Erer Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Erer Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Erer Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Erer Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Erer Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Erer Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Erer Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Erer Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Erer Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Erer Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Erer Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Erer Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Erer Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Erer Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Erer Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Erer Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dire-Tiyara Woreda, Harari")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "01 Kebele, Dire-Tiyara Woreda, Harari">01 Kebele </option>
                                <option value = "02 Kebele, Dire-Tiyara Woreda, Harari">02 Kebele </option>
                                <option value = "03 Kebele, Dire-Tiyara Woreda, Harari">03 Kebele </option>
                                <option value = "04 Kebele, Dire-Tiyara Woreda, Harari">04 Kebele </option>
                                <option value = "05 Kebele, Dire-Tiyara Woreda, Harari">05 Kebele </option>
                                <option value = "06 Kebele, Dire-Tiyara Woreda, Harari">06 Kebele </option>
                                <option value = "07 Kebele, Dire-Tiyara Woreda, Harari">07 Kebele </option>
                                <option value = "08 Kebele, Dire-Tiyara Woreda, Harari">08 Kebele </option>
                                <option value = "09 Kebele, Dire-Tiyara Woreda, Harari">09 Kebele </option>
                                <option value = "10 Kebele, Dire-Tiyara Woreda, Harari">10 Kebele </option>
                                <option value = "11 Kebele, Dire-Tiyara Woreda, Harari">11 Kebele </option>
                                <option value = "12 Kebele, Dire-Tiyara Woreda, Harari">12 Kebele </option>
                                <option value = "13 Kebele, Dire-Tiyara Woreda, Harari">13 Kebele </option>
                                <option value = "14 Kebele, Dire-Tiyara Woreda, Harari">14 Kebele </option>
                                <option value = "15 Kebele, Dire-Tiyara Woreda, Harari">15 Kebele </option>
                                <option value = "16 Kebele, Dire-Tiyara Woreda, Harari">16 Kebele </option>
                                <option value = "17 Kebele, Dire-Tiyara Woreda, Harari">17 Kebele </option>
                                <option value = "18 Kebele, Dire-Tiyara Woreda, Harari">18 Kebele </option>
                                <option value = "19 Kebele, Dire-Tiyara Woreda, Harari">19 Kebele </option>
                                <option value = "Sukul Kebele, Dire-Tiyara Woreda, Harari">Sukul Kebele </option>
                                <option value = "Hasen-Gey Kebele, Dire-Tiyara Woreda, Harari">Hasen-Gey Kebele </option>
                                <option value = "Dire Tiyara Kebele, Dire-Tiyara Woreda, Harari">Dire Tiyara Kebele </option>
                                <option value = "Aboker Muti Kebele, Dire-Tiyara Woreda, Harari">Aboker Muti Kebele </option>
                                <option value = "Sigicha Kebele, Dire-Tiyara Woreda, Harari">Sigicha Kebele </option>
                                <option value = "Miy-Ay Kebele, Dire-Tiyara Woreda, Harari">Miy-Ay Kebele </option>
                                <option value = "Erer Weldya Kebele, Dire-Tiyara Woreda, Harari">Erer Weldya Kebele </option>
                                <option value = "Erer Ulanula Kebele, Dire-Tiyara Woreda, Harari">Erer Ulanula Kebele </option>
                                <option value = "Erer Hawaye Kebele, Dire-Tiyara Woreda, Harari">Erer Hawaye Kebele </option>
                                <option value = "Erer Dodota Kebele, Dire-Tiyara Woreda, Harari">Erer Dodota Kebele </option>
                                <option value = "Awu Umer Kebele, Dire-Tiyara Woreda, Harari">Awu Umer Kebele </option>
                                <option value = "Gelma Shira Kebele, Dire-Tiyara Woreda, Harari">Gelma Shira Kebele </option>
                                <option value = "Aw Berkhedle Kebele, Dire-Tiyara Woreda, Harari">Aw Berkhedle Kebele </option>
                                <option value = "Sofi Kebele, Dire-Tiyara Woreda, Harari">Sofi Kebele </option>
                                <option value = "Harewae Kebele, Dire-Tiyara Woreda, Harari">Harewae Kebele </option>
                                <option value = "Qile Kebele, Dire-Tiyara Woreda, Harari">Qile Kebele </option>
                                <option value = "Burka Kebele, Dire-Tiyara Woreda, Harari">Burka Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Aleta Chuko, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Qorke Kebele, Aleta Chuko Woreda, Sidama">Qorke Kebele </option>
                                <option value = "Rufo Kebele, Aleta Chuko Woreda, Sidama">Rufo Kebele </option>
                                <option value = "Loko Kebele, Aleta Chuko Woreda, Sidama">Loko Kebele </option>
                                <option value = "Gure Kebele, Aleta Chuko Woreda, Sidama">Gure Kebele </option>
                                <option value = "Dongora Kebele, Aleta Chuko Woreda, Sidama">Dongora Kebele </option>
                                <option value = "Siqee Kebele, Aleta Chuko Woreda, Sidama">Siqee Kebele </option>
                                <option value = "Teso Kebele, Aleta Chuko Woreda, Sidama">Teso Kebele </option>
                                <option value = "Chuko01 Kebele, Aleta Chuko Woreda, Sidama">Chuko01 Kebele </option>
                                <option value = "Chuko02 Kebele, Aleta Chuko Woreda, Sidama">Chuko02 Kebele </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Aleta Wendo, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aleta Wendo Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Arbegona, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Arbegona Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Aroresa, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Aroresa Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hawassa Zuria, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Zuria Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Bensa, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bensa Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Bona, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bona Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Boricha, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Boricha Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Bursa, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Bursa Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Chere, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Chere Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dale, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dale Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dara, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Dara Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Gorche, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Gorche Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hawassa Special Zone, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hawassa Special Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hula, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Hula Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Loko Abaya, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Loko Abaya Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Malga, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Malga Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Shebedina, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Shebedina Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Wensho, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wensho Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Wondo Genet, Sidama")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                                <option value = "Wucale, Wondo Genet Woreda, Sidama">Wucale </option>
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Gamo Gofa, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Arba Minch Town Woreda, Gamo Gofa, SNNPR">Arba Minch Town Woreda</option>
                                <option value = "Arba Minch Zuria Woreda, Gamo Gofa, SNNPR">Arba Minch Zuria Woreda</option>
                                <option value = "Bonke Woreda, Gamo Gofa, SNNPR">Bonke Woreda </option>
                                <option value = "Boreda Woreda, Gamo Gofa, SNNPR">Boreda Woreda </option>
                                <option value = "Chencha Woreda, Gamo Gofa, SNNPR">Chencha Woreda </option>
                                <option value = "Demba Gofa Woreda, Gamo Gofa, SNNPR">Demba Gofa Woreda </option>
                                <option value = "Deramalo Woreda, Gamo Gofa, SNNPR">Deramalo Woreda </option>
                                <option value = "Dita Woreda, Gamo Gofa, SNNPR">Dita Woreda </option>
                                <option value = "Geze Gofa, Gamo Gofa, SNNPR">Geze Gofa </option>
                                <option value = "Kemba Woreda, Gamo Gofa, SNNPR">Kemba Woreda </option>
                                <option value = "Kucha Woreda, Gamo Gofa, SNNPR">Kucha Woreda </option>
                                <option value = "Melokoza Woreda, Gamo Gofa, SNNPR">Melokoza Woreda </option>
                                <option value = "Mirab Abaya Woreda, Gamo Gofa, SNNPR">Mirab Abaya Woreda </option>
                                <option value = "Oyda Woreda, Gamo Gofa, SNNPR">Oyda Woreda </option>
                                <option value = "Sawla Town Woreda, Gamo Gofa, SNNPR">Sawla Town Woreda </option>
                                <option value = "Uba Debretsehay Woreda, Gamo Gofa, SNNPR">Uba Debretsehay Woreda </option>
                                <option value = "Zala Woreda, Gamo Gofa, SNNPR">Zala Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Gedeo, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bule Woreda, Gedeo, SNNPR">Bule Woreda </option>
                                <option value = "Dila Town Woreda, Gedeo, SNNPR">Dila Town Woreda </option>
                                <option value = "Dila Zuria Woreda, Gedeo, SNNPR">Dila Zuria Woreda </option>
                                <option value = "Gedeb Woreda, Gedeo, SNNPR">Gedeb Woreda </option>
                                <option value = "Kochere Woreda, Gedeo, SNNPR">Kochere Woreda </option>
                                <option value = "Wenago Woreda, Gedeo, SNNPR">Wenago Woreda </option>
                                <option value = "Yirgachefe Woreda, Gedeo, SNNPR">Yirgachefe Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Gurage, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abeshge Woreda, Gurage, SNNPR">Abeshge Woreda </option>
                                <option value = "Butajira Town Woreda, Gurage, SNNPR">Butajira Town Woreda </option>
                                <option value = "Cheha Woreda, Gurage, SNNPR">Cheha Woreda </option>
                                <option value = "Endegagn Woreda, Gurage, SNNPR">Endegagn Woreda </option>
                                <option value = "Enemorina Eaner Woreda, Gurage, SNNPR">Enemorina Eaner Woreda </option>
                                <option value = "Ezha Woreda, Gurage, SNNPR">Ezha Woreda </option>
                                <option value = "Geta Woreda, Gurage, SNNPR">Geta Woreda </option>
                                <option value = "Gumer Woreda, Gurage, SNNPR">Gumer Woreda </option>
                                <option value = "Kebena Woreda, Gurage, SNNPR">Kebena Woreda </option>
                                <option value = "Kokir Gedebano Woreda, Gurage, SNNPR">Kokir Gedebano Woreda </option>
                                <option value = "Mareko Woreda, Gurage, SNNPR">Mareko Woreda </option>
                                <option value = "Meskane Woreda, Gurage, SNNPR">Meskane Woreda </option>
                                <option value = "Muhor Na Aklil Woreda, Gurage, SNNPR">Muhor Na Aklil Woreda </option>
                                <option value = "Soddo Woreda, Gurage, SNNPR">Soddo Woreda </option>
                                <option value = "Welkite Town Woreda, Gurage, SNNPR">Welkite Town Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Hadiya, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Ana Lemo Woreda, Hadiya, SNNPR">Ana Lemo Woreda </option>
                                <option value = "Duna Woreda, Hadiya, SNNPR">Duna Woreda </option>
                                <option value = "Gibe Woreda, Hadiya, SNNPR">Gibe Woreda </option>
                                <option value = "Gomibora Woreda, Hadiya, SNNPR">Gomibora Woreda </option>
                                <option value = "Hosaenaa Town Woreda, Hadiya, SNNPR">Hosaenaa Town Woreda </option>
                                <option value = "Limo Woreda, Hadiya, SNNPR">Limo Woreda </option>
                                <option value = "Mirab Badawacho Woreda, Hadiya, SNNPR">Mirab Badawacho Woreda </option>
                                <option value = "Misha Woreda, Hadiya, SNNPR">Misha Woreda </option>
                                <option value = "Misraq Badawacho Woreda, Hadiya, SNNPR">Misraq Badawacho Woreda </option>
                                <option value = "Shashogo Woreda, Hadiya, SNNPR">Shashogo Woreda </option>
                                <option value = "Soro Woreda, Hadiya, SNNPR">Soro Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Kembata Tembaro, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Angacha Woreda, Kembata Tembaro, SNNPR">Angacha Woreda </option>
                                <option value = "Damboya Woreda, Kembata Tembaro, SNNPR">Damboya Woreda </option>
                                <option value = "Doyogena Woreda, Kembata Tembaro, SNNPR">Doyogena Woreda </option>
                                <option value = "Durame Town Woreda, Kembata Tembaro, SNNPR">Durame Town Woreda </option>
                                <option value = "Hadero Tunto Woreda, Kembata Tembaro, SNNPR">Hadero Tunto Woreda </option>
                                <option value = "Kacha Bira Woreda, Kembata Tembaro, SNNPR">Kacha Bira Woreda </option>
                                <option value = "Kedida Gamela Woreda, Kembata Tembaro, SNNPR">Kedida Gamela Woreda </option>
                                <option value = "Tembaro Woreda, Kembata Tembaro, SNNPR">Tembaro Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Silt'e, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Alicho Werero Woreda, Silt'e, SNNPR">Alicho Werero Woreda </option>
                                <option value = "Dalocha Woreda, Silt'e, SNNPR">Dalocha Woreda </option>
                                <option value = "Lanfro Woreda, Silt'e, SNNPR">Lanfro Woreda </option>
                                <option value = "Mirab Azernet Berbere Woreda, Silt'e, SNNPR">Mirab Azernet Berbere Woreda </option>
                                <option value = "Misraq Azernet Berbere Woreda, Silt'e, SNNPR">Misraq Azernet Berbere Woreda </option>
                                <option value = "Sankurra Woreda, Silt'e, SNNPR">Sankurra Woreda </option>
                                <option value = "Silte Woreda, Silt'e, SNNPR">Silte Woreda </option>
                                <option value = "Wulbareg Woreda, Silt'e, SNNPR">Wulbareg Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("South Omo, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bako Gazer Woreda, South Omo, SNNPR">Bako Gazer Woreda </option>
                                <option value = "Bena Tsemay Woreda, South Omo, SNNPR">Bena Tsemay Woreda </option>
                                <option value = "Dasenech Woreda, South Omo, SNNPR">Dasenech Woreda </option>
                                <option value = "Debub Ari Woreda, South Omo, SNNPR">Debub Ari Woreda </option>
                                <option value = "Gelila Woreda, South Omo, SNNPR">Gelila Woreda </option>
                                <option value = "Hamer Woreda, South Omo, SNNPR">Hamer Woreda </option>
                                <option value = "Kuraz Woreda, South Omo, SNNPR">Kuraz Woreda </option>
                                <option value = "Male Woreda, South Omo, SNNPR">Male Woreda </option>
                                <option value = "Nyangatom Woreda, South Omo, SNNPR">Nyangatom Woreda </option>
                                <option value = "Selamago Woreda, South Omo, SNNPR">Selamago Woreda </option>
                                <option value = "Semen Ari, South Omo, SNNPR">Semen Ari </option>                               
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Wolayita, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abala Abaya Woreda, Wolayita, SNNPR">Abala Abaya Woreda </option>
                                <option value = "Bayra Koysha Woreda, Wolayita, SNNPR">Bayra Koysha Woreda </option>
                                <option value = "Boloso Bombe Woreda, Wolayita, SNNPR">Boloso Bombe Woreda </option>
                                <option value = "Boloso Sore Woreda, Wolayita, SNNPR">Boloso Sore Woreda </option>
                                <option value = "Damot Gale Woreda, Wolayita, SNNPR">Damot Gale Woreda </option>
                                <option value = "Damot Pulasa Woreda, Wolayita, SNNPR">Damot Pulasa Woreda </option>
                                <option value = "Damot Sore Woreda, Wolayita, SNNPR">Damot Sore Woreda </option>
                                <option value = "Damot Weyde Woreda, Wolayita, SNNPR">Damot Weyde Woreda </option>
                                <option value = "Diguna Fango Woreda, Wolayita, SNNPR">Diguna Fango Woreda </option>
                                <option value = "Humbo Woreda, Wolayita, SNNPR">Humbo Woreda </option>
                                <option value = "Hobicha Woreda, Wolayita, SNNPR">Hobicha Woreda </option>
                                <option value = "Kawo Koysha Woreda, Wolayita, SNNPR">Kawo Koysha Woreda </option>
                                <option value = "Kindo Didaye Woreda, Wolayita, SNNPR">Kindo Didaye Woreda </option>
                                <option value = "Kindo Koysha Woreda, Wolayita, SNNPR">Kindo Koysha Woreda </option>
                                <option value = "Offa Woreda, Wolayita, SNNPR">Offa Woreda </option>
                                <option value = "Sodo Town Woreda, Wolayita, SNNPR">Sodo Town Woreda </option>
                                <option value = "Sodo Zuria Woreda, Wolayita, SNNPR">Sodo Zuria Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Alaba, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Alaba Special Woreda, Alaba, SNNPR">Alaba Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Amaro, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Amaro Special Woreda, Amaro, SNNPR">Amaro Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Basketo, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Basketo Special Woreda, Basketo, SNNPR">Basketo Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Burji, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Burji Special Woreda, Burji, SNNPR">Burji Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dirasha, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Dirasha Special Woreda, Dirasha, SNNPR">Dirasha Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Yem, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Yem Special Woreda, Yem, SNNPR">Yem Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Konso, SNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Konso Special Woreda, Konso, SNNPR">Konso Special Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Benchi Maji, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bero Woreda, Benchi Maji, SWNNPR">Bero Woreda </option>
                                <option value = "Debub Bench Woreda, Benchi Maji, SWNNPR">Debub Bench Woreda</option>
                                <option value = "Guraferda Woreda, Benchi Maji, SWNNPR">Guraferda Woreda </option>
                                <option value = "Meinit Goldiya Woreda, Benchi Maji, SWNNPR">Meinit Goldiya Woreda </option>
                                <option value = "Meinit Shasha Woreda, Benchi Maji, SWNNPR">Meinit Shasha Woreda </option>
                                <option value = "Mizan Aman Town Woreda, Benchi Maji, SWNNPR">Mizan Aman Town Woreda </option>
                                <option value = "Semien Bench Woreda, Benchi Maji, SWNNPR">Semien Bench Woreda </option>
                                <option value = "She Bench, Benchi Maji, SWNNPR">She Bench </option>
                                <option value = "Sheko Woreda, Benchi Maji, SWNNPR">Sheko Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Dawro, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Gena Bosa Woreda, Dawro, SWNNPR">Gena Bosa Woreda </option>
                                <option value = "Isara Woreda, Dawro, SWNNPR">Isara Woreda </option>
                                <option value = "Loma Woreda, Dawro, SWNNPR">Loma Woreda </option>
                                <option value = "Mareka Woreda, Dawro, SWNNPR">Mareka Woreda </option>
                                <option value = "Tocha Woreda, Dawro, SWNNPR">Tocha Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Keffa, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bita Woreda, North Shewa, Oromia">Bita Woreda </option>
                                <option value = "Bonga Town Woreda, North Shewa, Oromia">Bonga Town Woreda </option>
                                <option value = "Chena Woreda, North Shewa, Oromia">Chena Woreda </option>
                                <option value = "Cheta Woreda, North Shewa, Oromia">Cheta Woreda </option>
                                <option value = "Decha Woreda, North Shewa, Oromia">Decha Woreda </option>
                                <option value = "Gesha Woreda, North Shewa, Oromia">Gesha Woreda </option>
                                <option value = "Gewata Woreda, North Shewa, Oromia">Gewata Woreda </option>
                                <option value = "Ginbo Woreda, North Shewa, Oromia">Ginbo Woreda </option>
                                <option value = "Menjiwo Woreda, North Shewa, Oromia">Menjiwo Woreda </option>
                                <option value = "Sayilem Woreda, North Shewa, Oromia">Sayilem Woreda </option>
                                <option value = "Telo Woreda, North Shewa, Oromia">Telo Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Sheka, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Anderacha Woreda, Sheka, SWNNPR">Anderacha Woreda </option>
                                <option value = "Masha Woreda, Sheka, SWNNPR">Masha Woreda </option>
                                <option value = "Yeki Woreda, Sheka, SWNNPR">Yeki Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Konta, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Konta Special Woreda, Konta, SWNNPR">Konta Special Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("West Omo, SWNNPR")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Maji Woreda, West Omo, SWNNPR">Maji Woreda </option>
                                <option value = "Surma Woreda, West Omo, SWNNPR">Surma Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Agnwaak, Gambela")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Abob Woreda, Agnwaak, Gambela">Abob Woreda</option>
                                <option value = "Gog Woreda, Agnwaak, Gambela">Gog Woreda </option>
                                <option value = "Jore Woreda, Agnwaak, Gambela">Jore Woreda </option>
                                <option value = "Dimma Woreda, Agnwaak, Gambela">Dimma Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Mehzenger, Gambela")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Godere Woreda, Mehzenger, Gambela">Godere Woreda </option>
                                <option value = "Mengesh Woreda, Mehzenger, Gambela">Mengesh Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Nuer, Gambela")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Akobo Woreda, Nuer, Gambela">Akobo Woreda </option>
                                <option value = "Jikawo Woreda, Nuer, Gambela">Jikawo Woreda </option>
                                <option value = "Lare Woreda, Nuer, Gambela">Lare Woreda </option>
                                <option value = "Wanthoa, Nuer, Gambela">Wanthoa </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Itang, Gambela")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Itang Special Woreda, Itang, Gambela">Itang Special Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Assosa Special Zone, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Asosa Woreda, Assosa Special Zone, Benishangul Gumuz">Asosa Woreda </option>
                                <option value = "Bambasi Woreda, Assosa Special Zone, Benishangul Gumuz">Bambasi Woreda </option>
                                <option value = "Komesha Woreda, Assosa Special Zone, Benishangul Gumuz">Komesha Woreda </option>
                                <option value = "Kurmuk Woreda, Assosa Special Zone, Benishangul Gumuz">Kurmuk Woreda </option>
                                <option value = "Menge Woreda, Assosa Special Zone, Benishangul Gumuz">Menge Woreda </option>
                                <option value = "Oda Buldigilu Woreda, Assosa Special Zone, Benishangul Gumuz">Oda Buldigilu Woreda </option>
                                <option value = "Sherkole Woreda, Assosa Special Zone, Benishangul Gumuz">Sherkole Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Kamashi, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Agalo Mite Woreda, Kamashi, Benishangul Gumuz">Agalo Mite Woreda </option>
                                <option value = "Belo Jegonfoy Woreda, Kamashi, Benishangul Gumuz">Belo Jegonfoy Woreda </option>
                                <option value = "Kamashi Woreda, Kamashi, Benishangul Gumuz">Kamashi Woreda </option>
                                <option value = "Sirba Abbay Woreda, Kamashi, Benishangul Gumuz">Sirba Abbay Woreda </option>
                                <option value = "Yaso Woreda, Kamashi, Benishangul Gumuz">Yaso Woreda </option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Metekel, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Bulen Woreda, Metekel, Benishangul Gumuz">Bulen Woreda </option>
                                <option value = "Dangur Woreda, Metekel, Benishangul Gumuz">Dangur Woreda </option>
                                <option value = "Dibate Woreda, Metekel, Benishangul Gumuz">Dibate Woreda </option>
                                <option value = "Guba Woreda, Metekel, Benishangul Gumuz">Guba Woreda </option>
                                <option value = "Mandura Woreda, Metekel, Benishangul Gumuz">Mandura Woreda </option>
                                <option value = "Wenbera Woreda, Metekel, Benishangul Gumuz">Wenbera Woreda </option>                               
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Mao-Komo, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Mao-Komo Special Woreda, Mao-Komo, Benishangul Gumuz">Mao-Komo Special Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @case("Pawe, Benishangul Gumuz")
                            <select wire:model.debounce.800ms="address" class="block mt-1 w-full border-gray-300 focus:border" >
                                <option selected>---Select Address of Hospital Manager In your Zone</option>
                                <option value = "Pawe Special Woreda, Mao-Komo, Benishangul Gumuz">Pawe Special Woreda</option>                                
                            </select>
                            @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            @break
                        @default
                            <strong style = "color:red">Your Address were not correct, Go back and ask Your Region Health Bureau to correct it for you.</strong>
                    @endswitch
                @endif
            @endforeach
        </div>
         <div class="mt-4">
                <x-jet-label  value="{{ __('Sex') }}" />
                <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" wire:model.defer="sex" >
                    <option selected>---Select sex---</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
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


