

<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
                {{ __('Add Employee') }}
         </x-jet-button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="mt-4">
                                    <x-jet-label for="first_name" value="{{ __('First-Name') }}" />
                                    <x-jet-input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="first_name" wire:model.debounce.800ms="first_name" />
                                    @error('first_name') <span class="error text-red-600">{{$message}}</span>@enderror
                                </div>
                            <div class="mt-4">
                                <x-jet-label for="middel_name" value="{{ __('Middel-Name') }}" />
                                <x-jet-input id="middel_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="middel_name" wire:model.debounce.800ms="middel_name" />
                                @error('middel_name') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                          <div class="mt-4">
                              <x-jet-label for="last_name" value="{{ __('Last-Name') }}" />
                              <x-jet-input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="last_name" wire:model.debounce.800ms="last_name" />
                              @error('last_name') <span class="error text-red-600">{{$message}}</span>@enderror
                          </div>
            
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="mt-4">
                                    <x-jet-label for="phone" value="{{ __('Phone-Number') }}" />
                                    <x-jet-input id="phone" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="phone" wire:model.debounce.800ms="phone" />
                                    @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
                                </div>
                            <div class="mt-4">
                                <x-jet-label for="address" value="{{ __('Address') }}" />
                                <x-jet-input id="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="address" wire:model.debounce.800ms="address" />
                                @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                          <div class="mt-4">
                              <x-jet-label for="birth_date" value="{{ __('Birth-Date') }}" />
                              <x-jet-input id="birth_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="birth_date" wire:model.debounce.800ms="birth_date" />
                              @error('birth_date') <span class="error text-red-600">{{$message}}</span>@enderror
                          </div>
            
                </div>
    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Add New Employee') }}
        </x-slot>

        <x-slot name="content">
          <form  class="w-full max-w-lg" action="">
            @csrf
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="mt-4">
                                    <x-jet-label for="first_name" value="{{ __('First-Name') }}" />
                                    <x-jet-input id="first_name" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="first_name" wire:model.debounce.800ms="first_name" />
                                    @error('first_name') <span class="error text-red-600">{{$message}}</span>@enderror
                                </div>
                            <div class="mt-4">
                                <x-jet-label for="middel_name" value="{{ __('Middel-Name') }}" />
                                <x-jet-input id="middel_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="middel_name" wire:model.debounce.800ms="middel_name" />
                                @error('middel_name') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                          <div class="mt-4">
                              <x-jet-label for="last_name" value="{{ __('Last-Name') }}" />
                              <x-jet-input id="last_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="last_name" wire:model.debounce.800ms="last_name" />
                              @error('last_name') <span class="error text-red-600">{{$message}}</span>@enderror
                          </div>
            
                </div>
                <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                            <div class="mt-4">
                                <x-jet-label for="user_id" value="{{ __('User-Id') }}" />
                                <x-jet-input id="user_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="user_id" wire:model.debounce.800ms="user_id" />
                                @error('user_id') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="organization_id" value="{{ __('Organization_Id') }}" />
                                <x-jet-input id="organization_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="organization_id" wire:model.debounce.800ms="organization_id" />
                                @error('organization_id') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                  </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                        <div class="mt-4">
                              <x-jet-label for="email" value="{{ __('Email') }}" />
                              <x-jet-input id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="email" name="email" :value="old('email')" required autofocus wire:model.debounce.800ms="email" />
                              @error('email') <span class="error text-red-600">{{$message}}</span>@enderror
                        </div>
                

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" name="password" required autocomplete="current-password" wire:model.debounce.800ms="password" />
                            @error('password') <span class="error text-red-600">{{$message}}</span>@enderror
                        </div>
                 </div>
                
                  <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                            <div class="mt-4">
                                <x-jet-label for="age" value="{{ __('Age') }}" />
                                <x-jet-input id="age" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="age" wire:model.debounce.800ms="age" />
                                @error('age') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                            <div class="mt-4">
                                  <x-jet-label for="sex" value="{{ __('Sex') }}" />
                                  <select name="sex" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model.debounce.800ms="sex" />
                                  :value="old('sex')" required autofocus autocomplete="type">
                                      <option>---Select sex---</option>
                                      <option value="1">Male</option>
                                      <option value="2">Female</option>
                                      
                                  </select>
                                  @error('sex') <span class="error text-red-600">{{$message}}</span>@enderror
                             </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="mt-4">
                                    <x-jet-label for="phone" value="{{ __('Phone-Number') }}" />
                                    <x-jet-input id="phone" class="appearance-none block w-full bg-gray-200 text-gray-500 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="phone" wire:model.debounce.800ms="phone" />
                                    @error('phone') <span class="error text-red-600">{{$message}}</span>@enderror
                                </div>
                            <div class="mt-4">
                                <x-jet-label for="address" value="{{ __('Address') }}" />
                                <x-jet-input id="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="address" wire:model.debounce.800ms="address" />
                                @error('address') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                          <div class="mt-4">
                              <x-jet-label for="birth_date" value="{{ __('Birth-Date') }}" />
                              <x-jet-input id="birth_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="birth_date" wire:model.debounce.800ms="birth_date" />
                              @error('birth_date') <span class="error text-red-600">{{$message}}</span>@enderror
                          </div>
            
                </div>
                <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
                            <div class="mt-4">
                                <x-jet-label for="image" value="{{ __('Profile-Picture') }}" />
                                <x-jet-input id="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="image" wire:model.debounce.800ms="image" />
                                @error('image') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                                <div class="mt-4">
                                        <x-jet-label for="type" value="{{ __('Type') }}" />
                                        <select name="type" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model.debounce.800ms="type" />
                                        :value="old('type')" required autofocus autocomplete="sex">
                                            <option>---Select type---</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="receptionist">Receptionist</option>
                                            <option value="pharmacy">Pharmacy</option>
                                            <option value="labratory">Lababratory</option>
                                          
                                        </select>
                                        @error('type') <span class="error text-red-600">{{$message}}</span>@enderror
                              </div>
                  </div>
                  
           
          </form>
       
            
        </x-slot>
        
        </div>
        

        <x-slot name="footer">
            
                <x-jet-danger-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                    {{ __('create') }}
                </x-jet-danger-button>
          


            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
   





