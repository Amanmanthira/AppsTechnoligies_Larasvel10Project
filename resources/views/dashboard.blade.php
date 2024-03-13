<x-app-layout>
    <x-slot name="header">      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <a href="{{ url('/') }}"
        <button class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded-full">Home</button>
    </a>

    <div class="flex h-screen pt-5">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 flex flex-col ">
            <div class="p-4 flex items-center">
                <svg class="w-8 h-8 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16"></path>
                </svg>
                <span class="text-xl font-semibold">Dashboard</span>
            </div>
            <nav class="flex-grow">
                <a href="#" class="block p-4 hover:bg-gray-700">Dashboard</a>
                <a href="products" class="block p-4 hover:bg-gray-700">Products</a>
                <a href="#" class="block p-4 hover:bg-gray-700">Customers</a>
                <a href="#" class="block p-4 hover:bg-gray-700">Settings</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-8">
            <h1 class="text-2xl font-semibold mb-4">Dashboard Overview</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Total Users</h2>
                    <p class="text-gray-600 text-xl">245</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Revenue</h2>
                    <p class="text-gray-600 text-xl">$12,345</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Orders</h2>
                    <p class="text-gray-600 text-xl">150</p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">Products</h2>
                    <p class="text-gray-600 text-xl">53</p>
                </div>
            </div>
        </div>
    </div>






    


</body>

</html>


        

       
    </x-slot>   
</x-app-layout>
