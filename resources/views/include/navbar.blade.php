
<nav class="fixed top-0 z-50 w-full bg-blue-900 text-white shadow-md">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center">
                <img src="/assets/logo3.png" alt="PicturePulse Logo" class="w-24 h-auto md:w-32 md:h-auto mr-2 md:mr-4">
                <button class="block md:hidden ml-auto" id="menu-toggle">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path class="heroicon-ui" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <a href="/explore" class="hover:text-purple-600">EXPLORE</a>
                {{-- <a href="/explore" class="hover:text-purple-600">PINNED</a> --}}
                <a href="/upload" class="hover:text-purple-600">UPLOAD</a>
                {{-- <a href="/explore" class="hover:text-purple-600">PINNED</a> --}}
            </div>
            <div class="flex items-center space-x-2">
                <form action="/explore" method="get">
                <input type="text" class="px-4 py-1 rounded-full border border-gray-300 text-black focus:outline-none focus:border-blue-700" placeholder="Search ..." name="cari">
            </form>
                <div class="flex items-center space-x-1 relative">
                    <img src="{{ asset('assets/'.$user->avatar)}}" alt="" class="w-10 h-10 rounded-full cursor-pointer" data-dropdown-toggle="user-dropdown-menu">
                    <!-- Drop Down -->
                    <div class="z-50 hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg" id="user-dropdown-menu">
                        <ul class="py-2">
                            <li><a href="/mypin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a></li>
                            <li><a href="/album" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Album</a></li>
                            <li><a href="/ubahpassword" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Change Password</a></li>
                            <li><a href="/logout" class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100">Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End Drop Down -->
                </div>
            </div>
        </div>
    </div>
</nav>
