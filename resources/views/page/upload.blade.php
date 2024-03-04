@extends('layouts.master')
@section('content')
<section class="mt-32">
    <div class="items-center max-w-screen-md mx-auto ">
        {{-- <h3 class="text-5xl text-center font-fontutama">PicturePulse</h3> --}}
    </div>
</section>
<form action="/uploadfoto" method="POST" enctype="multipart/form-data">
    @csrf
<section class="mt-10">
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap px-2 flex-container justify-center">
            <div class="w-2/5  max-[480px]:w-full px-2">
                <div class="flex flex-col flex-wrap px-2">
                    <h3>Judul</h3>
                    <input type="text" name="judul_foto" id="" class="border py-1 rounded-md border-slate-500">
                    <h3 class="mt-4">Deskripsi</h3>
                    <textarea name="deskripsi_foto" id="" cols="30" rows="10"
                        class="border w-full h-36 border-slate-500 rounded-xl"></textarea>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input">Upload file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" name="url">
                        <h3 class="mt-2">Pilih Album</h3>
                        <select type="text" name="album" id="" class="mt-2 border py-1 rounded-md border-slate-500">
                            <option value="">PilihAlbum</option>
                            @foreach ($albums as $album)
                                <option value="{{$album->id}}">{{$album->nama_album}}</option>
                            @endforeach
                    </select>
                    <div class="flex flex-row justify-between">
                        <button type="submit" class="px-6 py-1 mt-4 w text-white rounded-sm bg-blue-700">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
@endsection
