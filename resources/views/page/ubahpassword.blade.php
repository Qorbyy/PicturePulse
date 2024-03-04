@extends('layouts.master')
@section('content')
<section class="max-w-screen-md flex justify-center mx-auto">
    @if ($message = Session::get('error'))
    <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="text-sm font-medium ms-3">
          {{$message}}
        </div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
      </div>
      @endif
    <div class="border bg-white shadow-lg p-2 mx-auto mt-32 rounded-xl px-11  ">
        <h2 class="font font-fontutama text-xl text-center">Change Your Password</h2>
        <div class="mt-4">
            <form action="/update-password" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Old Password</label>
                    <input name="password_lama" type="password" id="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50 ">
                    @error('password_lama')
                    <small class="italic text-red-800">{{ $message}}</small>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="">New Password</label>
                    <input name="password_baru" type="password" id="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                    @error('password_baru')
                    <small class="italic text-red-800">{{ $message}}</small>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="">Confirm Password</label>
                    <input name="confirm_password" type="password" id="password" class="px-2 py-1 w-full border border-slate-400 rounded-md bg-slate-50">
                    @error('confirm_password')
                    <small class="italic text-red-800">{{ $message}}</small>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-600 px-4 py-1 rounded mb-5 mt-5 text-white hover:bg-whaite"><a href="">Perbaharui</a></button>
                </div>

            </form>
        </div>
    </div>
</div>
</section>
@endsection
