<div class="bg-gray-200 max-w-sm mx-auto m-6 p-5 rounded-lg">
  <p class="text-sm text-grey-700"><h1><strong>Make An Appointement</strong></h1> </p><br>
    <form wire:submit.prevent="createBooking">

        <div class="mb-6">
            <label for="service" class="inline-block text-gray-700 font-bold mb-2">Select Doctor's Shift</label>
            <select wire:model="state.service" name="service" id="service"
                    class="bg-white h-10 w-full border-none rounded-lg"
            >
                <option value="">Select Shift</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }} ({{ $service->duration }} minutes)</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{ !$doctors->count() ? 'opacity-25' : '' }}">
            <label for="doctor" class="inline-block text-gray-700 font-bold mb-2">Select doctor</label>
            <select wire:model="state.doctor" {{ !$doctors->count() ? 'disabled="disabled"' : '' }}
            name="doctor" id="doctor" class="bg-white h-10 w-full border-none rounded-lg"
            >
                <option value="">Select Available Doctor's</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{ ! $this->selectedService || !$this->selectedDoctor  ? 'opacity-25' : '' }}">
            <label for="doctor" class="inline-block text-gray-700 font-bold mb-2">Select appointment type</label>
            <livewire:booking-calendar :service="$this->selectedService" :doctor="$this->selectedDoctor"
                                       :key="optional($this->selectedDoctor)->id"
            />
        </div>

        @if ($this->hasDetailsToBook)
            <div class="mb-6">
                <div class="text-gray-700 font-bold mb-2">
                    You're ready to book
                </div>

                <div class="border-t border-b border-gray-300 py-2">
                    {{ $this->selectedService->name }} ({{ $this->selectedService->duration }} minutes) with {{ $this->selectedDoctor->name }}
                    <br> on {{ $this->timeObject->format('D jS M Y') }} at {{ $this->timeObject->format('g:i A') }}
                </div>
            </div>

            <div class="mb-6">
                <div class="mb-3">
                    <label for="name" class="inline-block text-gray-700 font-bold mb-2">Your name</label>
                    <input wire:model.defer="state.name" type="text" name="name" id="name" class="bg-white h-10 w-full border-none rounded-lg">

                    @error('state.name')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="inline-block text-gray-700 font-bold mb-2">Your email</label>
                    <input wire:model.defer="state.email" type="text" name="email" id="email" class="bg-white h-10 w-full border-none rounded-lg">

                    @error('state.email')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="bg-indigo-500 text-white h-11 px-4 text-center font-bold rounded-lg w-full">
                Book now
            </button>
        @endif

    </form>
</div>
