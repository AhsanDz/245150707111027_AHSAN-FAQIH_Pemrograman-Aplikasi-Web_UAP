<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if(session('success'))
                        <div style="background-color: white; padding: 10px; margin-bottom: 20px; border: 1px solid green;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('books.create') }}">
                        <button style="background-color: blue; color: white; padding: 10px 20px; margin-bottom: 20px;">
                            Tambah Buku
                        </button>
                    </a>

                    <table border="1" cellpadding="10" width="100%">
                        <tr style="background-color: white;">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>ISBN</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($books as $index => $book)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->stock }}</td>
                            <td>
                                <a href="{{ route('books.show', $book) }}">Lihat</a> |
                                <a href="{{ route('books.edit', $book) }}">Edit</a> |
                                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus?')" style="background:none; border:none; color:blue; cursor:pointer;">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>