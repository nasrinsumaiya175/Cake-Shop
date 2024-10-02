<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        customPurple: '#7e22ce',
                        customPink: '#db2777',
                        customRed: '#dc2626',
                    },
                }
            }
        }
    </script>

    <!-- Include Alpine.js for Dropdown functionality (if necessary) -->
    <script defer src="https://unpkg.com/alpinejs@3.2.2" defer></script>
</head>

<body class="flex">
    <!-- Sidebar with gradient background -->
    <aside class="sidebar mt-12 bg-gradient-to-b from-purple-600 via-pink-500 to-red-500 text-white min-h-screen w-64 p-4">
        <ul class="space-y-8">
            <!-- Sidebar Heading -->
            <li class="text-lg font-semibold text-gray-200">Admin</li>

            <!-- Add Cake Link -->
            <li class="">
                <a class="flex items-center p-2 rounded-lg bg-purple-700 hover:bg-purple-600 shadow-lg hover:shadow-purple-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('addCake') }}">
                    <!-- Icon for Add Cake -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-white font-medium">Add Cake</span>
                </a>
            </li>

            <!-- All Cake Link -->
            <li class="mt-4">
                <a class="flex items-center p-2 rounded-lg bg-pink-700 hover:bg-pink-600 shadow-lg hover:shadow-pink-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('allCake') }}">
                    <!-- Icon for All Cake -->
                    <img src="/Admin/assets/sidebar/icon/allcake.png" width="32px" alt="">
                    <span class="text-white ml-3 font-medium">All Cake</span>
                </a>
            </li>

            <!-- Contact Us Link -->
            <li class="mt-4">
                <a class="flex items-center p-2 rounded-lg bg-red-700 hover:bg-red-600 shadow-lg hover:shadow-red-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('allcontact') }}">
                    <!-- Icon for Contact Us -->
                    <img src="/Admin/assets/sidebar/icon/contact.png" width="32px" alt="">
                    <span class="text-white ml-3 font-medium">Contact Us</span>
                </a>
            </li>

            <!-- Our Team Dropdown Menu -->
            <li class="relative mt-4" x-data="{ open: false }">
                <a @click="open = !open" class="flex items-center p-2 rounded-lg bg-purple-700 hover:bg-purple-600 shadow-lg hover:shadow-purple-400 transition-all duration-300 transform hover:scale-105 cursor-pointer">
                    <!-- Icon for Our Team -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7c0 1.1-.9 2-2 2H10c-1.1 0-2-.9-2-2m8-2H8m2 2c0 1.1-.9 2-2 2m4-2c1.1 0 2 .9 2 2M12 7v16m8-8H4" />
                    </svg>
                    <span class="text-white font-medium">Our Team</span>
                    <!-- Dropdown Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-auto text-white transition-transform duration-200"
                        :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <!-- Dropdown Content -->
                <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-full bg-white text-gray-800 rounded-md shadow-lg z-20">
                    <!-- Add Member Link -->
                    <li class="border-b">
                        <a href="{{ route('addmember') }}" class="flex items-center p-2 hover:bg-gray-100 rounded-t-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            <span>Add Member</span>
                        </a>
                    </li>
                    <!-- All Members Link -->
                    <li>
                        <a href="{{ route('allmember') }}" class="flex items-center p-2 hover:bg-gray-100 rounded-b-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7c0 1.1-.9 2-2 2H10c-1.1 0-2-.9-2-2m8-2H8m2 2c0 1.1-.9 2-2 2m4-2c1.1 0 2 .9 2 2M12 7v16m8-8H4" />
                            </svg>
                            <span>All Members</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>

    <!-- Main Content Area -->
</body>