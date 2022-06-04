

<div class="p-6">
    @if (session()->has('message'))
        <div class=" flex bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm border-teal-500 rounded-b text-teal-900">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6 bg-blue-600 ">
        <x-jet-button  wire:click="createShowModal" >
                {{ __('Add Employee') }}
    </x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="modelFormVisible">
        <x-slot name="title">
            {{ __('Add New Employee') }} {{$modelId}}
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
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>

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
                                <x-jet-label for="profile_pic" value="{{ __('Profile-Picture') }}" />
                                <x-jet-input id="profile_pic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="profile_pic" wire:model.debounce.800ms="profile_pic" />
                                @error('profile_pic') <span class="error text-red-600">{{$message}}</span>@enderror
                            </div>
                                <div class="mt-4">
                                        <x-jet-label for="type" value="{{ __('Type') }}" />
                                        <select name="type" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model.debounce.800ms="type" />
                                        :value="old('type')" required autofocus autocomplete="sex">
                                            <option>---Select type---</option>
                                            <option value="doctor">Doctor</option>
                                            <option value="recept">Receptionist</option>
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
        @if($modelId)
                <x-jet-danger-button class="bg-green-500" wire:click="update" wire:loading.attr="disabled">
                    {{ __('update') }}
                </x-jet-danger-button>
                @else
                <x-jet-danger-button class="bg-green-500" wire:click="create" wire:loading.attr="disabled">
                    {{ __('create') }}
                </x-jet-danger-button>
            @endif


            <x-jet-secondary-button class="ml-3" wire:click="$toggle('modelFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
    <table class="min-w-full leading-normal">
                                    <thead class="text-purple-500">
                                        <tr >
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">first-name</th>
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">last-name</th>
                                            <th  class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">type</th>
                                            <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">address</th>
                                            <th   class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">profile-picture</th>
                                            <th   class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-purple-500 uppercase tracking-wider">action</th>

                                        </tr>
                                </thead>
                            <tbody>
                            @foreach($employes as $employe)
                                <tr>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->first_name}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->last_name}}</td>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->type}}</td>
                                            <td   class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->address}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">{{ $employe->profile_pic}}</td>
                                            <td  class="px-6 py-3 border-b border-gray-200 bg-white text-sm">

                                                <x-jet-button wire:click="updateShowModal({{ $employe->id }})">
                                                    {{ __('update') }}
                                                    </x-jet-button>
                                                <x-jet-danger-button wire:click="deleteShowModel({{ $employe->id }})" >
                                                    {{ __('Delete') }}
                                                </x-jet-button>
                                                <x-jet-button wire:click="viewShowModel({{ $employe->id }})" class="bg-green-500">
                                                    {{ __('view') }}
                                                </x-jet-button>
                                            </td>
                                 @endforeach
                                        </tr>


                            </tbody>
                    </table>
                <x-jet-dialog-modal wire:model="modalConfirmDeleteVisible">

                                    <x-slot name="title">
                                        {{ __('Delete Account') }} {{$modelId}}
                                    </x-slot>

                                    <x-slot name="content">
                                        {{ __('Are you sure you want to delete your employee account ? Once your account is deleted, all of its resources and data will be permanently deleted. ') }}


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
            <!-- modalViewDetailVisible -->
                    <x-jet-dialog-modal wire:model="modalViewDetailVisible">

                                <x-slot name="title">
                                    {{ __('View Detail') }} {{$modelId}}
                                </x-slot>

                                <x-slot name="content">

                                    <table class="leading-normal" >
                                        <tbody>

                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">First-Name:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$first_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Middel-Name:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$middel_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Last-Name:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$last_name}}</td>
                                               </tr>
                                               <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Sex:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$sex}}</td>
                                                </tr>
                                               <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Age:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$age}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">User-Id:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$user_id}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Phone-Number:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Email:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$email}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">Address:</th>
                                                    <td class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100">{{$address}}</td>
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

            </div>






