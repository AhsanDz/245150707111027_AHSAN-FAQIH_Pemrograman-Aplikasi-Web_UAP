<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf
                        
                        <table width="100%">
                            <tr>
                                <td width="150">Judul</td>
                                <td>
                                    <input type="text" name="title" value="{{ old('title') }}" required style="width: 100%; padding: 5px;">
                                    @error('title')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Penulis</td>
                                <td>
                                    <input type="text" name="author" value="{{ old('author') }}" required style="width: 100%; padding: 5px;">
                                    @error('author')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>
                                    <input type="text" name="publisher" value="{{ old('publisher') }}" required style="width: 100%; padding: 5px;">
                                    @error('publisher')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td>
                                    <input type="number" name="year" value="{{ old('year') }}" required style="width: 100%; padding: 5px;">
                                    @error('year')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>ISBN</td>
                                <td>
                                    <input type="text" name="isbn" value="{{ old('isbn') }}" required style="width: 100%; padding: 5px;">
                                    @error('isbn')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>
                                    <input type="number" name="stock" value="{{ old('stock') }}" required style="width: 100%; padding: 5px;">
                                    @error('stock')
                                        <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" style="background-color: green; color: white; padding: 10px 20px; margin-top: 10px;">
                                        Simpan
                                    </button>
                                    <a href="{{ route('books.index') }}">
                                        <button type="button" style="background-color: gray; color: white; padding: 10px 20px; margin-top: 10px;">
                                            Kembali
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>