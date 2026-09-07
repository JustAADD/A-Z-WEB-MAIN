<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="icon" type="image/png" href="../src/img/favicon.ico" />

    <link rel="stylesheet" href="../src/output.css">
</head>

<body>
    <!-- sidebar.php -->
    <div class="flex h-screen w-auto">
        <!-- Sidebar Container -->
        <aside class="w-64 p-6 flex flex-col justify-between md:flex h-full shadow-lg">
            <!-- Top Section / Branding -->
            <div>
                <div class="flex py-5 border-b border-slate-800">
                    <img class="w-16 h-16 rounded-full" src="../src/img/az-logo.png" alt="Avatar">
                    <span class=" text-lg font-semibold text-gray-800">Admin &nbsp;
                        Dashboard
                    </span>
                </div>

                <!-- Navigation Links -->
                <nav class="mt-6 px-4 space-y-2">
                    <a href="./admin-page.php"
                        class="flex items-center px-4 py-3 text-gray-800 hover:bg-slate-800 hover:text-white rounded-lg transition duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-800 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://w3.org">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- <a href="users.php"
                        class="flex items-center px-4 py-3 text-gray-800 hover:bg-slate-800 hover:text-white rounded-lg transition duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-800 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://w3.org">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                        <span>Users</span>
                    </a> -->

                    <!-- <a href="settings.php"
                        class="flex items-center px-4 py-3 text-gray-800 hover:bg-slate-800 hover:text-white rounded-lg transition duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-800 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://w3.org">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                        </svg>
                        <span>Settings</span>
                    </a> -->
                </nav>
            </div>

            <!-- Bottom User Profile Section -->
            <!-- <div class="p-4 border-t border-slate-800 flex items-center bg-slate-950">
                <img class="w-10 h-10 rounded-full border-2 border-indigo-500" src="https://placeholder.com"
                    alt="Avatar">
                <div class="ml-3">
                    <p class="text-sm font-medium text-white">Alex Doe</p>
                    <p class="text-xs text-gray-400">Developer</p>
                </div>
            </div> -->
        </aside>
</body>

</html>