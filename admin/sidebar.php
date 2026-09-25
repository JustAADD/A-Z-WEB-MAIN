<?php


?>

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
            <!-- logout -->

            <!-- Sidebar logout trigger -->
            <div class="flex items-center px-4 py-2 text-gray-800 hover:bg-slate-800 hover:text-white rounded-lg
transition duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-800 group-hover:text-white" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                <button type="button" onclick="openLogoutModal()"
                    class="text-gray-800 group-hover:text-white">Logout</button>
            </div>

            <!-- Confirmation Modal -->
            <div id="logoutModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
                <div class="bg-white rounded-xl shadow-lg p-6 w-80 text-center">
                    <h2 class="text-lg font-semibold text-[#7E7C7C] mb-2">Confirm Logout</h2>
                    <p class="text-sm text-[#7E7C7C] mb-6">Are you sure you want to logout admin?</p>

                    <div class="flex justify-center gap-3">
                        <button type="button" onclick="closeLogoutModal()"
                            class="px-4 py-2 rounded-lg border border-[#7E7C7C] text-[#7E7C7C] hover:bg-gray-100">
                            Cancel
                        </button>
                        <form method="POST" action="admin-page.php">
                            <button type="submit" name="submit"
                                class="px-4 py-2 rounded-lg bg-[#025479] text-white hover:bg-[#013f5c]">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                function openLogoutModal() {
                    const modal = document.getElementById('logoutModal');
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }

                function closeLogoutModal() {
                    const modal = document.getElementById('logoutModal');
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            </script>


        </aside>
</body>

</html>