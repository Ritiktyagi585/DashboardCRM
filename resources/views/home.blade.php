<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NorHeal Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#eef4ff] font-sans text-[#1d2a44]">

    <!-- Page Layout Section -->
    <div
        class="grid min-h-screen grid-cols-[240px_minmax(0,1fr)] overflow-hidden max-[1100px]:grid-cols-[86px_minmax(0,1fr)] max-[720px]:block">

        <!-- Sidebar Section -->
        <aside
            class="flex w-[240px] flex-col gap-3.5 border-r border-blue-600/15 bg-white/95 px-3.5 py-[15px] max-[1100px]:w-[86px] max-[1100px]:px-2.5 max-[720px]:h-auto max-[720px]:w-full max-[720px]:flex-row max-[720px]:items-center max-[720px]:overflow-x-auto max-[720px]:border-r-0 max-[720px]:border-b">

            <!-- Logo Section -->
            <div class="flex min-h-[42px] items-center">
                <img src="{{ asset('img/NorHealLogo.png') }}" alt="NorHeal Logo" class="h-8 w-[130px] object-contain">

                <div
                    class="ml-auto grid size-[22px] place-items-center rounded-full bg-blue-50 text-blue-300 max-[1100px]:hidden">
                    <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </div>
            </div>

            <!-- Sidebar Menu Section -->
            <nav class="flex-1 overflow-auto pr-0.5 max-[720px]:flex max-[720px]:overflow-visible">

                <!-- Sidebar Overview Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Overview
                    </p>
                    <a href="#"
                        class="relative flex h-[30px] items-center gap-[9px] rounded-[15px] bg-[#f1f4fb] px-2.5 text-[11px] font-semibold text-blue-600 after:absolute after:right-2.5 after:size-[5px] after:rounded-full after:bg-orange-500 [&_svg]:size-[13px] [&_svg]:text-blue-600 max-[1100px]:justify-center max-[1100px]:px-0">
                        <img src="{{ asset('img/Icon.png') }}" alt="Dashboard Icon" class="size-4">
                        <span
                            class="h-[19.5px] w-[69.47px] text-[13px] font-semibold leading-[19.5px] max-[1100px]:hidden">Dashboard</span>
                    </a>
                </div>

                <!-- Sidebar Operations Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">
                        Operations</p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'users'])
                        <span class="max-[1100px]:hidden">Lead Management</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'phone'])
                        <span class="max-[1100px]:hidden">Calling Team</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'calendar'])
                        <span class="max-[1100px]:hidden">Appointments</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'map'])
                        <span class="max-[1100px]:hidden">Field Ops</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'ruler'])
                        <span class="max-[1100px]:hidden">Measurements</span></a>
                </div>

                <!-- Sidebar Commerce Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Commerce
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'box'])
                        <span class="max-[1100px]:hidden">Order Management</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'store'])
                        <span class="max-[1100px]:hidden">Distributors</span></a>
                </div>

                <!-- Sidebar Finance Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">Finance
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'dollar'])
                        <span class="max-[1100px]:hidden">Commission Engine</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'wallet'])
                        <span class="max-[1100px]:hidden">Wallet & Payout</span></a>
                </div>

                <!-- Sidebar Intelligence Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">
                        Intelligence</p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'chart'])
                        <span class="max-[1100px]:hidden">Reports & Analytics</span></a>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'shield'])
                        <span class="max-[1100px]:hidden">Fraud Detection</span></a>
                </div>

                <!-- Sidebar System Menu -->
                <div class="my-3 max-[720px]:my-0 max-[720px]:flex">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad] max-[1100px]:hidden">System
                    </p>
                    <a href="#"
                        class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986] [&_svg]:size-[13px] [&_svg]:text-[#7d95b3] max-[1100px]:justify-center max-[1100px]:px-0">@include('partials.inline-icon', ['name' => 'settings'])
                        <span class="max-[1100px]:hidden">Admin Panel</span></a>
                </div>
            </nav>

            <!-- User Box Section -->
            <div
                class="flex min-h-12 items-center gap-[9px] rounded-lg border border-[#e8eef8] bg-[#f8fbff] p-[7px] max-[1100px]:justify-center max-[720px]:hidden">
                <div
                    class="grid size-[31px] place-items-center rounded-full bg-gradient-to-br from-[#26364f] to-orange-500 text-xs font-extrabold text-white">
                    RS</div>
                <div class="max-[1100px]:hidden">
                    <strong class="block text-xs leading-none">Rahul Sharma</strong>
                    <span class="text-[8px] font-bold uppercase text-[#7890ad]">Super Admin</span>
                </div>
            </div>
        </aside>

        <!-- Main Content Section -->
        <main class="min-w-0 overflow-auto bg-[#f3f7ff] px-4 pb-6 pt-0 max-[720px]:p-3">

            <!-- Topbar Section -->
            <header
                class="mb-4 flex h-[56px] items-center justify-between gap-4 rounded-lg border border-[#e8eef8] bg-white/90 px-6 py-0 max-[720px]:h-auto max-[720px]:flex-col max-[720px]:items-stretch max-[720px]:py-3">
                <!-- Topbar Title Section -->
                <div>
                    <div class="h-6 w-[181.73px]">
                        <h1
                            class="w-[167px] h-[24px] font-Plus Jakarta Sans font-black text-[16px] leading-[24px] tracking-[0px] text-[#0F172A]">
                            Executive Dashboard
                        </h1>
                    </div>
                    <p
                        class="m-0 h-[17px] w-[182px] text-[11px] font-medium leading-[16.5px] tracking-normal text-[#94A3B8]">
                        Wednesday, 18 June 2025 - 9:41 AM</p>
                </div>

                <!-- Topbar Right Actions Section -->
                <div class="flex items-center gap-2.5">
                    <!-- Search Box Section -->
                    <button type="button"
                        class="flex h-[37.5px] w-[274px] cursor-pointer items-center gap-2 rounded-full border border-[#e8eef8] bg-[#fbfdff] px-3 text-left text-[9px] font-semibold text-[#9aacc2] max-[720px]:w-full">
                        <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <span class="h-4 w-48 flex-1 text-[13px] font-normal leading-none text-[#0F172A]/50">Search
                            anything...</span>
                        <img src="{{ asset('img/Text.png') }}" alt="Shortcut" class="h-[19px] w-[27px] object-contain">
                    </button>

                    <!-- Notification Button Section -->
                    <button
                        class="grid size-[30px] place-items-center rounded-full border border-[#e8eef8] bg-white text-[#5f7ba0]"
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
                        <img src="{{ asset('img/user.png') }}" alt="User" class="size-[36px] rounded-full object-cover">
                    </button>
                </div>
            </header>

            <!-- Dashboard Content Section -->
            <section class="grid grid-cols-12 gap-4">

                <!-- KPI Cards Section -->
                <div
                    class="col-span-12 grid h-[114px] grid-cols-5 gap-4 overflow-hidden max-[1100px]:h-auto max-[1100px]:grid-cols-2 max-[720px]:grid-cols-1">

                    <!-- KPI Card 1 -->
                    <article
                        class="grid h-full grid-rows-[16px_42px_18px] gap-1.5 overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-4 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:h-[114px]">
                        <h2
                            class="h-[17px] w-[38px] whitespace-nowrap font-jakarta text-[11px] font-semibold leading-[16.5px] text-[#94A3B8]">
                            Total Leads
                        </h2>
                        <div class="flex items-center justify-between gap-3.5">
                            <h3
                                class="w-[73px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                1,840
                            </h3>
                            <img src="{{ asset('img/Sparkline.png') }}" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] object-contain">
                        </div>
                        <div class="flex items-center gap-[7px]">
                            <span
                                class="rounded-full bg-emerald-50 px-[7px] py-1 text-[8px] font-extrabold text-emerald-600">+18.4%</span>
                            <small class="text-[8px] font-semibold text-[#7890ad]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 2 -->
                    <article
                        class="grid h-full grid-rows-[16px_42px_18px] gap-1.5 overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-4 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[38px] h-[17px] font-jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Appointments
                        </h2>
                        <div class="flex items-center justify-between gap-3.5">
                            <h3
                                class="w-[52px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                480</h3>
                            <img src="{{ asset('img/orngSpark.png') }}" alt="Leads Sparkline"
                                class="h-[38px] w-[83px] object-contain">
                        </div>
                        <div class="flex items-center gap-[7px]">
                            <span
                                class="rounded-full bg-emerald-50 px-[7px] py-1 text-[8px] font-extrabold text-emerald-600">+12.2%</span>
                            <small class="text-[8px] font-semibold text-[#7890ad]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 3 -->
                    <article
                        class="grid h-full grid-rows-[16px_42px_18px] gap-1.5 overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-4 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[38px] h-[17px] font-jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Orders
                        </h2>
                        <div class="flex items-center justify-between gap-3.5">
                            <h3
                                class="w-[45px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                310</h3>
                            <img src="{{ asset('img/greenSpark.png') }}" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] object-contain">
                        </div>
                        <div class="flex items-center gap-[7px]">
                            <span
                                class="rounded-full bg-emerald-50 px-[7px] py-1 text-[8px] font-extrabold text-emerald-600">+24.8%</span>
                            <small class="text-[8px] font-semibold text-[#7890ad]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 4 -->
                    <article
                        class="grid h-full grid-rows-[16px_42px_18px] gap-1.5 overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-4 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[46px] h-[17px] font-jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Revenue
                        </h2>
                        <div class="flex items-center justify-between gap-3.5">
                            <h3
                                class="w-[86px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                Rs13.6L</h3>
                            <img src="{{ asset('img/purpleSpark.png') }}" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] object-contain">
                        </div>
                        <div class="flex items-center gap-[7px]">
                            <span
                                class="rounded-full bg-emerald-50 px-[7px] py-1 text-[8px] font-extrabold text-emerald-600">+31.8%</span>
                            <small class="text-[8px] font-semibold text-[#7890ad]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 5 -->
                    <article
                        class="grid h-full grid-rows-[16px_42px_18px] gap-1.5 overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-4 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[61px] h-[17px] font-jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Conversion
                        </h2>
                        <div class="flex items-center justify-between gap-3.5">
                            <h3
                                class="w-[82px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                16.8%</h3>
                            <img src="{{ asset('img/darkSpark.png') }}" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] object-contain">
                        </div>
                        <div class="flex items-center gap-[7px]">
                            <span
                                class="rounded-full bg-emerald-50 px-[7px] py-1 text-[8px] font-extrabold text-emerald-600">+2.1pp</span>
                            <small class="text-[8px] font-semibold text-[#7890ad]">vs last month</small>
                        </div>
                    </article>
                </div>

                <!-- Revenue Trend Section -->
                <section
                    class="col-span-8 h-[297.5px] overflow-hidden rounded-2xl border border-white/90 bg-white/95 p-6 shadow-[0_10px_24px_rgba(52,83,130,.04)] max-[1100px]:col-span-12 max-[720px]:h-auto max-[720px]:p-4">
                    <!-- Revenue Trend Header -->
                    <div class="mb-1 flex items-start justify-between gap-3">
                        <div>
                            <h2
                                class="w-[150px] h-[21px] font-jakarta font-bold text-[14px] leading-[21px] tracking-[0px] text-[#0F172B]">
                                Revenue & Lead Trend
                            </h2>
                            <p class="m-0 mt-2 text-[12px] font-medium leading-none text-[#6f85a0]">6-month performance
                                overview</p>
                        </div>
                        <button
                            class="flex h-[33px] w-[126px] items-center justify-center gap-2 rounded-full border border-[#cfe0ff] bg-white text-[#101828] shadow-sm">
                            <span class="h-[18px] w-[80px] text-[12px] font-semibold leading-[18px]">Last 6
                                Months</span>
                            <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                    </div>

                    <!-- Revenue Trend Legend -->
                    <div class="flex gap-6 text-[12px] font-medium text-[#526986]">
                        <span
                            class="before:mr-2 before:inline-block before:h-[2px] before:w-8 before:align-middle before:bg-blue-600">Leads</span>
                        <span
                            class="before:mr-2 before:inline-block before:h-[2px] before:w-8 before:align-middle before:bg-orange-500">Orders</span>
                        <span
                            class="before:mr-2 before:inline-block before:h-[2px] before:w-8 before:align-middle before:bg-purple-500">Revenue
                            (Rs k)</span>
                    </div>

                    <!-- Revenue Trend Chart -->
                    <svg class="mt-1 h-[182px] w-full" viewBox="0 0 685 182" fill="none" preserveAspectRatio="none">
                        <g stroke="#e8eef8" stroke-dasharray="5 5">
                            <path d="M145 30H675M145 66H675M145 102H675M145 138H675" />
                        </g>
                        <g fill="#9aaabd" font-size="10" font-weight="500">
                            <text x="120" y="33">832</text><text x="120" y="69">624</text><text x="120"
                                y="105">416</text><text x="120" y="141">208</text>
                            <text x="142" y="176">Jan</text><text x="246" y="176">Feb</text><text x="350"
                                y="176">Mar</text><text x="454" y="176">Apr</text><text x="558" y="176">May</text><text
                                x="650" y="176">Jun</text>
                        </g>
                        <image href="{{ asset('img/Vector.png') }}" x="136.66" y="24" width="444" height="58.15"
                            preserveAspectRatio="none" />
                        <circle cx="580.66" cy="26" r="5" fill="#a855f7" />
                        <image href="{{ asset('img/Vector1.png') }}" x="136.66" y="116" width="440" height="23"
                            preserveAspectRatio="none" />
                        <image href="{{ asset('img/Vector2.png') }}" x="136.66" y="132" width="440" height="16"
                            preserveAspectRatio="none" />
                    </svg>
                </section>

                <!-- Lead Funnel Section -->
                <section
                    class="col-span-4 h-[297.5px] overflow-hidden rounded-2xl border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12 max-[720px]:h-auto">
                    <!-- Lead Funnel Title -->
                    <h2
                        class="w-[82px] h-[21px] font-jakarta font-bold text-[14px] leading-[21px] tracking-[0px] text-[#0F172B]">
                        Lead Funnel
                    </h2>
                    <p
                        class="m-0 mt-2 h-[17px] w-[91px] text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">
                        Jun 2025 pipeline</p>

                    <!-- Lead Funnel Bars -->
                    <div class="mt-5 space-y-1.5">
                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Total
                                Leads</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-full items-center px-4 rounded-full bg-blue-600 text-[14px] font-extrabold text-white">1,840</span>
                            </div>
                            <span></span>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Assigned</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-[77%] min-w-[58px] items-center px-4 rounded-full bg-indigo-500 text-[14px] font-extrabold text-white">1,420</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                77%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Contacted</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-[58%] min-w-[58px] items-center px-4 rounded-full bg-purple-500 text-[14px] font-extrabold text-white">1,050</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                74%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Confirmed</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-[33%] min-w-[58px] items-center px-4 rounded-full bg-orange-500 text-[14px] font-extrabold text-white">620</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                59%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Appointment</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-[26%] min-w-[58px] items-center px-4 rounded-full bg-teal-500 text-[14px] font-extrabold text-white">480</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                77%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Orders</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#eef3fa]"><span
                                    class="flex h-full w-[22%] min-w-[58px] items-center px-4 rounded-full bg-emerald-500 text-[14px] font-extrabold text-white">310</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                65%
                            </p>
                        </div>
                    </div>
                </section>

                <!-- SLA Performance Section -->
                <section
                    class="col-span-4 h-[340px] rounded-2xl border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12">
                    <!-- SLA Performance Title -->
                    <h2 class="w-[119px] h-[21px] font-jakarta font-bold text-[14px] leading-[21px] text-[#0F172B]">
                        SLA Performance
                    </h2>

                    <!-- SLA Performance Rows -->
                    <div class="mt-[18px] grid gap-[13px]">
                        <div>
                            <div
                                class="mb-1.5 flex justify-between text-[13px] font-normal leading-[17px] text-[#62748E]">
                                <p
                                    class="w-[88px] h-[18px] font-jakarta font-medium text-[12px] leading-[18px] text-[#62748E]">
                                    Lead Response
                                </p>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="h-[18px] w-[28px] font-jakarta text-[12px] font-bold leading-[18px] text-[#22C55E]">94%</span>
                                    <span
                                        class="h-[15px] w-[30px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">/
                                        90%</span>
                                </div>
                            </div>
                            <div class="h-[5px] overflow-hidden rounded-full bg-[#edf3fb]"><span
                                    class="block h-full w-[94%] rounded-full bg-emerald-500"></span></div>
                        </div>

                        <div>
                            <div
                                class="mb-1.5 flex justify-between text-[13px] font-normal leading-[17px] text-[#62748E]">
                                <p
                                    class="w-[101px] h-[18px] font-jakarta font-medium text-[12px] leading-[18px] text-[#62748E]">
                                    Appointment SLA

                                </p>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="h-[18px] w-[28px] font-jakarta text-[12px] font-bold leading-[18px] text-[#22C55E]">87%</span>
                                    <span
                                        class="h-[15px] w-[30px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">/
                                        85%</span>
                                </div>
                            </div>
                            <div class="h-[5px] overflow-hidden rounded-full bg-[#edf3fb]"><span
                                    class="block h-full w-[87%] rounded-full bg-emerald-500"></span></div>
                        </div>

                        <div>
                            <div
                                class="mb-1.5 flex justify-between text-[13px] font-normal leading-[17px] text-[#62748E]">
                                <p
                                    class="w-[71px] h-[18px] font-jakarta font-medium text-[12px] leading-[18px] text-[#62748E]">
                                    Delivery SLA

                                </p>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="h-[18px] w-[28px] font-jakarta text-[12px] font-bold leading-[18px] text-[#F59E0B]">91%</span>
                                    <span
                                        class="h-[15px] w-[30px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">/
                                        95%</span>
                                </div>
                            </div>
                            <div class="h-[5px] overflow-hidden rounded-full bg-[#edf3fb]"><span
                                    class="block h-full w-[91%] rounded-full bg-orange-500"></span></div>
                        </div>

                        <div>
                            <div
                                class="mb-1.5 flex justify-between text-[13px] font-normal leading-[17px] text-[#62748E]">
                                <p
                                    class="w-[97px] h-[18px] font-jakarta font-medium text-[12px] leading-[18px] text-[#62748E]">
                                    Commission SLA
                                </p>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="h-[18px] w-[28px] font-jakarta text-[12px] font-bold leading-[18px] text-[#22C55E]">98%</span>
                                    <span
                                        class="h-[15px] w-[30px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">/
                                        98%</span>
                                </div>
                            </div>
                            <div class="h-[5px] overflow-hidden rounded-full bg-[#edf3fb]"><span
                                    class="block h-full w-[98%] rounded-full bg-emerald-500"></span></div>
                        </div>
                    </div>
                </section>

                <!-- Territory Performance Section -->
                <section
                    class="col-span-4 h-[340px] w-[355.66px] rounded-[16px] border border-[rgba(255,255,255,0.92)] bg-[rgba(255,255,255,0.88)] p-[20px] shadow-[0px_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12">
                    <!-- Territory Performance Title -->
                    <h2 class="m-0 h-[21px] w-[151px] text-[14px] font-bold leading-[21px] text-[#0F172B]">Territory Performance</h2>
                    <p class="m-0 mt-2 h-[17px] w-[132px] text-[11px] font-normal leading-[16.5px] text-[#62748E]">Orders by zone this month</p>

                    <!-- Territory Performance List -->
                    <div class="mt-[18px] grid gap-[13px]">
                        <div class="grid grid-cols-[6px_minmax(0,1fr)_22px] items-center gap-3">
                            <span class="h-6 w-[6px] rounded-full bg-blue-600"></span>
                            <div>
                                <div class="mb-1 flex items-center justify-between">
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-semibold leading-[18px] text-[#0F172B]">Banjara Hills</span>
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-bold leading-[18px] text-[#22C55E]">&#8377;3.2L</span>
                                </div>
                                <div class="h-[5px] rounded-full bg-[#edf3fb]"><span
                                        class="block h-full w-[90%] rounded-full bg-blue-600"></span></div>
                            </div>
                            <span class="text-right text-[11px] font-normal leading-[16.5px] text-[#62748E]">68</span>
                        </div>

                        <div class="grid grid-cols-[6px_minmax(0,1fr)_22px] items-center gap-3">
                            <span class="h-6 w-[6px] rounded-full bg-orange-500"></span>
                            <div>
                                <div class="mb-1 flex items-center justify-between">
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-semibold leading-[18px] text-[#0F172B]">Hitech City</span>
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-bold leading-[18px] text-[#22C55E]">&#8377;2.6L</span>
                                </div>
                                <div class="h-[5px] rounded-full bg-[#edf3fb]"><span
                                        class="block h-full w-[72%] rounded-full bg-orange-500"></span></div>
                            </div>
                            <span class="text-right text-[11px] font-normal leading-[16.5px] text-[#62748E]">54</span>
                        </div>

                        <div class="grid grid-cols-[6px_minmax(0,1fr)_22px] items-center gap-3">
                            <span class="h-6 w-[6px] rounded-full bg-emerald-500"></span>
                            <div>
                                <div class="mb-1 flex items-center justify-between">
                                    <span
                                        class="h-[18px] whitespace-nowrap text-[12px] font-semibold leading-[18px] text-[#0F172B]">Gachibowli</span>
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-bold leading-[18px] text-[#22C55E]">&#8377;2.3L</span>
                                </div>
                                <div class="h-[5px] rounded-full bg-[#edf3fb]"><span
                                        class="block h-full w-[64%] rounded-full bg-emerald-500"></span></div>
                            </div>
                            <span class="text-right text-[11px] font-normal leading-[16.5px] text-[#62748E]">48</span>
                        </div>

                        <div class="grid grid-cols-[6px_minmax(0,1fr)_22px] items-center gap-3">
                            <span class="h-6 w-[6px] rounded-full bg-purple-500"></span>
                            <div>
                                <div class="mb-1 flex items-center justify-between">
                                    <span
                                        class="h-[18px] whitespace-nowrap text-[12px] font-semibold leading-[18px] text-[#0F172B]">Kondapur</span>
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-bold leading-[18px] text-[#22C55E]">&#8377;2.0L</span>
                                </div>
                                <div class="h-[5px] rounded-full bg-[#edf3fb]"><span
                                        class="block h-full w-[56%] rounded-full bg-purple-500"></span></div>
                            </div>
                            <span class="text-right text-[11px] font-normal leading-[16.5px] text-[#62748E]">42</span>
                        </div>

                        <div class="grid grid-cols-[6px_minmax(0,1fr)_22px] items-center gap-3">
                            <span class="h-6 w-[6px] rounded-full bg-teal-500"></span>
                            <div>
                                <div class="mb-1 flex items-center justify-between">
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-semibold leading-[18px] text-[#0F172B]">Jubilee Hills</span>
                                    <span class="h-[18px] whitespace-nowrap text-[12px] font-bold leading-[18px] text-[#22C55E]">&#8377;1.7L</span>
                                </div>
                                <div class="h-[5px] rounded-full bg-[#edf3fb]"><span
                                        class="block h-full w-[48%] rounded-full bg-teal-500"></span></div>
                            </div>
                            <span class="text-right text-[11px] font-normal leading-[16.5px] text-[#62748E]">36</span>
                        </div>
                    </div>
                </section>

                <!-- Live Activity Section -->
                <section
                    class="col-span-4 h-[340px] rounded-2xl border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12">
                    <!-- Live Activity Header -->
                    <div class="mb-[17px] flex items-start justify-between gap-3">
                        <h2 class="m-0 h-[21px] text-[14px] font-bold leading-[21px] text-[#0F172B]">Live Activity</h2>
                        <span
                            class="flex h-[24px] items-center gap-1 rounded-full bg-emerald-50 px-2 text-[10px] font-bold leading-[15px] text-[#22C55E]">
                            <span class="size-[5px] rounded-full bg-[#22C55E]"></span>
                            Live
                        </span>
                    </div>

                    <!-- Live Activity List -->
                    <div class="grid gap-[13px]">
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-emerald-50 text-[#22C55E]">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6 9 17l-5-5" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[169px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">LD-288 delivered &mdash; Priya Nair</p>
                                <small class="block h-[15px] w-[46px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">2 min ago</small>
                            </div>
                        </div>
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-indigo-50 text-indigo-500">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-8 0v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[206px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">3 new leads assigned to Arjun Kumar</p>
                                <small class="block h-[15px] w-[46px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">8 min ago</small>
                            </div>
                        </div>
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-purple-50 text-purple-500">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v20" />
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7H14a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[226px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">Rs1,200 commission credited - Dr. Vijay</p>
                                <small class="block h-[15px] w-[50px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">12 min ago</small>
                            </div>
                        </div>
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-amber-50 text-amber-500">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M12 7v5" />
                                    <path d="M12 16h.01" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[246px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">SLA breach risk: LD-289 follow-up overdue</p>
                                <small class="block h-[15px] w-[50px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">18 min ago</small>
                            </div>
                        </div>
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-orange-50 text-orange-500">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m21 8-9-5-9 5 9 5 9-5Z" />
                                    <path d="m3 8 9 5 9-5" />
                                    <path d="M3 8v8l9 5 9-5V8" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[217px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">ORD-841 accepted by HealthDist Hyd</p>
                                <small class="block h-[15px] w-[50px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">25 min ago</small>
                            </div>
                        </div>
                        <div class="grid grid-cols-[24px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid size-6 place-items-center rounded-full bg-teal-50 text-teal-500">
                                <svg viewBox="0 0 24 24" class="size-3" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.91.33 1.8.62 2.65a2 2 0 0 1-.45 2.11L8 9.76a16 16 0 0 0 6.24 6.24l1.28-1.28a2 2 0 0 1 2.11-.45c.85.29 1.74.5 2.65.62A2 2 0 0 1 22 16.92Z" />
                                </svg>
                            </span>
                            <div>
                                <p class="m-0 h-[17px] w-[259px] font-jakarta text-[12px] font-medium leading-[16.5px] text-[#0F172B]">Ramesh Kumar confirmed appointment Jun 21</p>
                                <small class="block h-[15px] w-[50px] font-jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">31 min ago</small>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Quick Actions Section -->
                <section
                    class="col-span-8 h-[321px] w-[711.33px] rounded-[16px] border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12 max-[1100px]:w-full">
                    <!-- Quick Actions Title -->
                    <h2 class="m-0 h-[21px] w-[96px] text-[14px] font-bold leading-[21px] tracking-normal text-[#0F172B]">Quick Actions</h2>
                    <p class="m-0 mt-0 h-[17px] w-[175px] text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Click any action to launch the flow</p>

                    <!-- Quick Actions Buttons -->
                    <div class="mt-[18px] flex h-[113.5px] w-[669.33px] gap-[9px] max-[720px]:w-full max-[720px]:flex-wrap">
                        <a href="#" id="openNewLeadModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-[#2563EB]/15 bg-[#2563EB]/[0.08] px-4 py-3 text-center text-blue-600">
                            <span class="grid size-[28px] place-items-center rounded-full bg-blue-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'plus'])</span>
                            <span class="block h-[14px] w-[53px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#2563EB]">New Lead</span>
                        </a>

                        <a href="#" id="openBookAppointmentModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-orange-500/15 bg-orange-500/[0.08] px-4 py-3 text-center text-orange-500">
                            <span class="grid size-[28px] place-items-center rounded-full bg-orange-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'calendar'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#F97316]">Book Appointment</span>
                        </a>

                        <a href="#" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-[#22C55E]/15 bg-[#22C55E]/[0.08] px-4 py-3 text-center text-emerald-500">
                            <span class="grid size-[28px] place-items-center rounded-full bg-emerald-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'box'])</span>
                            <span class="block h-[14px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#22C55E]">Create Order</span>
                        </a>

                        <a href="#" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-[#A855F714]/15 bg-[#A855F714]/[0.08]  px-4 py-3 text-center text-purple-500">
                            <span class="grid size-[28px] place-items-center rounded-full bg-purple-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'users'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#A855F7]">Assign Executive</span>
                        </a>

                        <a href="#" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-[#14B8A614]/15 bg-[#14B8A614]/[0.08] px-4 py-3 text-center text-teal-500">
                            <span class="grid size-[28px] place-items-center rounded-full bg-teal-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'phone'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#14B8A6]">Export<br>Report</span>
                        </a>

                        <a href="#" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-center gap-2 rounded-[20px] border border-[#F59E0B14]/15 bg-[#F59E0B14]/[0.08] px-4 py-3 text-center text-amber-500">
                            <span class="grid size-[28px] place-items-center rounded-full bg-amber-100 [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'refresh'])</span>
                            <span class="block h-[14px] w-[54px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#F59E0B]">Sync CRM</span>
                        </a>
                    </div>
                </section>

                <!-- Display Settings Section -->
                <section
                    class="col-span-4 h-[321px] w-[355.66px] rounded-[16px] border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12">
                    <!-- Display Settings Title -->
                    <h2 class="m-0 h-[21px] w-[111px] font-Jakarta text-[14px] font-bold leading-[21px] tracking-normal text-[#0F172B]">Display Settings</h2>

                    <!-- Display Settings Options -->
                    <div class="mt-[38px] grid gap-[29px]">
                        <div
                            class="grid h-[32px] grid-cols-[minmax(0,1fr)_44px] items-center gap-2.5">
                            <div><strong class="block h-[18px] w-[87px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#0F172B]">Compact View</strong><span
                                    class="block h-[15px] w-[103px] font-Jakarta text-[10px] font-normal leading-[15px] tracking-normal text-[#62748E]">Reduce card padding</span></div>
                            <div
                                class="h-[22px] w-[39px] rounded-full bg-[#d1dbe8] p-[3px] before:block before:size-4 before:rounded-full before:bg-white before:shadow">
                            </div>
                        </div>
                        <div
                            class="grid h-[32px] grid-cols-[minmax(0,1fr)_44px] items-center gap-2.5">
                            <div><strong class="block h-[18px] w-[76px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#0F172B]">Auto-refresh</strong><span
                                    class="block h-[15px] w-[85px] font-Jakarta text-[10px] font-normal leading-[15px] tracking-normal text-[#62748E]">Every 30 seconds</span></div>
                            <div
                                class="h-[22px] w-[39px] rounded-full bg-[#d1dbe8] p-[3px] before:block before:size-4 before:rounded-full before:bg-white before:shadow">
                            </div>
                        </div>
                        <div
                            class="grid h-[32px] grid-cols-[minmax(0,1fr)_44px] items-center gap-2.5">
                            <div><strong class="block h-[18px] w-[75px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#0F172B]">Notifications</strong><span
                                    class="block h-[15px] w-[70px] font-Jakarta text-[10px] font-normal leading-[15px] tracking-normal text-[#62748E]">Desktop alerts</span></div>
                            <div
                                class="h-[22px] w-[39px] rounded-full bg-[#d1dbe8] p-[3px] before:block before:size-4 before:rounded-full before:bg-white before:shadow">
                            </div>
                        </div>
                    </div>
                </section>

            </section>
        </main>
    </div>

    <!-- Create New Lead Modal -->
    <div id="newLeadModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
        <div class="w-full max-w-[720px] rounded-[16px] bg-white shadow-[0_20px_60px_rgba(15,23,42,0.25)]">
            <!-- Modal Header Section -->
            <div class="flex h-[65px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 h-[23px] w-[126px] font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Create New Lead</h2>
                <button type="button" id="closeNewLeadModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Modal Step One Section -->
            <div id="leadStepOne" class="mx-auto w-[672px] py-4">
                <!-- Modal Step One Tabs -->
                <div class="mb-4 flex items-center gap-3">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">1</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#2563EB]">Patient Details</span>
                    </div>
                    <div class="h-px flex-1 bg-[#E8EEF8]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid size-6 place-items-center rounded-full bg-[#E8EEF8] text-[11px] font-bold text-[#94A3B8]">2</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#94A3B8]">Problem & Notes</span>
                    </div>
                </div>

                <!-- Patient Details Form -->
                <form>
                    <!-- Patient Name Field -->
                    <div class="h-[58.5px]">
                        <label class="mb-1 block h-[17px] w-[79px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Patient Name *</label>
                        <input id="leadName" type="text" placeholder="e.g. Ramesh Kumar" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                    </div>

                    <!-- Mobile Number Field -->
                    <div class="mt-[12px] h-[70.5px]">
                        <label class="mb-[4px] block h-[17px] w-[89px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Mobile Number *</label>
                        <input id="leadPhone" type="text" placeholder="+91 98765 43210" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                    </div>

                    <!-- Area Locality Field -->
                    <div class="h-[70.5px]">
                        <label class="mb-1 block h-[17px] w-[84px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Area / Locality *</label>
                        <input id="leadArea" type="text" placeholder="e.g. Banjara Hills, Hyderabad" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                    </div>

                    <!-- Age Gender Fields -->
                    <div class="grid h-[70px] grid-cols-2 gap-3">
                        <div>
                            <label class="mb-1 block h-[17px] w-[22px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Age</label>
                            <input type="text" placeholder="e.g. 58" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                        </div>
                        <div>
                            <label class="mb-1 block h-[17px] w-[41px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Gender</label>
                            <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                        </div>
                    </div>

                    <!-- Next Step Button -->
                    <button type="button" id="nextLeadStep" class="mt-5 flex h-[32px] w-[660px] items-center justify-center rounded-[20px] px-4 py-2" style="background: linear-gradient(90deg, #2563EB 0%, #F97316 100%);">
                        <span class="block h-[20px] w-[75px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#FFFFFF]">Next Step &rarr;</span>
                    </button>
                </form>
            </div>

            <!-- Modal Step Two Section -->
            <div id="leadStepTwo" class="hidden w-full p-6">
                <!-- Modal Step Two Tabs -->
                <div class="mb-4 flex items-center gap-3">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">1</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#2563EB]">Patient Details</span>
                    </div>
                    <div class="h-px flex-1 bg-[#22C55E]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">2</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#2563EB]">Problem & Notes</span>
                    </div>
                </div>

                <!-- Problem Notes Form -->
                <form>
                    <!-- Problem Category Field -->
                    <div class="h-[58.5px]">
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Problem Category *</label>
                        <input id="leadProblem" type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                    </div>

                    <!-- Notes Field -->
                    <div class="h-[86px]">
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Notes / Additional Info</label>
                        <textarea placeholder="Any prior surgeries, current medication, or additional details..." class="h-[58px] w-full resize-none rounded-[16px] border border-[#E8EEF8] px-4 py-3 text-[11px] outline-none"></textarea>
                    </div>

                    <!-- Lead Preview Section -->
                    <div class="rounded-[16px] border border-[#D8E3F5] bg-[#F8FBFF] p-4">
                        <h3 class="m-0 font-Jakarta text-[11px] font-semibold text-[#0F172B]">Lead Preview</h3>
                        <div class="mt-3 grid grid-cols-2 gap-y-2 font-Jakarta text-[10px] text-[#94A3B8]">
                            <span id="previewName">Name --</span>
                            <span id="previewPhone">Phone --</span>
                            <span id="previewArea">Area --</span>
                            <span id="previewProblem">Problem --</span>
                        </div>
                    </div>

                    <!-- Modal Step Two Buttons -->
                    <div class="mt-5 flex gap-3">
                        <button type="button" id="backLeadStep" class="h-[35.5px] w-[58px] rounded-[20px] border border-[#D8E3F5] bg-white font-Jakarta text-[13px] font-semibold text-[#2563EB]">Back</button>
                        <button type="button" id="submitLeadBtn" class="flex h-[35.5px] flex-1 items-center justify-center rounded-[20px] px-4 py-2" style="background: linear-gradient(90deg, #2563EB 0%, #F97316 100%);">
                            <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] text-white">Submit Lead &rarr;</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Modal Success Section -->
            <div id="leadSuccessStep" class="hidden h-[334.5px] w-full flex-col items-center justify-center px-6 pb-6 pt-12 text-center">
                <!-- Success Icon -->
                <div class="flex h-[80px] w-[64px] flex-col items-center pb-4">
                    <img src="{{ asset('img/leadssubmit.png') }}" alt="Lead Submitted" class="size-[64px] object-contain">
                </div>

                <!-- Success Message -->
                <h3 class="mt-1 h-[24px] w-[112px] text-center font-Jakarta text-[16px] font-bold leading-[24px] tracking-normal text-[#0F172B]">Lead Created!</h3>
                <p class="mt-1 h-[39px] w-[320px] text-center font-Jakarta text-[13px] font-normal leading-[19.5px] tracking-normal text-[#62748E]">
                    Lead ID LD-00786 has been submitted. CRM will verify and assign within 2 hours.
                </p>

                <!-- View Leads Button -->
                <button type="button" class="mt-5 h-[36px] w-[104px] rounded-[20px] px-4 py-2 font-Jakarta text-[11px] font-semibold text-white" style="background: linear-gradient(90deg, #2563EB 0%, #F97316 100%);">
                    View Leads
                </button>
            </div>
        </div>
    </div>

    <!-- Book Appointment Modal -->
    <div id="bookAppointmentModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
        <div class="h-[575px] w-[520px] max-h-[897.3px] max-w-[520px] rounded-[16px] bg-[#FFFFFF] shadow-[0_24px_60px_0_rgba(0,0,0,0.20)]">
            <!-- Book Appointment Header -->
            <div class="flex h-[65px] w-[520px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 h-[23px] w-[139px] font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Book Appointment</h2>
                <button type="button" id="closeBookAppointmentModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Book Appointment Form -->
            <form class="mx-auto h-[464px] w-[472px]">
                <!-- Patient Mobile Fields -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="mb-1 block h-[17px] w-[79px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Patient Name *</label>
                        <input type="text" placeholder="Ramesh Kumar" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                    </div>
                    <div>
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Mobile *</label>
                        <input type="text" placeholder="+91 98765 43210" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                    </div>
                </div>

                <!-- Problem Category Field -->
                <div class="mt-4">
                    <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Problem Category</label>
                    <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                </div>

                <!-- Area Address Field -->
                <div class="mt-4">
                    <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Area / Address</label>
                    <input type="text" placeholder="Banjara Hills, Hyderabad" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                </div>

                <!-- Date Time Fields -->
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <div>
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Preferred Date</label>
                        <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                    </div>
                    <div>
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Time Slot</label>
                        <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                    </div>
                </div>

                <!-- Assign Executive Field -->
                <div class="mt-4">
                    <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Assign Executive</label>
                    <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                </div>

                <!-- Confirmation Info Box -->
                <div class="mt-4 rounded-[16px] border border-orange-500/20 bg-orange-50 px-4 py-3 font-Jakarta text-[10px] font-normal leading-[15px] text-[#62748E]">
                    Confirmation SMS + WhatsApp will be sent to the patient automatically.
                </div>

                <!-- Book Appointment Button -->
                <button type="button" class="mt-4 h-[36px] w-full rounded-[20px] px-4 py-2 font-Jakarta text-[13px] font-semibold text-white" style="background: linear-gradient(90deg, #2563EB 0%, #F97316 100%);">
                    Book Appointment
                </button>
            </form>
        </div>
    </div>

    <!-- Dashboard Script Section -->
    <script>
        // Modal elements
        var openNewLeadModal = document.getElementById('openNewLeadModal');
        var closeNewLeadModal = document.getElementById('closeNewLeadModal');
        var newLeadModal = document.getElementById('newLeadModal');
        var openBookAppointmentModal = document.getElementById('openBookAppointmentModal');
        var closeBookAppointmentModal = document.getElementById('closeBookAppointmentModal');
        var bookAppointmentModal = document.getElementById('bookAppointmentModal');
        var leadStepOne = document.getElementById('leadStepOne');
        var leadStepTwo = document.getElementById('leadStepTwo');
        var leadSuccessStep = document.getElementById('leadSuccessStep');
        var nextLeadStep = document.getElementById('nextLeadStep');
        var backLeadStep = document.getElementById('backLeadStep');
        var submitLeadBtn = document.getElementById('submitLeadBtn');
        var leadName = document.getElementById('leadName');
        var leadPhone = document.getElementById('leadPhone');
        var leadArea = document.getElementById('leadArea');
        var leadProblem = document.getElementById('leadProblem');
        var previewName = document.getElementById('previewName');
        var previewPhone = document.getElementById('previewPhone');
        var previewArea = document.getElementById('previewArea');
        var previewProblem = document.getElementById('previewProblem');

        // Open modal
        openNewLeadModal.onclick = function (event) {
            event.preventDefault();
            leadStepOne.classList.remove('hidden');
            leadStepTwo.classList.add('hidden');
            leadSuccessStep.classList.add('hidden');
            leadSuccessStep.classList.remove('flex');
            newLeadModal.classList.remove('hidden');
            newLeadModal.classList.add('flex');
        };

        // Open book appointment modal
        openBookAppointmentModal.onclick = function (event) {
            event.preventDefault();
            bookAppointmentModal.classList.remove('hidden');
            bookAppointmentModal.classList.add('flex');
        };

        // Go to step two and show preview details
        nextLeadStep.onclick = function () {
            previewName.innerText = 'Name: ' + (leadName.value || '--');
            previewPhone.innerText = 'Phone: ' + (leadPhone.value || '--');
            previewArea.innerText = 'Area: ' + (leadArea.value || '--');
            previewProblem.innerText = 'Problem: ' + (leadProblem.value || '--');
            leadStepOne.classList.add('hidden');
            leadStepTwo.classList.remove('hidden');
        };

        // Back to step one
        backLeadStep.onclick = function () {
            leadStepTwo.classList.add('hidden');
            leadStepOne.classList.remove('hidden');
        };

        // Show success screen
        submitLeadBtn.onclick = function () {
            leadStepTwo.classList.add('hidden');
            leadSuccessStep.classList.remove('hidden');
            leadSuccessStep.classList.add('flex');
        };

        // Close modal
        closeNewLeadModal.onclick = function () {
            newLeadModal.classList.add('hidden');
            newLeadModal.classList.remove('flex');
            leadStepTwo.classList.add('hidden');
            leadSuccessStep.classList.add('hidden');
            leadSuccessStep.classList.remove('flex');
            leadStepOne.classList.remove('hidden');
        };

        // Close book appointment modal
        closeBookAppointmentModal.onclick = function () {
            bookAppointmentModal.classList.add('hidden');
            bookAppointmentModal.classList.remove('flex');
        };
    </script>

</body>

</html>

