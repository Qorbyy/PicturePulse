@extends('layouts.master')
@section('content')
<section class="bg-gray-100 mt-20">
    <div class="container mx-auto px-8 py-12">
        <!-- <h2 class="flex justify-center text-3xl font font-fontutama font-bold mb-6">Create Your New Albums</h2> -->

        <!-- Create Album Form dengan border -->
        <div class="container mx-auto mt-10 create-album-form bg-white rounded-lg shadow-md p-8 max-w-md">
            <h2 class="flex justify-center text-2xl font-bold font-fontutama mb-4">Edit Foto</h2>
            <form action="/edit-postingan/{{$foto->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="font-fontdua block text-sm font-semibold text-gray-600">Judul Foto:</label>
                    <input type="text" name="judul_baru" id="" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2" placeholder="Enter album name">
                </div>
                <div class="mb-4">
                    <label class="font-fontdua block text-sm font-semibold text-gray-600">Description:</label>
                    <textarea name="deskripsi_baru" id="" rows="4" class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-md w-full px-4 py-2" placeholder="Enter album description"></textarea>
                </div>
                {{-- <h3 class="mt-2">Pilih Album</h3>
                        <select type="text" name="album" id="" class="mt-2 border py-1 rounded-md border-slate-500">
                            <option selected >PilihAlbum</option>
                            @foreach ($albums as $album)
                                <option value="{{$album->id}}">{{$album->nama_album}}</option>
                            @endforeach
                        </select> --}}
                <div class="mt-6 flex justify-center">
                    <button type="submit" class="font-fontutama px-4 py-2 bg-blue-700 text-white rounded-md focus:outline-none focus:bg-blue-600">Perbaharui</button>
                </div>
            </form>
        </div>


    </div>
</section>
@endsection
