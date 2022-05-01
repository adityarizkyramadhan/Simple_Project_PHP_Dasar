<!DOCTYPE html>
<html lang="in">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>Home Page Admin</title>
    </head>
    <body>
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="?page=dashboard" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
                                <a href="?page=dosen" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dosen</a>
                                <a href="?page=mahasiswa" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Mahasiswa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="bg-white shadow">
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        if ($page == 'dashboard') {
                            echo  '<header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                            </div>
                            </header>';
                        } else if ($page == 'dosen') {
                            echo  '<header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold text-gray-900">Dosen</h1>
                            </div>
                            </header>';
                        } else if ($page == 'mahasiswa') {
                            echo  '<header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <h1 class="text-3xl font-bold text-gray-900">Mahasiswa</h1>
                            </div>
                            </header>';
                        }
                    }
                ?>
            </header>
            <main>
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                    <div>
                        <?php
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                                if ($page == 'dashboard') {
                                    include "dashboard.php";
                                } else if ($page == 'dosen') {
                                    include "dosen/index.php";
                                } else if ($page == 'mahasiswa') {
                                    include "mahasiswa/index.php";
                                }
                            } else {
                                include "admin_dashboard.php";
                            }
                        ?>
                    </div>
                <!-- /End replace -->
                </div>
            </main>
        </div>
    </body>
</html>