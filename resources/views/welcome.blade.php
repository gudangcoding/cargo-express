<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Express - Your Trusted Logistics Partner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cargo.spotlayer.com/assets/global/js/jquery.geocomplete.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDvT1XcUdzXmpqiPxhDsdceSeOx4xKl0Kw"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }
        .animate-float { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center">
                            <i class="fas fa-shipping-fast text-3xl text-blue-600 mr-3"></i>
                            <span class="text-2xl font-bold text-gray-900">Cargo Express</span>
                        </div>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Home</a>
                        <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">About</a>
                        <a href="#services" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Services</a>
                        <a href="#tracking" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Tracking</a>
                        <a href="#location" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Location</a>
                        <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Contact</a>
                        <a href="/orders" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Order Now</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Your Trusted
                        <span class="text-yellow-400">Logistics</span>
                        Partner
                    </h1>
                    <p class="text-xl mb-8 text-gray-200 leading-relaxed">
                        Delivering excellence across Indonesia with our comprehensive cargo and parcel services. 
                        Fast, reliable, and secure shipping solutions for your business and personal needs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/orders" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-300 transition transform hover:scale-105">
                            <i class="fas fa-rocket mr-2"></i>Start Shipping
                        </a>
                        <a href="#tracking" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition">
                            <i class="fas fa-search mr-2"></i>Track Package
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="relative w-full h-[400px]">
                        <!-- Background: simple road and sky, side/front view -->
                        <svg viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <defs>
                                <linearGradient id="sky" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#BEE3F8"/>
                                    <stop offset="100%" stop-color="#90cdf4"/>
                                </linearGradient>
                                <linearGradient id="road" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#A0AEC0"/>
                                    <stop offset="100%" stop-color="#4A5568"/>
                                </linearGradient>
                                <linearGradient id="grass" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#A7F3D0"/>
                                    <stop offset="100%" stop-color="#34D399"/>
                                </linearGradient>
                                <linearGradient id="cargo-box" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#F3F4F6"/>
                                    <stop offset="100%" stop-color="#E5E7EB"/>
                                </linearGradient>
                                <linearGradient id="ship-body" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#60A5FA"/>
                                    <stop offset="100%" stop-color="#2563EB"/>
                                </linearGradient>
                                <linearGradient id="plane-body" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#F3F4F6"/>
                                    <stop offset="100%" stop-color="#A0AEC0"/>
                                </linearGradient>
                                <linearGradient id="sea" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#38BDF8"/>
                                    <stop offset="100%" stop-color="#0EA5E9"/>
                                </linearGradient>
                            </defs>
                            <!-- Sky -->
                            <rect width="600" height="400" fill="url(#sky)" />
                            <!-- Sea (for ship) -->
                            <rect y="300" width="600" height="40" fill="url(#sea)" opacity="0.85"/>
                            <!-- Grass -->
                            <rect y="320" width="600" height="80" fill="url(#grass)" />
                            <!-- Road (side view, horizontal) -->
                            <rect y="340" width="600" height="40" fill="url(#road)" />
                            <!-- Road stripes -->
                            <g>
                                <rect x="0" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                                <rect x="100" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                                <rect x="200" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                                <rect x="300" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                                <rect x="400" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                                <rect x="500" y="358" width="60" height="6" rx="3" fill="#fff" opacity="0.7"/>
                            </g>
                            <!-- Simple trees (side view) -->
                            <g>
                                <rect x="80" y="300" width="10" height="40" fill="#B45309" />
                                <ellipse cx="85" cy="295" rx="18" ry="22" fill="#059669" />
                                <rect x="520" y="310" width="8" height="30" fill="#B45309" />
                                <ellipse cx="524" cy="305" rx="14" ry="18" fill="#059669" />
                            </g>
                            <!-- Simple house (side view) -->
                            <g>
                                <rect x="450" y="285" width="38" height="30" fill="#FBBF24" />
                                <polygon points="450,285 469,265 488,285" fill="#F59E42" />
                                <rect x="460" y="300" width="10" height="15" fill="#fff" />
                            </g>
                            <!-- Animated cargo truck (side view, lebih mirip truk kargo) -->
                            <g id="truck-group">
                                <!-- Truck shadow -->
                                <ellipse id="truck-shadow" cx="0" cy="0" rx="38" ry="12" fill="#000" opacity="0.15"/>
                                <!-- Cargo box (besar, tinggi, khas truk kargo) -->
                                <rect id="truck-cargo" x="0" y="-60" width="90" height="48" rx="6" fill="url(#cargo-box)" stroke="#D1D5DB" stroke-width="2"/>
                                <!-- Cargo box lines (panel-panel pintu belakang) -->
                                <rect x="10" y="-50" width="20" height="36" fill="#E5E7EB" opacity="0.3"/>
                                <rect x="35" y="-50" width="20" height="36" fill="#E5E7EB" opacity="0.2"/>
                                <rect x="60" y="-50" width="20" height="36" fill="#E5E7EB" opacity="0.2"/>
                                <!-- Truck cabin (lebih kecil, khas truk kargo) -->
                                <rect id="truck-cabin" x="-38" y="-44" width="38" height="32" rx="6" fill="#2563EB" stroke="#1E40AF" stroke-width="2"/>
                                <!-- Cabin window -->
                                <rect id="truck-window" x="-32" y="-38" width="18" height="14" rx="2" fill="#60A5FA" />
                                <!-- Cabin door line -->
                                <rect x="-12" y="-44" width="2" height="32" fill="#e5e7eb" opacity="0.5"/>
                                <!-- Side mirror -->
                                <rect x="-40" y="-34" width="6" height="4" rx="1" fill="#A0AEC0"/>
                                <!-- Headlight -->
                                <ellipse id="truck-light" cx="-40" cy="-28" rx="3" ry="6" fill="#FDE68A" opacity="0.7"/>
                                <!-- Wheels (besar, khas truk kargo) -->
                                <circle id="truck-wheel1" cx="-20" cy="10" r="12" fill="#222" stroke="#444" stroke-width="2"/>
                                <circle id="truck-wheel2" cx="80" cy="10" r="12" fill="#222" stroke="#444" stroke-width="2"/>
                                <!-- Wheel hubcaps -->
                                <circle cx="-20" cy="10" r="4" fill="#E5E7EB"/>
                                <circle cx="80" cy="10" r="4" fill="#E5E7EB"/>
                                <!-- Mudguard belakang -->
                                <rect x="78" y="18" width="16" height="4" rx="2" fill="#4B5563"/>
                                <!-- Mudguard depan -->
                                <rect x="-32" y="18" width="16" height="4" rx="2" fill="#4B5563"/>
                                <!-- Bumper depan -->
                                <rect x="-44" y="-18" width="8" height="16" rx="2" fill="#9CA3AF"/>
                                <!-- Rear lights -->
                                <rect x="90" y="-10" width="4" height="8" rx="1" fill="#F87171"/>
                                <!-- Cargo box shadow (sedikit di bawah box) -->
                                <ellipse cx="45" cy="12" rx="38" ry="7" fill="#000" opacity="0.08"/>
                            </g>
                            <!-- Animated ship (kapal laut) -->
                            <g id="ship-group">
                                <!-- Ship shadow -->
                                <ellipse id="ship-shadow" cx="0" cy="0" rx="32" ry="8" fill="#000" opacity="0.10"/>
                                <!-- Ship body -->
                                <rect id="ship-body" x="0" y="0" width="80" height="18" rx="6" fill="url(#ship-body)" stroke="#2563EB" stroke-width="2"/>
                                <!-- Ship deck -->
                                <rect x="12" y="-10" width="56" height="10" rx="2" fill="#F3F4F6"/>
                                <!-- Ship bridge -->
                                <rect x="54" y="-18" width="14" height="8" rx="2" fill="#A0AEC0"/>
                                <!-- Ship windows -->
                                <circle cx="20" cy="-5" r="2" fill="#60A5FA"/>
                                <circle cx="28" cy="-5" r="2" fill="#60A5FA"/>
                                <circle cx="36" cy="-5" r="2" fill="#60A5FA"/>
                                <!-- Ship chimney -->
                                <rect x="60" y="-22" width="6" height="6" rx="1" fill="#F87171"/>
                                <!-- Ship bow (front) -->
                                <polygon points="0,18 0,0 10,9" fill="#2563EB"/>
                                <!-- Ship stern (back) -->
                                <polygon points="80,18 80,0 70,9" fill="#2563EB"/>
                            </g>
                            <!-- Animated airplane (pesawat) -->
                            <g id="plane-group">
                                <!-- Plane shadow -->
                                <ellipse id="plane-shadow" cx="0" cy="0" rx="18" ry="5" fill="#000" opacity="0.10"/>
                                <!-- Plane body -->
                                <rect id="plane-body" x="0" y="0" width="60" height="10" rx="5" fill="url(#plane-body)" stroke="#A0AEC0" stroke-width="1"/>
                                <!-- Plane nose -->
                                <ellipse cx="60" cy="5" rx="6" ry="5" fill="#F3F4F6" stroke="#A0AEC0" stroke-width="1"/>
                                <!-- Plane tail -->
                                <rect x="0" y="2" width="8" height="6" rx="2" fill="#A0AEC0"/>
                                <!-- Plane wings -->
                                <rect x="18" y="-6" width="24" height="6" rx="2" fill="#A0AEC0"/>
                                <rect x="22" y="10" width="16" height="5" rx="2" fill="#A0AEC0"/>
                                <!-- Plane window -->
                                <rect x="50" y="3" width="6" height="4" rx="1" fill="#60A5FA"/>
                            </g>
                        </svg>
                        <script>
                            // Animasi truk, kapal laut, dan pesawat
                            document.addEventListener('DOMContentLoaded', function () {
                                const svg = document.querySelector('.w-full.h-full');
                                // Truck
                                const truck = svg.getElementById('truck-group');
                                const truckShadow = svg.getElementById('truck-shadow');
                                let truckX = -120;
                                let truckDir = 1;
                                // Ship
                                const ship = svg.getElementById('ship-group');
                                const shipShadow = svg.getElementById('ship-shadow');
                                let shipX = 600;
                                let shipDir = -1;
                                // Plane
                                const plane = svg.getElementById('plane-group');
                                const planeShadow = svg.getElementById('plane-shadow');
                                let planeX = -80;
                                let planeY = 60;
                                let planeDir = 1;
                                let planeAngle = 0;
                                function animateAll() {
                                    // Truck: jalan bolak-balik di jalan raya
                                    truckX += 1.2 * truckDir;
                                    if (truckX > 600 + 120) { truckDir = -1; }
                                    if (truckX < -120) { truckDir = 1; }
                                    truck.setAttribute('transform', `translate(${truckX},350)`);
                                    truckShadow.setAttribute('cx', 30);
                                    truckShadow.setAttribute('cy', 22);

                                    // Ship: bergerak pelan dari kanan ke kiri di laut
                                    shipX += 0.5 * shipDir;
                                    if (shipX < -90) { shipX = 600; }
                                    ship.setAttribute('transform', `translate(${shipX},312)`);
                                    shipShadow.setAttribute('cx', 40);
                                    shipShadow.setAttribute('cy', 20);

                                    // Plane: terbang dari kiri ke kanan di langit, sedikit naik-turun
                                    planeX += 2.1 * planeDir;
                                    planeAngle = Math.sin(planeX / 60) * 6; // sedikit miring
                                    planeY = 60 + Math.sin(planeX / 40) * 10;
                                    if (planeX > 600 + 80) { planeX = -80; }
                                    plane.setAttribute('transform', `translate(${planeX},${planeY}) rotate(${planeAngle},30,5)`);
                                    planeShadow.setAttribute('cx', 30);
                                    planeShadow.setAttribute('cy', 18);

                                    requestAnimationFrame(animateAll);
                                }
                                animateAll();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 animate-float">
            <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full p-4">
                <i class="fas fa-ship text-2xl text-white"></i>
            </div>
        </div>
        <div class="absolute bottom-20 right-10 animate-float" style="animation-delay: 1s;">
            <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full p-4">
                <i class="fas fa-plane text-2xl text-white"></i>
            </div>
        </div>
    </section>

    <!-- Shipment Tools Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Shipment Tools</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Track your packages and calculate shipping costs instantly
                </p>
            </div>

            <!-- Tracking Shipment (Full Width) -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-12 max-w-2xl mx-auto">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mr-6">
                        <i class="fas fa-search text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Track Shipment</h3>
                        <p class="text-gray-600">Masukkan nomor resi dan pilih jenis layanan</p>
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Resi</label>
                        <div class="flex">
                            <input type="text" id="tracking-number"
                                   placeholder="Masukkan nomor resi"
                                   class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <select id="tracking-service-type" class="px-4 py-3 border-t border-b border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="cargo">Cargo</option>
                                <option value="parcel">Parcel</option>
                            </select>
                            <button onclick="trackShipment()"
                                    class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700 transition font-semibold">
                                <i class="fas fa-search mr-2"></i>Track
                            </button>
                        </div>
                    </div>
                    <!-- Tracking Result -->
                    <div id="tracking-result" class="hidden">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="flex items-center mb-3">
                                <div class="bg-blue-600 w-3 h-3 rounded-full mr-3"></div>
                                <span class="font-semibold text-blue-900">Shipment Status</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                    <span class="text-sm text-gray-700">Package picked up from Jakarta</span>
                                    <span class="ml-auto text-xs text-gray-500">Today, 9:00 AM</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-truck text-blue-500 mr-3"></i>
                                    <span class="text-sm text-gray-700">In transit to Bandung</span>
                                    <span class="ml-auto text-xs text-gray-500">Today, 2:30 PM</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-orange-500 mr-3"></i>
                                    <span class="text-sm text-gray-700">Estimated delivery</span>
                                    <span class="ml-auto text-xs text-gray-500">Tomorrow, 10:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">Belum punya nomor resi?</p>
                        <a href="/orders" class="text-blue-600 hover:text-blue-700 font-semibold">Buat pengiriman baru</a>
                    </div>
                </div>
            </div>

            <!-- Kalkulator Section: 2 Columns -->
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Kalkulator Parcel -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mr-6">
                            <i class="fas fa-box text-2xl text-yellow-600"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Kalkulator Parcel</h3>
                            <p class="text-gray-600">Hitung biaya pengiriman parcel Anda</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kota Asal</label>
                                <input type="text" id="parcel-origin" placeholder="Kota asal"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kota Tujuan</label>
                                <input type="text" id="parcel-destination" placeholder="Kota tujuan"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Berat (kg)</label>
                            <input type="number" id="parcel-weight" min="0.1" step="0.1" placeholder="Berat barang"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>
                        <!-- Hasil Kalkulasi Parcel -->
                        <div id="parcel-calculation-result" class="hidden">
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <div class="bg-yellow-600 w-3 h-3 rounded-full mr-3"></div>
                                    <span class="font-semibold text-yellow-900">Estimasi Biaya Parcel</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-700">Biaya per kg:</span>
                                        <span class="text-sm font-semibold" id="parcel-rate">Rp 0</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-700">Total Biaya:</span>
                                        <span class="text-sm font-bold" id="parcel-total">Rp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="calculateParcel()" 
                                class="w-full bg-yellow-600 text-white py-3 rounded-lg font-semibold hover:bg-yellow-700 transition">
                            <i class="fas fa-calculator mr-2"></i>Hitung Biaya Parcel
                        </button>
                    </div>
                </div>
                <!-- Kalkulator Cargo -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mr-6">
                            <i class="fas fa-truck-moving text-2xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Kalkulator Cargo</h3>
                            <p class="text-gray-600">Hitung biaya pengiriman cargo (darat, laut, udara)</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kota Asal</label>
                                <input type="text" id="cargo-origin" placeholder="Kota asal"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kota Tujuan</label>
                                <input type="text" id="cargo-destination" placeholder="Kota tujuan"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Berat (kg)</label>
                                <input type="number" id="cargo-weight" min="0.1" step="0.1" placeholder="Berat barang"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kubikasi (m³)</label>
                                <input type="number" id="cargo-volume" min="0.01" step="0.01" placeholder="Volume barang"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Metode Pengiriman</label>
                            <select id="cargo-method"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="darat">Darat</option>
                                <option value="laut">Laut</option>
                                <option value="udara">Udara</option>
                            </select>
                        </div>
                        <!-- Hasil Kalkulasi Cargo -->
                        <div id="cargo-calculation-result" class="hidden">
                            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                                <div class="flex items-center mb-3">
                                    <div class="bg-green-600 w-3 h-3 rounded-full mr-3"></div>
                                    <span class="font-semibold text-green-900">Estimasi Biaya Cargo</span>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-700">Biaya per kg/CBM:</span>
                                        <span class="text-sm font-semibold" id="cargo-rate">Rp 0</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-700">Total Biaya:</span>
                                        <span class="text-sm font-bold" id="cargo-total">Rp 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button onclick="calculateCargo()" 
                                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                            <i class="fas fa-calculator mr-2"></i>Hitung Biaya Cargo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600">Cities Covered</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">1M+</div>
                    <div class="text-gray-600">Packages Delivered</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 mb-2">24/7</div>
                    <div class="text-gray-600">Customer Support</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">99%</div>
                    <div class="text-gray-600">On-Time Delivery</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">About Cargo Express</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We are Indonesia's leading logistics company, committed to providing exceptional shipping services 
                    with cutting-edge technology and unparalleled customer service.
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 card-hover">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-globe text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Nationwide Coverage</h3>
                    <p class="text-gray-600">Serving all major cities and remote areas across Indonesia with our extensive network.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 card-hover">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Secure & Reliable</h3>
                    <p class="text-gray-600">Your packages are protected with advanced security measures and insurance coverage.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 card-hover">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Fast Delivery</h3>
                    <p class="text-gray-600">Express delivery options with guaranteed delivery times and real-time tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive logistics solutions tailored to meet your specific shipping needs
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Cargo Service -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 card-hover">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mr-6">
                            <i class="fas fa-ship text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Cargo Service</h3>
                            <p class="text-gray-600">Heavy freight and commercial shipping</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Sea Freight (Laut)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Air Freight (Udara)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Land Freight (Darat)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Customs Clearance</span>
                        </div>
                    </div>
                    
                    <a href="/orders" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Learn More
                    </a>
                </div>
                
                <!-- Parcel Service -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 card-hover">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mr-6">
                            <i class="fas fa-box text-2xl text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Parcel Service</h3>
                            <p class="text-gray-600">Lightweight package delivery</p>
                        </div>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Same Day Delivery</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Next Day Delivery</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Weight-based Pricing</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Real-time Tracking</span>
                        </div>
                    </div>
                    
                    <a href="/orders" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                        Learn More
                    </a>
                </div>
            </div>
            
            <!-- Additional Services -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 card-hover border border-gray-200">
                    <div class="bg-yellow-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-warehouse text-yellow-600"></i>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Warehousing</h4>
                    <p class="text-gray-600">Secure storage solutions with inventory management</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 card-hover border border-gray-200">
                    <div class="bg-red-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-truck text-red-600"></i>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Express Delivery</h4>
                    <p class="text-gray-600">Urgent shipments with guaranteed delivery times</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 card-hover border border-gray-200">
                    <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-headset text-purple-600"></i>
                    </div>
                    <h4 class="text-lg font-semibold mb-2">Customer Support</h4>
                    <p class="text-gray-600">24/7 dedicated support for all your needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section id="tracking" class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Track Your Package</h2>
                <p class="text-xl text-gray-600">Enter your tracking number to get real-time updates</p>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-xl">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" placeholder="Enter tracking number" 
                           class="flex-1 px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button class="bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-700 transition">
                        <i class="fas fa-search mr-2"></i>Track Package
                    </button>
                </div>
                
                <div class="mt-6 text-center">
                    <p class="text-gray-600">Don't have a tracking number?</p>
                    <a href="/orders" class="text-blue-600 hover:text-blue-700 font-semibold">Create a new shipment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Cargo Express?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We combine technology, reliability, and customer service to deliver exceptional logistics solutions
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Mobile App</h3>
                    <p class="text-gray-600">Track packages and manage shipments on the go with our mobile app</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-chart-line text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analytics</h3>
                    <p class="text-gray-600">Detailed insights and reports for your shipping operations</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lock text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Secure</h3>
                    <p class="text-gray-600">Advanced security measures to protect your valuable shipments</p>
                </div>
                
                <div class="text-center">
                    <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Global Network</h3>
                    <p class="text-gray-600">Extensive network covering all major cities and remote areas</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Tracking Section -->
    <section id="branch-locations" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Lokasi Cabang Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan cabang Cargo Express di seluruh provinsi Indonesia. Klik pin pada peta untuk detail alamat cabang.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="w-full lg:w-2/3">
                    <!-- Map Container -->
                    <div id="branch-map" class="w-full h-96 rounded-2xl shadow-lg overflow-hidden"></div>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="bg-gray-50 rounded-2xl p-6 shadow-md h-full flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Daftar Cabang Utama</h3>
                        <ul id="branch-list" class="space-y-4 text-left text-gray-700 text-base overflow-y-auto max-h-80">
                            <li>
                                <span class="font-semibold text-blue-700">DKI Jakarta</span><br>
                                Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 12190
                            </li>
                            <li>
                                <span class="font-semibold text-green-700">Jawa Barat</span><br>
                                Jl. Asia Afrika No. 45, Bandung, Jawa Barat 40111
                            </li>
                            <li>
                                <span class="font-semibold text-orange-700">Jawa Timur</span><br>
                                Jl. Basuki Rahmat No. 88, Surabaya, Jawa Timur 60271
                            </li>
                            <li>
                                <span class="font-semibold text-purple-700">Sumatera Utara</span><br>
                                Jl. Gatot Subroto No. 10, Medan, Sumatera Utara 20122
                            </li>
                            <li>
                                <span class="font-semibold text-pink-700">Bali</span><br>
                                Jl. By Pass Ngurah Rai No. 99, Denpasar, Bali 80227
                            </li>
                            <!-- Tambahkan cabang lain sesuai kebutuhan -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Leaflet.js CDN & Map Script -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Koordinat cabang utama di tiap provinsi (contoh, bisa ditambah)
                const branches = [
                    {
                        name: "DKI Jakarta",
                        address: "Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 12190",
                        lat: -6.21462,
                        lng: 106.84513,
                        color: "blue"
                    },
                    {
                        name: "Jawa Barat",
                        address: "Jl. Asia Afrika No. 45, Bandung, Jawa Barat 40111",
                        lat: -6.917464,
                        lng: 107.619123,
                        color: "green"
                    },
                    {
                        name: "Jawa Timur",
                        address: "Jl. Basuki Rahmat No. 88, Surabaya, Jawa Timur 60271",
                        lat: -7.257472,
                        lng: 112.752088,
                        color: "orange"
                    },
                    {
                        name: "Sumatera Utara",
                        address: "Jl. Gatot Subroto No. 10, Medan, Sumatera Utara 20122",
                        lat: 3.595196,
                        lng: 98.672223,
                        color: "purple"
                    },
                    {
                        name: "Bali",
                        address: "Jl. By Pass Ngurah Rai No. 99, Denpasar, Bali 80227",
                        lat: -8.670458,
                        lng: 115.212629,
                        color: "red"
                    }
                    // Tambahkan cabang lain sesuai kebutuhan
                ];

                // Inisialisasi peta
                var map = L.map('branch-map').setView([-2.548926, 118.0148634], 5.2);

                // Tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Custom icon generator
                function createColoredIcon(color) {
                    return new L.Icon({
                        iconUrl: `https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-${color}.png`,
                        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });
                }

                // Mapping warna ke icon
                const colorMap = {
                    blue: 'blue',
                    green: 'green',
                    orange: 'orange',
                    purple: 'violet',
                    red: 'red'
                };

                // Tambahkan marker untuk setiap cabang
                branches.forEach(function(branch) {
                    const iconColor = colorMap[branch.color] || 'blue';
                    const marker = L.marker([branch.lat, branch.lng], {
                        icon: createColoredIcon(iconColor)
                    }).addTo(map);
                    marker.bindPopup(
                        `<div class="font-bold text-lg mb-1">${branch.name}</div>
                        <div class="text-sm">${branch.address}</div>`
                    );
                });
            });
        </script>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-4xl font-bold mb-6">Get in Touch</h2>
                    <p class="text-xl text-gray-300 mb-8">
                        Ready to ship? Contact us for personalized logistics solutions and expert support.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="bg-blue-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Head Office</h4>
                                <p class="text-gray-300">Jl. Sudirman No. 123, Jakarta Pusat</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Phone</h4>
                                <p class="text-gray-300">+62 21 1234 5678</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-purple-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-300">info@cargoexpress.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-800 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="First Name" 
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <input type="text" placeholder="Last Name" 
                                   class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <input type="email" placeholder="Email Address" 
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <textarea rows="4" placeholder="Your Message" 
                                  class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-shipping-fast text-2xl text-blue-400 mr-3"></i>
                        <span class="text-xl font-bold">Cargo Express</span>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Your trusted partner for reliable and efficient logistics solutions across Indonesia.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin text-xl"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Cargo Shipping</a></li>
                        <li><a href="#" class="hover:text-white transition">Parcel Delivery</a></li>
                        <li><a href="#" class="hover:text-white transition">Express Delivery</a></li>
                        <li><a href="#" class="hover:text-white transition">Warehousing</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">News</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Track Package</a></li>
                        <li><a href="#" class="hover:text-white transition">Shipping Rates</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 Cargo Express. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg hover:bg-blue-700 transition opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDvT1XcUdzXmpqiPxhDsdceSeOx4xKl0Kw"></script>
    <script>
        // Google Maps initialization
        let customerMap, receiverMap;
        let customerMarker, receiverMarker;
        let customerAutocomplete, receiverAutocomplete;
        let directionsService, directionsRenderer;
        
        function initMaps() {
            // Initialize services
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({
                suppressMarkers: true,
                polylineOptions: {
                    strokeColor: '#3B82F6',
                    strokeWeight: 4,
                    strokeOpacity: 0.8
                }
            });
            
            // Customer Location Map (Jakarta Pusat)
            const customerLocation = { lat: -6.2088, lng: 106.8456 };
            customerMap = new google.maps.Map(document.getElementById('customer-map'), {
                zoom: 15,
                center: customerLocation,
                styles: [
                    {
                        featureType: 'all',
                        elementType: 'geometry',
                        stylers: [{ color: '#f5f5f5' }]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{ color: '#ffffff' }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{ color: '#e9e9e9' }]
                    }
                ]
            });
            
            // Customer marker (draggable)
            customerMarker = new google.maps.Marker({
                position: customerLocation,
                map: customerMap,
                title: 'Customer Location',
                draggable: true,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                        <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="20" fill="#3B82F6"/>
                            <circle cx="20" cy="20" r="8" fill="white"/>
                            <circle cx="20" cy="20" r="4" fill="#3B82F6"/>
                        </svg>
                    `),
                    scaledSize: new google.maps.Size(40, 40)
                }
            });
            
            // Customer marker drag event
            customerMarker.addListener('dragend', function() {
                const position = customerMarker.getPosition();
                updateCustomerAddress(position);
                updateRoute();
            });
            
            // Customer map click event
            customerMap.addListener('click', function(event) {
                customerMarker.setPosition(event.latLng);
                updateCustomerAddress(event.latLng);
                updateRoute();
            });
            
            // Receiver Location Map (Thamrin area)
            const receiverLocation = { lat: -6.1865, lng: 106.8243 };
            receiverMap = new google.maps.Map(document.getElementById('receiver-map'), {
                zoom: 15,
                center: receiverLocation,
                styles: [
                    {
                        featureType: 'all',
                        elementType: 'geometry',
                        stylers: [{ color: '#f5f5f5' }]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{ color: '#ffffff' }]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{ color: '#e9e9e9' }]
                    }
                ]
            });
            
            // Receiver marker (draggable)
            receiverMarker = new google.maps.Marker({
                position: receiverLocation,
                map: receiverMap,
                title: 'Receiver Location',
                draggable: true,
                icon: {
                    url: 'data:image/svg+xml;charset=UTF-8,' + encodeURIComponent(`
                        <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="20" fill="#10B981"/>
                            <path d="M20 8L24 16H16L20 8Z" fill="white"/>
                            <rect x="16" y="16" width="8" height="8" fill="white"/>
                        </svg>
                    `),
                    scaledSize: new google.maps.Size(40, 40)
                }
            });
            
            // Receiver marker drag event
            receiverMarker.addListener('dragend', function() {
                const position = receiverMarker.getPosition();
                updateReceiverAddress(position);
                updateRoute();
            });
            
            // Receiver map click event
            receiverMap.addListener('click', function(event) {
                receiverMarker.setPosition(event.latLng);
                updateReceiverAddress(event.latLng);
                updateRoute();
            });
            
            // Initialize autocomplete
            initAutocomplete();
            
            // Initial route
            updateRoute();
        }
        
        function initAutocomplete() {
            // Customer search autocomplete
            const customerSearchInput = document.getElementById('customer-search');
            customerAutocomplete = new google.maps.places.Autocomplete(customerSearchInput, {
                types: ['address'],
                componentRestrictions: { country: 'id' }
            });
            
            customerAutocomplete.addListener('place_changed', function() {
                const place = customerAutocomplete.getPlace();
                if (place.geometry) {
                    const position = place.geometry.location;
                    customerMarker.setPosition(position);
                    customerMap.setCenter(position);
                    customerMap.setZoom(16);
                    updateCustomerAddress(position);
                    updateRoute();
                    
                    // Update search input
                    customerSearchInput.value = place.formatted_address;
                }
            });
            
            // Receiver search autocomplete
            const receiverSearchInput = document.getElementById('receiver-search');
            receiverAutocomplete = new google.maps.places.Autocomplete(receiverSearchInput, {
                types: ['address'],
                componentRestrictions: { country: 'id' }
            });
            
            receiverAutocomplete.addListener('place_changed', function() {
                const place = receiverAutocomplete.getPlace();
                if (place.geometry) {
                    const position = place.geometry.location;
                    receiverMarker.setPosition(position);
                    receiverMap.setCenter(position);
                    receiverMap.setZoom(16);
                    updateReceiverAddress(position);
                    updateRoute();
                    
                    // Update search input
                    receiverSearchInput.value = place.formatted_address;
                }
            });
        }
        
        function updateCustomerAddress(position) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: position }, function(results, status) {
                if (status === 'OK' && results[0]) {
                    document.getElementById('customer-address').textContent = results[0].formatted_address;
                }
            });
        }
        
        function updateReceiverAddress(position) {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: position }, function(results, status) {
                if (status === 'OK' && results[0]) {
                    document.getElementById('receiver-address').textContent = results[0].formatted_address;
                }
            });
        }
        
        function updateRoute() {
            const request = {
                origin: customerMarker.getPosition(),
                destination: receiverMarker.getPosition(),
                travelMode: google.maps.TravelMode.DRIVING
            };
            
            directionsService.route(request, function(result, status) {
                if (status === 'OK') {
                    directionsRenderer.setMap(customerMap);
                    directionsRenderer.setDirections(result);
                    
                    // Update route information
                    const route = result.routes[0];
                    if (route && route.legs[0]) {
                        const leg = route.legs[0];
                        document.querySelector('.text-2xl.font-bold.text-blue-600').textContent = leg.distance.text;
                        document.querySelector('.text-2xl.font-bold.text-green-600').textContent = leg.duration.text;
                    }
                }
            });
        }
        
        // Tracking Shipment Function
        function trackShipment() {
            const trackingNumber = document.getElementById('tracking-number').value.trim();
            const trackingResult = document.getElementById('tracking-result');
            
            if (trackingNumber === '') {
                alert('Please enter a tracking number');
                return;
            }
            
            // Simulate tracking result (in real app, this would call API)
            trackingResult.classList.remove('hidden');
            
            // Scroll to result
            trackingResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
        
        // Shipping Calculator Function
        function calculateShipping() {
            const serviceType = document.getElementById('service-type').value;
            const shippingMethod = document.getElementById('shipping-method').value;
            const weight = parseFloat(document.getElementById('weight').value) || 0;
            const distance = parseFloat(document.getElementById('distance').value) || 0;
            
            const calculationResult = document.getElementById('calculation-result');
            
            if (weight <= 0 || distance <= 0) {
                calculationResult.classList.add('hidden');
                return;
            }
            
            // Calculate costs based on service type and method
            let baseRate = 0;
            let distanceRate = 0;
            let weightRate = 0;
            
            if (serviceType === 'cargo') {
                // Cargo service rates
                switch(shippingMethod) {
                    case 'laut':
                        baseRate = 500000;
                        distanceRate = distance * 2000;
                        weightRate = weight * 15000;
                        break;
                    case 'udara':
                        baseRate = 800000;
                        distanceRate = distance * 3500;
                        weightRate = weight * 25000;
                        break;
                    case 'darat':
                        baseRate = 300000;
                        distanceRate = distance * 1500;
                        weightRate = weight * 10000;
                        break;
                }
            } else {
                // Parcel service rates
                baseRate = 25000;
                distanceRate = distance * 500;
                weightRate = weight * 2000;
            }
            
            const totalCost = baseRate + distanceRate + weightRate;
            
            // Update display
            document.getElementById('base-rate').textContent = formatCurrency(baseRate);
            document.getElementById('distance-cost').textContent = formatCurrency(distanceRate);
            document.getElementById('weight-cost').textContent = formatCurrency(weightRate);
            document.getElementById('total-cost').textContent = formatCurrency(totalCost);
            
            calculationResult.classList.remove('hidden');
            
            // Scroll to result
            calculationResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
        
        // Format currency function
        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        }
        
        // Initialize maps when page loads
        window.addEventListener('load', function() {
            if (typeof google !== 'undefined' && google.maps) {
                initMaps();
            } else {
                // Retry after a short delay if Google Maps isn't loaded yet
                setTimeout(initMaps, 1000);
            }
        });
        
        // Back to top functionality
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
