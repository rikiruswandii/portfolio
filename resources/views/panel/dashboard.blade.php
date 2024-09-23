<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-color-primary dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8" style="min-height: 470px">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Konten pertama -->
            <div class="w-full">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4 text-color-primary">Selamat Datang!</h3>
                        <table class="text-gray-500 text-base">
                            <tr>
                                <td>Nama</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ __('mikeu') }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Terdaftar</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ \Carbon\Carbon::parse(Auth::user()->created_at)->isoFormat('D MMMM YYYY, HH:mm:ss') }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Konten kedua -->
            <div class="w-full">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4 text-color-primary">Informasi dasar</h3>
                        <table class="text-gray-500 text-base">
                            <tr>
                                <td>Kota</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['city'] }}</td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['region'] }}</td>
                            </tr>
                            <tr>
                                <td>Negara</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['country'] }}</td>
                            </tr>
                            <tr>
                                <td>Alamat IP</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['ip'] }}</td>
                            </tr>
                            <tr>
                                <td>OS</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['os'] }}</td>
                            </tr>
                            <tr>
                                <td>Peramban</td>
                                <td>&nbsp;:&nbsp;</td>
                                <td>{{ $data['browser'] }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Konten ketiga -->
            <div class="w-full">
                <div class="bg-white shadow-md rounded-md">
                    <div class="p-4 text-center">
                        <div class="mb-3 flex justify-center items-center">
                            <img src="{{ asset('assets/images/default.png') }}"
                                class="h-36 w-36 rounded-full object-cover" alt="Avatar Default">
                        </div>
                        <div class="mb-1 text-base font-semibold text-color-primary">{{ Auth::user()->name }}</div>
                        <!-- Membungkus text "admin" dengan flex untuk posisi tengah -->
                        <div class="flex justify-center items-center">
                            <label class="text-sm font-semibold bg-green-400 rounded-full h-4 w-14 text-gray-50 text-center flex justify-center items-center">
                                {{ __('admin') }}
                            </label>
                        </div>
                    </div>
                    <a href="#"
                        class="text-sm bg-color-primary rounded-bl-md rounded-br-md hover:bg-color-secondary px-2 flex justify-center items-center text-white hover:text-color-primary hover:font-semibold hover:shadow-inner hover:shadow-gray-500/40 transition-colors">
                        View Profile
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
