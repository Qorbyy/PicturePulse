@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
    <section class="mt-32">
        {{-- <div class="items-center max-w-screen-md mx-auto ">
        <h3 class="text-5xl text-center font-hurricane">PinMe</h3>
    </div> --}}
    </section>
    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="/assets/p.png" alt="" class="w-20 h-20 max-w-full max-h-full rounded-full" id="imageUser">
            </div>
            <h3 class="text-xl font-semibold" id="namaUser">
            </h3>
            <div class="flex flex-row mt-3">
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="exploredata">
            </div>
        </div>
    </section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/otherpin.js"></script>
@endpush
