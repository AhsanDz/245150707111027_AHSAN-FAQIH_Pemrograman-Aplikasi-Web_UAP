<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <table border="1" cellpadding="10" width="100%">
                        <tr>
                            <td width="150"><strong>Judul</strong></td>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <td><strong>Penulis</strong></td>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td><strong>Penerbit</strong></td>
                            <td>{{ $book->publisher }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tahun</strong></td>
                            <td>{{ $book->year }}</td>
                        </tr>
                        <tr>
                            <td><strong>ISBN</strong></td>
                            <td>{{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <td><strong>Stok</strong></td>
                            <td>{{ $book->stock }}</td>
                        </tr>
                    </table>

                    <br>

                    <a href="{{ route('books.edit', $book) }}">
                        <button style="background-color: orange; color: white; padding: 10px 20px;">
                            Edit
                        </button>
                    </a>
                    
                    <a href="{{ route('books.index') }}">
                        <button style="background-color: gray; color: white; padding: 10px 20px;">
                            Kembali
                        </button>
                    </a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')" style="background-color: red; color: white; padding: 10px 20px;">
                            Hapus
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>