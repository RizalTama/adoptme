<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hewan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-amber-800 text-white p-4">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <h1 class="text-xl font-semibold">Edit Hewan</h1>
            <div class="space-x-2">
                <button onclick="goBack()" class="bg-white text-amber-800 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                    Kembali
                </button>
                <button onclick="logout()" class="bg-white text-amber-800 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                    Logout
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6 max-w-2xl">
        <!-- Form Container -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-amber-800 mb-8">Form Edit Hewan</h2>
            
            <form action="{{ route('hewan.update', $hewan->hewan_id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Nama Hewan -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Hewan
                    </label>
                    <input type="text" 
                           name="nama" 
                           value="{{ old('nama', $hewan->nama) }}" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                           placeholder="Masukkan nama hewan">
                </div>

                <!-- Jenis -->
                <div>
                    <label for="jenis" class="block text-sm font-medium text-gray-700 mb-2">
                        Jenis
                    </label>
                    <input type="text" 
                           name="jenis" 
                           value="{{ old('jenis', $hewan->jenis) }}" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                           placeholder="Contoh: Anjing, Kucing, Kelinci">
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-2">
                        Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors bg-white">
                        <option value="Jantan" {{ old('jenis_kelamin', $hewan->jenis_kelamin) == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ old('jenis_kelamin', $hewan->jenis_kelamin) == 'Betina' ? 'selected' : '' }}>Betina</option>
                    </select>
                </div>

                <!-- Usia -->
                <div>
                    <label for="usia" class="block text-sm font-medium text-gray-700 mb-2">
                        Usia (dalam tahun)
                    </label>
                    <input type="number" 
                           name="usia" 
                           value="{{ old('usia', $hewan->usia) }}" 
                           required
                           min="0"
                           step="0.1"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors"
                           placeholder="Contoh: 2">
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                        Status
                    </label>
                    <select name="status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors bg-white">
                        <option value="Tersedia" {{ old('status', $hewan->status) == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="Diadopsi" {{ old('status', $hewan->status) == 'Diadopsi' ? 'selected' : '' }}>Diadopsi</option>
                    </select>
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors resize-vertical" placeholder="Tulis deskripsi singkat tentang hewan...">{{ old('deskripsi', $hewan->deskripsi) }}</textarea>
                </div>

                <!-- Upload Gambar -->
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">
                        Upload Gambar
                    </label>
                    <input type="file" name="gambar" accept="image/*" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-colors">
                    
                    @if($hewan->gambar)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $hewan->gambar) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-lg border border-gray-300">
                        </div>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="pt-6">
                    <button type="submit" class="w-full bg-amber-800 hover:bg-amber-900 text-white py-3 px-6 rounded-lg font-medium text-lg transition-colors focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                        Perbarui Hewan
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script>
        // Go back function
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
