<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'NorHeal Dashboard')</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        Jakarta: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="m-0 min-h-screen bg-[#F0F4FF] font-Jakarta text-[#1d2a44]">
    <!-- Page Layout Section -->
    <div class="grid min-h-[997px] grid-cols-[240px_minmax(0,1fr)] overflow-hidden max-[1100px]:grid-cols-[86px_minmax(0,1fr)] max-[720px]:block">
        <!-- Sidebar Section -->
        <aside id="appSidebar"
            class="flex h-[997px] w-[240px] flex-col gap-3.5 border-r border-[#2563EB]/10 bg-white/[0.96] px-[8px] pt-0 max-[1100px]:w-[86px] max-[1100px]:px-2.5 max-[720px]:h-auto max-[720px]:w-full max-[720px]:flex-row max-[720px]:items-center max-[720px]:overflow-x-auto max-[720px]:border-r-0 max-[720px]:border-b">

            <!-- Logo Section -->
            <div class="-mx-[8px] flex h-[64px] w-[239px] items-center gap-[8px] border-b border-[#2563EB]/10 pr-[16px] pl-[16px] max-[720px]:w-[calc(100%+16px)]">
                <img src="/img/NorHealLogo.png" alt="NorHeal Logo" class="h-[32px] w-auto object-contain">

                <div
                    class="ml-auto grid size-[32px] place-items-center rounded-full bg-[#F1F5FF] text-[#2563EB] max-[1100px]:hidden">
                    <svg viewBox="0 0 24 24" class="size-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </div>
                <button type="button" id="mobileSidebarToggle"
                    class="ml-auto hidden size-[32px] place-items-center rounded-full bg-[#F1F5FF] text-[#2563EB] max-[720px]:grid"
                    aria-label="Open sidebar menu" aria-expanded="false">
                    <svg viewBox="0 0 24 24" class="size-4" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Menu Section -->
            <nav id="sidebarNav" class="flex-1 overflow-auto pr-0.5 max-[720px]:hidden">
                @php
                    $dashboardActive = request()->routeIs('dashboard') || request()->is('/');
                    $leadManagementActive = request()->routeIs('lead-management') || request()->is('lead-management');
                @endphp

                <!-- Sidebar Overview Menu -->
                <div class="mb-3 mt-1 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Overview
                    </p>
                    <a href="/"
                        class="flex items-center gap-[8px] rounded-[20px] text-[11px] font-semibold max-[1100px]:justify-center max-[1100px]:px-0 {{ $dashboardActive ? 'relative h-[35.5px] w-[223px] pt-[8px] pr-[10px] pb-[8px] pl-[10px] text-blue-600 after:absolute after:right-2.5 after:size-[5px] after:rounded-full after:bg-orange-500 [&_svg]:size-[13px] [&_svg]:text-blue-600' : 'h-[30px] px-2.5 text-[#526986]' }}"
                        @if ($dashboardActive) style="background: linear-gradient(90deg, rgba(37,99,235,0.12) 0%, rgba(249,115,22,0.07) 100%);" @endif>
                        <img src="/img/Icon.png" alt="Dashboard Icon" class="size-4">
                        <span
                            class="h-[20px] w-[70px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden {{ $dashboardActive ? 'text-[#2563EB]' : 'text-[#526986]' }}">Dashboard</span>
                    </a>
                </div>

                <!-- Sidebar Operations Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">
                        Operations</p>
                    <a href="/lead-management"
                        class="flex items-center gap-[9px] rounded-[20px] text-[11px] font-semibold max-[1100px]:justify-center max-[1100px]:px-0 {{ $leadManagementActive ? 'relative h-[35.5px] w-[223px] pt-[8px] pr-[10px] pb-[8px] pl-[10px] text-blue-600 after:absolute after:right-2.5 after:size-[5px] after:rounded-full after:bg-orange-500 [&_svg]:size-[13px] [&_svg]:text-blue-600' : 'h-[30px] px-2.5 text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3]' }}"
                        @if ($leadManagementActive) style="background: linear-gradient(90deg, rgba(37,99,235,0.12) 0%, rgba(249,115,22,0.07) 100%);" @endif>@include('partials.inline-icon', ['name' => 'users'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden {{ $leadManagementActive ? 'text-[#2563EB]' : '' }}">Lead Management</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'phone'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Calling Team</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'calendar'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Appointments</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'map'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Field Ops</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'ruler'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Measurements</span></a>
                </div>

                <!-- Sidebar Commerce Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Commerce
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'box'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Order Management</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'store'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Distributors</span></a>
                </div>

                <!-- Sidebar Finance Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Finance
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'dollar'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Commission Engine</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'wallet'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Wallet & Payout</span></a>
                </div>

                <!-- Sidebar Intelligence Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">
                        Intelligence</p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'chart'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Reports & Analytics</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'shield'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Fraud Detection</span></a>
                </div>

                <!-- Sidebar System Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">System
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'settings'])
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal max-[1100px]:hidden">Admin Panel</span></a>
                </div>
            </nav>

            <!-- User Box Section -->
            <div
                class="-mx-[8px] flex h-[70px] w-[239px] flex-col items-center border-t border-[#2563EB]/10 pt-[8px] pr-[8px] pb-[12px] pl-[8px] max-[720px]:hidden">
                <div class="flex h-[49px] w-[223px] items-center gap-[10px] rounded-[20px] bg-[#2563EB]/[0.05] p-[8px] max-[1100px]:justify-center">
                    <img src="/img/user.png" alt="Rahul Sharma" class="size-[33px] rounded-full object-cover">
                    <div class="w-[142px] max-[1100px]:hidden">
                        <strong class="block h-[18px] w-[79px] font-Jakarta text-[12px] font-bold leading-[18px] tracking-normal text-[#0F172A]">Rahul Sharma</strong>
                        <span class="block h-[15px] w-[61px] font-Jakarta text-[10px] font-normal leading-[15px] tracking-normal text-[#94A3B8]">Super Admin</span>
                    </div>
                    <svg viewBox="0 0 24 24" class="ml-auto size-[13px] text-[#62748E]" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4" />
                        <path d="M16 17l5-5-5-5" />
                        <path d="M21 12H9" />
                    </svg>
                </div>
            </div>
        </aside>
        <!-- Main Content Section -->
        <main class="min-w-0 bg-[#F0F4FF] px-4 pb-6 pt-0 max-[720px]:p-3">
            <!-- Topbar Section -->
            <header
                class="-mx-4 mb-4 flex h-[64px] w-[calc(100%+2rem)] items-center justify-between border-b border-[#2563EB]/10 bg-white/95 pr-[24px] pl-[24px] max-[720px]:mx-[-12px] max-[720px]:h-auto max-[720px]:w-[calc(100%+24px)] max-[720px]:flex-col max-[720px]:items-stretch max-[720px]:gap-3 max-[720px]:px-3 max-[720px]:py-3">
                <!-- Topbar Title Section -->
                <div>
                    <div class="h-6 w-[181.73px]">
                        <h1
                            class="w-[167px] h-[24px] font-Jakarta font-black text-[16px] leading-[24px] tracking-[0px] text-[#0F172A]">
                            @yield('pageTitle', 'Executive Dashboard')
                        </h1>
                    </div>
                    <p
                        class="m-0 h-[17px] w-[182px] text-[11px] font-medium leading-[16.5px] tracking-normal text-[#94A3B8]">
                        Wednesday, 18 June 2025 - 9:41 AM</p>
                </div>

                <!-- Topbar Right Actions Section -->
                <div class="flex h-[37.5px] w-[370px] items-center gap-[12px] max-[720px]:w-full">
                    <!-- Search Box Section -->
                    <div
                        class="flex h-[37.5px] w-[274px] items-center gap-[8px] rounded-[20px] border border-[#E2E8F0] bg-[#FFFFFF] pt-[8px] pr-[12px] pb-[8px] pl-[12px] text-left text-[9px] font-semibold text-[#9aacc2] max-[720px]:w-full">
                        <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <input type="search" placeholder="Search anything..."
                            class="h-[19.5px] w-[192px] bg-transparent text-[13px] font-normal leading-[19.5px] text-[#0F172A]/50 outline-none placeholder:text-[#0F172A]/50">
                        <img src="/img/Text.png" alt="Shortcut" class="h-[19px] w-[27px] object-contain">
                    </div>

                    <!-- Notification Button Section -->
                    <button
                        class="grid size-[36px] place-items-center rounded-[20px] bg-[#2563EB]/[0.07] text-[#5f7ba0]"
                        aria-label="Notifications">
                        <span class="relative grid size-[30px] place-items-center">
                            <svg viewBox="0 0 24 24" class="size-[15px]" fill="none" stroke="#2563EB" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M10 19a2 2 0 0 0 4 0" />
                            </svg>
                            <span class="absolute right-[7px] top-[6px] size-[5px] rounded-full bg-orange-500"></span>
                        </span>
                    </button>

                    <!-- Profile Button Section -->
                    <button type="button" class="grid size-[36px] cursor-pointer place-items-center rounded-full"
                        aria-label="Profile">
                        <img src="/img/user.png" alt="User" class="size-[36px] rounded-full object-cover">
                    </button>
                </div>
            </header>
            @yield('content')
        </main>
    </div>
    @stack('scripts')
    <style>
        @media (max-width: 720px) {
            #appSidebar.mobile-open {
                flex-direction: column;
                align-items: stretch;
                overflow: visible;
            }

            #sidebarNav.mobile-open {
                display: block;
                width: 100%;
                max-height: calc(100dvh - 64px);
                overflow-y: auto;
                padding: 8px 0 12px;
            }

            #sidebarNav.mobile-open p {
                display: block;
            }

            #sidebarNav.mobile-open a span {
                display: block;
            }

            #sidebarNav.mobile-open a {
                width: 100%;
                justify-content: flex-start;
                padding-left: 10px;
                padding-right: 10px;
            }

            #sidebarNav.mobile-open > div {
                display: block;
                margin-top: 12px;
                margin-bottom: 12px;
            }
        }
    </style>
    <script>
        const mobileSidebarToggle = document.getElementById('mobileSidebarToggle');
        const appSidebar = document.getElementById('appSidebar');
        const sidebarNav = document.getElementById('sidebarNav');

        mobileSidebarToggle?.addEventListener('click', () => {
            const isOpen = sidebarNav.classList.toggle('mobile-open');
            appSidebar.classList.toggle('mobile-open', isOpen);
            mobileSidebarToggle.setAttribute('aria-expanded', String(isOpen));
        });
    </script>
</body>
</html>
