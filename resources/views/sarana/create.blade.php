<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Sarana Prasarana') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('sarana.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <!-- Input Nama Moda -->
        <div>
            <x-input-label for="nama_moda" :value="__('Nama Moda')" />
            <x-text-input id="nama_moda" name="nama_moda" type="text" class="mt-1 block w-full" :value="old('nama_moda')" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('nama_moda')" />
        </div>

        <!-- Input Jenis -->
        <div>
            <x-input-label for="jenis" :value="__('Jenis')" />
            <x-text-input id="jenis" name="jenis" type="text" class="mt-1 block w-full" :value="old('jenis')" required />
            <x-input-error class="mt-2" :messages="$errors->get('jenis')" />
        </div>

        <!-- Input Nomor -->
        <div>
            <x-input-label for="nomor" :value="__('Nomor')" />
            <x-text-input id="nomor" name="nomor" type="text" class="mt-1 block w-full" :value="old('nomor')" required />
            <x-input-error class="mt-2" :messages="$errors->get('nomor')" />
        </div>

        <!-- Input Deskripsi -->
        <div>
            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
            <textarea id="deskripsi" name="deskripsi" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan deskripsi...">{{ old('deskripsi') }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
        </div>

        <!-- Input Lokasi -->
        <div>
            <x-input-label for="lokasi" :value="__('Lokasi')" />
            <x-text-input id="lokasi" name="lokasi" type="text" class="mt-1 block w-full" :value="old('lokasi')" required />
            <x-input-error class="mt-2" :messages="$errors->get('lokasi')" />
        </div>

        <!-- Input Kapasitas -->
        <div>
            <x-input-label for="kapasitas" :value="__('Kapasitas')" />
            <x-text-input id="kapasitas" name="kapasitas" type="number" class="mt-1 block w-full" :value="old('kapasitas')" required />
            <x-input-error class="mt-2" :messages="$errors->get('kapasitas')" />
        </div>

        <!-- Input Satuan -->
        <div>
            <x-input-label for="satuan" :value="__('Satuan')" />
            <x-text-input id="satuan" name="satuan" type="text" class="mt-1 block w-full" :value="old('satuan')" required />
            <x-input-error class="mt-2" :messages="$errors->get('satuan')" />
        </div>

        <!-- Input Tanggal Pembelian -->
        <div>
            <x-input-label for="tanggal_pembelian" :value="__('Tanggal Pembelian')" />
            <x-date-input id="tanggal_pembelian" name="tanggal_pembelian" class="mt-1 block w-full" :value="old('tanggal_pembelian')" required />
            <x-input-error class="mt-2" :messages="$errors->get('tanggal_pembelian')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
