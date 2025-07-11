<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Beranda Pembeli | ADDsports')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { font-family: 'Inter', sans-serif; }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-hover {
            transition: 0.3s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px #0001;
        }

        .category-chip {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .price-tag {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5b68d4 0%, #693b9f 100%);
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen text-gray-800 pb-24">
    {{-- NAVBAR --}}
    <nav class="bg-white/80 shadow border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-indigo-600 to-purple-600 rounded flex items-center justify-center">
                    <i class="fas fa-running text-white"></i>
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    ADDsports
                </span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('pembeli.keranjang.index') }}"
                   class="relative p-3 bg-gray-100 rounded-xl hover:bg-gray-200 transition">
                    <i class="fas fa-shopping-cart text-gray-600"></i>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="p-3 bg-gray-100 rounded-xl hover:text-red-600 text-gray-600 flex items-center space-x-1">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER FIXED --}}
    <footer class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t shadow text-center text-sm text-gray-600 py-3">
        &copy; {{ date('Y') }}
        <span class="font-bold bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent">
            ADDsports
        </span>. All rights reserved.
    </footer>
</body>
</html>
