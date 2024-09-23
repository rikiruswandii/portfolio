<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-xl font-bold text-color-primary">Settings</h3>
                <div class="text-gray-500">
                    <p>Page to set information about
                        <svg height="14" viewBox="0 0 88 14" xmlns="http://www.w3.org/2000/svg" class="inline">
                            <defs>
                                <linearGradient id="text-gradient" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" style="stop-color:#f2bb18;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#f2bb18;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#263371;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#263371;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <text x="0" y="10" fill="url(#text-gradient)" font-size="12"
                                font-family="Arial, sans-serif">
                                <tspan x="0" dy="0" class="font-bold">
                                    {{ $data->name . '.' }}
                                </tspan>
                            </text>
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 mb-8">
        <div class="flex flex-col">
            <div class="w-full">

                <div class="bg-white shadow rounded-md">
                    <div class="p-6">
                        <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <h4 class="text-lg font-bold text-color-primary">Base Informations</h4>
                                <h6 class="text-sm text-color-primary">Ubah data untuk memperbarui informasi.</h6>
                                <hr class="my-4" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                    <input type="text" name="name" id="name"
                                        class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500"
                                        value="{{ $data->name }}" placeholder="masukkan name..">
                                    @error('name')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">No
                                        Telp</label>
                                    <input type="text" class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500"
                                        name="phone" id="phone" value="{{ $data->phone }}"
                                        placeholder="masukkan nomor..">
                                    @error('phone')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500"
                                        name="email" id="email" value="{{ $data->email }}"
                                        placeholder="masukkan email..">
                                    @error('email')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="about"
                                        class="block text-sm font-medium text-gray-700">Tentang</label>
                                    <textarea name="about" class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500" id="about">{{ $data->about }}</textarea>
                                    @error('about')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <textarea type="text" name="address" id="address" class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500"
                                        placeholder="keterangan..">{{ $data->address }}</textarea>
                                    @error('address')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                                    <input type="file" name="logo"
                                        class="border border-gray-300 focus:border-color-secondary focus:ring-color-base mt-1 focus:outline-none p-2 rounded block w-full shadow-sm text-sm text-gray-500"
                                        accept=".png,.jpg,.jpeg,.svg"
                                        data-default-file="{{ $data->logo ? Storage::url('logos/' . $data->logo) : '' }}">
                                </div>
                            </div>

                            <div class="mt-6 text-right">
                                <button type="submit"
                                    class="rounded-md bg-color-primary text-gray-50 py-1 px-3 hover:bg-color-secondary hover:text-color-primary hover:font-semibold hover:shadow-inner hover:shadow-gray-500/40">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
