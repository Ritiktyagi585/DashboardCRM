<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lead Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        Jakarta: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                },
            },
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 min-h-screen bg-[#F0F4FF] font-sans text-[#0F172B]">

    <!-- Premium Healthcare Ecosystem Page -->
    <div class="grid min-h-screen grid-cols-[240px_minmax(0,1fr)] overflow-hidden bg-[#F0F4FF]">

        <!-- Sidebar Section -->
        <aside class="flex h-[997px] w-[240px] flex-col gap-3.5 border-r border-[#2563EB]/10 bg-white/[0.96] px-[8px] pt-0 pb-[15px]">

            <!-- Logo Section -->
            <div class="-mx-[8px] flex h-[64px] w-[239px] items-center gap-[8px] border-b border-[#2563EB]/10 pr-[16px] pl-[16px]">
                <img src="<?= asset('img/NorHealLogo.png') ?>" alt="NorHeal Logo" class="h-[32px] w-auto object-contain">
                <div class="ml-auto grid size-[32px] place-items-center rounded-full bg-[#F1F5FF] text-[#2563EB]">
                    <svg viewBox="0 0 24 24" class="size-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </div>
            </div>

            <!-- Sidebar Menu Section -->
            <nav class="flex-1 overflow-auto pr-0.5">

                <!-- Sidebar Overview Menu -->
                <div class="mb-3 mt-1">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">Overview</p>
                    <a href="/" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <img src="<?= asset('img/Icon.png') ?>" alt="Dashboard Icon" class="size-[13px]">
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Dashboard</span>
                    </a>
                </div>

                <!-- Sidebar Operations Menu -->
                <div class="my-3">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">Operations</p>
                    <a href="/lead-management" class="relative flex h-[35.5px] w-[223px] items-center gap-[8px] rounded-[20px] pt-[8px] pr-[10px] pb-[8px] pl-[10px] text-[11px] font-semibold text-blue-600 after:absolute after:right-2.5 after:size-[5px] after:rounded-full after:bg-orange-500" style="background: linear-gradient(90deg, rgba(37,99,235,0.12) 0%, rgba(249,115,22,0.07) 100%);">
                        <svg class="size-[13px] text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        <span class="h-[20px] w-[117px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#2563EB]">Lead Management</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.63 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.2a2 2 0 0 1 2.11-.45c.83.3 1.7.51 2.6.63A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Calling Team</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Appointments</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l-6 3V6l6-3 6 3 6-3v15l-6 3-6-3z" />
                            <path d="M9 3v15M15 6v15" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Field Ops</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 7l-5 5M7 7h10v10H7z" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Measurements</span>
                    </a>
                </div>

                <!-- Sidebar Commerce Menu -->
                <div class="my-3">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">Commerce</p>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Order Management</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l1-5h16l1 5" />
                            <path d="M5 9v10h14V9" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Distributors</span>
                    </a>
                </div>

                <!-- Sidebar Finance Menu -->
                <div class="my-3">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">Finance</p>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <span class="w-[13px] text-center text-[#7d95b3]">$</span>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Commission Engine</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2" />
                            <path d="M17 12h4" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Wallet & Payout</span>
                    </a>
                </div>

                <!-- Sidebar Intelligence Menu -->
                <div class="my-3">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">Intelligence</p>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 3v18h18" />
                            <path d="M7 15l4-4 4 4 5-7" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Reports & Analytics</span>
                    </a>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Fraud Detection</span>
                    </a>
                </div>

                <!-- Sidebar System Menu -->
                <div class="my-3">
                    <p class="mb-1.5 ml-0.5 text-[8px] font-bold uppercase text-[#7890ad]">System</p>
                    <a href="#" class="flex h-[30px] items-center gap-[9px] rounded-[15px] px-2.5 text-[11px] font-semibold text-[#526986]">
                        <svg class="size-[13px] text-[#7d95b3]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 15.5A3.5 3.5 0 1 0 12 8a3.5 3.5 0 0 0 0 7.5z" />
                            <path d="M19.4 15a1.7 1.7 0 0 0 .34 1.88l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.7 1.7 0 0 0 15 19.4a1.7 1.7 0 0 0-1 .6 1.7 1.7 0 0 0-.4 1.1V21a2 2 0 1 1-4 0v-.09A1.7 1.7 0 0 0 8.6 19a1.7 1.7 0 0 0-1.88.34l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.7 1.7 0 0 0 4.6 15a1.7 1.7 0 0 0-.6-1 1.7 1.7 0 0 0-1.1-.4H3a2 2 0 1 1 0-4h.09A1.7 1.7 0 0 0 5 8.6a1.7 1.7 0 0 0-.34-1.88l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.7 1.7 0 0 0 9 4.6a1.7 1.7 0 0 0 1-.6 1.7 1.7 0 0 0 .4-1.1V3a2 2 0 1 1 4 0v.09A1.7 1.7 0 0 0 15.4 5a1.7 1.7 0 0 0 1.88-.34l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.7 1.7 0 0 0 19.4 9c0 .4.14.78.4 1.1.3.3.7.4 1.1.4H21a2 2 0 1 1 0 4h-.09a1.7 1.7 0 0 0-1.51.5z" />
                        </svg>
                        <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal">Admin Panel</span>
                    </a>
                </div>
            </nav>

            <!-- User Box Section -->
            <div class="-mx-[8px] flex h-[70px] w-[239px] items-center border-t border-[#2563EB]/10 pt-[8px] pr-[8px] pb-[12px] pl-[8px]">
                <div class="flex h-[49px] w-[223px] items-center gap-[10px] rounded-[20px] bg-[#2563EB]/[0.05] p-[8px]">
                    <img src="<?= asset('img/user.png') ?>" alt="Rahul Sharma" class="size-[33px] rounded-full object-cover">
                    <div class="w-[142px]">
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

        <!-- Lead Management Main Content -->
        <main class="min-w-0 overflow-y-auto overflow-x-hidden bg-[#F0F4FF] px-4 pb-6 pt-0">

            <!-- Topbar Section -->
            <header class="-mx-4 flex h-[64px] w-[1147px] items-center border-b border-[#2563EB]/10 bg-white/95 pr-[24px] pl-[24px]">
                <div class="flex h-[41px] w-[181.73px] flex-col">
                    <h1 class="m-0 h-[24px] w-[146px] font-Jakarta text-[16px] font-black leading-[24px] tracking-[0px] text-[#0F172A]">Lead Management</h1>
                    <p class="m-0 h-[17px] w-[182px] font-Jakarta text-[11px] font-medium leading-[16.5px] tracking-normal text-[#94A3B8]">Wednesday, 18 June 2025 - 9:41 AM</p>
                </div>

                <div class="ml-[483px] flex h-[37.5px] w-[370px] items-center gap-[12px]">
                    <div class="flex h-[37.5px] w-[274px] items-center gap-[8px] rounded-[20px] border border-[#E2E8F0] bg-white pt-[8px] pr-[12px] pb-[8px] pl-[12px]">
                        <svg viewBox="0 0 24 24" class="size-3 text-[#94A3B8]" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <input type="search" placeholder="Search anything..." class="h-[19.5px] w-[192px] bg-transparent font-Jakarta text-[13px] font-normal leading-[19.5px] text-[#0F172A]/50 outline-none placeholder:text-[#0F172A]/50">
                        <img src="<?= asset('img/Text.png') ?>" alt="Shortcut" class="h-[19px] w-[27px] object-contain">
                    </div>

                    <button class="grid size-[36px] place-items-center rounded-[20px] bg-[#2563EB]/[0.07] text-[#2563EB]" aria-label="Call">
                        <svg class="size-[15px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.77.63 2.6a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.48-1.2a2 2 0 0 1 2.11-.45c.83.3 1.7.51 2.6.63A2 2 0 0 1 22 16.92z" />
                        </svg>
                    </button>
                    <button class="grid size-[36px] place-items-center rounded-[20px] bg-[#2563EB]/[0.07]" aria-label="Notifications">
                        <span class="relative grid size-[30px] place-items-center">
                            <svg viewBox="0 0 24 24" class="size-[15px]" fill="none" stroke="#2563EB" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 7h18s-3 0-3-7" />
                                <path d="M10 19a2 2 0 0 0 4 0" />
                            </svg>
                            <span class="absolute right-[7px] top-[6px] size-[5px] rounded-full bg-orange-500"></span>
                        </span>
                    </button>
                    <img src="<?= asset('img/user.png') ?>" alt="Profile" class="size-[36px] rounded-full object-cover">
                </div>
            </header>

            <!-- Lead Management Content Container -->
            <div class="-mx-4 flex h-[933px] w-[calc(100%+2rem)] flex-col gap-[20px] p-[24px]">
                <div class="flex h-[666.5px] w-full flex-col gap-[16px]">

            <!-- KPI Cards Section -->
            <section class="grid h-[101px] w-full grid-cols-4 gap-[12px]">
                <div class="h-[101px] rounded-[16px] border border-white/[0.92] bg-white/[0.88] p-[16px] shadow-[0_1px_4px_rgba(0,0,0,0.06)]">
                    <div class="h-[36px] w-full font-Jakarta text-[28px] font-bold leading-[36px] text-[#0F172B]">1840</div>
                    <div class="h-[19px] w-[231.75px] pt-[2px]">
                        <p class="m-0 h-[17px] w-[59px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Total Leads</p>
                    </div>
                    <div class="h-[12px] w-[231.75px] pt-[8px]">
                        <div class="h-[4px] w-[231.75px] rounded-full bg-[#F1F5F9]">
                            <div class="h-[4px] w-[173.81px] rounded-full bg-[#2563EB]"></div>
                        </div>
                    </div>
                </div>
                <div class="h-[101px] rounded-[16px] border border-white/[0.92] bg-white/[0.88] p-[16px] shadow-[0_1px_4px_rgba(0,0,0,0.06)]">
                    <div class="h-[36px] w-full font-Jakarta text-[28px] font-bold leading-[36px] text-[#0F172B]">42</div>
                    <div class="h-[19px] w-[231.75px] pt-[2px]">
                        <p class="m-0 h-[17px] w-[58px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">New Today</p>
                    </div>
                    <div class="h-[12px] w-[231.75px] pt-[8px]">
                        <div class="h-[4px] w-[231.75px] rounded-full bg-[#F1F5F9]">
                            <div class="h-[4px] w-[173.81px] rounded-full bg-[#F97316]"></div>
                        </div>
                    </div>
                </div>
                <div class="h-[101px] rounded-[16px] border border-white/[0.92] bg-white/[0.88] p-[16px] shadow-[0_1px_4px_rgba(0,0,0,0.06)]">
                    <div class="h-[36px] w-full font-Jakarta text-[28px] font-bold leading-[36px] text-[#0F172B]">128</div>
                    <div class="h-[19px] w-[231.75px] pt-[2px]">
                        <p class="m-0 h-[17px] font-Jakarta text-[11px] font-normal leading-[16.5px] text-[#62748E]">Hot Leads</p>
                    </div>
                    <div class="h-[12px] w-[231.75px] pt-[8px]">
                        <div class="h-[4px] w-[231.75px] rounded-full bg-[#F1F5F9]">
                            <div class="h-[4px] w-[173.81px] rounded-full bg-[#EF4444]"></div>
                        </div>
                    </div>
                </div>
                <div class="h-[101px] rounded-[16px] border border-white/[0.92] bg-white/[0.88] p-[16px] shadow-[0_1px_4px_rgba(0,0,0,0.06)]">
                    <div class="h-[36px] w-full font-Jakarta text-[28px] font-bold leading-[36px] text-[#0F172B]">16.8%</div>
                    <div class="h-[19px] w-[231.75px] pt-[2px]">
                        <p class="m-0 h-[17px] font-Jakarta text-[11px] font-normal leading-[16.5px] text-[#62748E]">Conversion</p>
                    </div>
                    <div class="h-[12px] w-[231.75px] pt-[8px]">
                        <div class="h-[4px] w-[231.75px] rounded-full bg-[#F1F5F9]">
                            <div class="h-[4px] w-[173.81px] rounded-full bg-[#22C55E]"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Lead Tools Section -->
            <section class="flex h-[37.5px] w-full items-center gap-[12px]">
                <div class="flex h-[37.5px] w-[779px] items-center gap-[8px] rounded-[20px] border border-[#E2E8F0] bg-white pt-[8px] pr-[12px] pb-[8px] pl-[12px]">
                    <svg viewBox="0 0 24 24" class="size-3 text-[#94A3B8]" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="7" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                    <input type="search" placeholder="Search leads by name, phone, area..." class="h-[16px] w-[731.2px] bg-transparent font-Jakarta text-[13px] font-normal leading-none tracking-normal text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                </div>
                <button class="flex h-[33px] w-[100px] items-center justify-center gap-[6px] rounded-[20px] border-[1.5px] border-[#2563EB]/20 bg-white pt-[6px] pr-[12px] pb-[6px] pl-[12px] font-Jakarta text-[12px] font-semibold leading-[18px] text-[#0F172B]">
                    <span class="h-[18px] w-[54px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#0F172A]">All Status</span>
                    <svg class="size-[13px]" viewBox="0 0 13 13" fill="none">
                        <path d="M3.25 5L6.5 8.25L9.75 5" stroke="#0F172A" stroke-width="1.08" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="flex h-[33px] w-[75px] items-center justify-center gap-[6px] rounded-[20px] border-[1.5px] border-[#2563EB]/20 bg-white pt-[6px] pr-[12px] pb-[6px] pl-[12px] font-Jakarta text-[12px] font-semibold leading-[18px] text-[#2563EB]">
                    <svg class="size-[13px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 4h18l-7 8v6l-4 2v-8L3 4z" />
                    </svg>
                    <span class="h-[18px] w-[30px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#2563EB]">Filter</span>
                </button>
                <button class="flex h-[30px] w-[97px] shrink-0 items-center justify-center gap-[6px] rounded-[20px] pt-[6px] pr-[12px] pb-[6px] pl-[12px] font-Jakarta text-[12px] font-semibold leading-[18px] text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                    <span class="text-[14px]">+</span>
                    <span class="whitespace-nowrap">Add Lead</span>
                </button>
            </section>

            <!-- Lead Table Section -->
            <section class="h-[532px] overflow-hidden rounded-[16px] border-t border-[#E2E8F0] bg-[#FFFFFF]">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="h-[52px] border-b border-[#E2E8F0] bg-[#F8FAFC] text-left font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-normal text-[#62748E]">
                            <th class="h-[41.5px] w-[135.23px] border-b border-[#F1F5F9] bg-[#F8FAFC] pl-[49.68px]">Lead ID</th>
                            <th class="h-[41.5px] w-[137.95px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[47px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Patient</span>
                            </th>
                            <th class="h-[41.5px] w-[132.26px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[58px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Problem</span>
                            </th>
                            <th class="h-[41.5px] w-[110.19px] border-b border-[#F1F5F9] bg-[#F8FAFC]">Area</th>
                            <th class="w-[110px]">
                                <span class="block h-[17px] w-[44px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Status</span>
                            </th>
                            <th class="h-[41.5px] w-[144.97px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[40px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Agent</span>
                            </th>
                            <th class="h-[41.5px] w-[130.16px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[42px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Score</span>
                            </th>
                            <th class="h-[41.5px] w-[71.08px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[30px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Date</span>
                            </th>
                            <th class="h-[41.5px] w-[101.6px] border-b border-[#F1F5F9] bg-[#F8FAFC]">
                                <span class="block h-[17px] w-[54px] font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-[0.55px] text-[#62748E]">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="font-Jakarta text-[12px] leading-[18px] text-[#314158]">
                        <?php
                        $leads = [
                            [
                                'id' => 'LD-290',
                                'name' => 'Ramesh Kumar',
                                'phone' => '+91 98765 43210',
                                'problem' => 'Knee Pain',
                                'area' => 'Banjara Hills',
                                'status' => 'Booked',
                                'agent' => 'Priya S.',
                                'score' => 92,
                                'date' => 'Jun 18',
                                'color' => '#F97316',
                                'bar' => 72,
                            ],
                            [
                                'id' => 'LD-289',
                                'name' => 'Sunita Sharma',
                                'phone' => '+91 98765 43209',
                                'problem' => 'Back Pain',
                                'area' => 'Jubilee Hills',
                                'status' => 'Follow-Up',
                                'agent' => 'Arjun K.',
                                'score' => 78,
                                'date' => 'Jun 18',
                                'color' => '#F59E0B',
                                'bar' => 50,
                            ],
                            [
                                'id' => 'LD-288',
                                'name' => 'Priya Nair',
                                'phone' => '+91 98765 43208',
                                'problem' => 'Shoulder',
                                'area' => 'Hitech City',
                                'status' => 'Measured',
                                'agent' => 'Sneha R.',
                                'score' => 95,
                                'date' => 'Jun 17',
                                'color' => '#22C55E',
                                'bar' => 82,
                            ],
                            [
                                'id' => 'LD-287',
                                'name' => 'Anil Mehta',
                                'phone' => '+91 98765 43207',
                                'problem' => 'Cervical',
                                'area' => 'Kondapur',
                                'status' => 'Called',
                                'agent' => 'Rohit P.',
                                'score' => 65,
                                'date' => 'Jun 17',
                                'color' => '#A855F7',
                                'bar' => 42,
                            ],
                            [
                                'id' => 'LD-286',
                                'name' => 'Geeta Rao',
                                'phone' => '+91 54321 09876',
                                'problem' => 'Arthritis',
                                'area' => 'Gachibowli',
                                'status' => 'Delivered',
                                'agent' => 'Priya S.',
                                'score' => 99,
                                'date' => 'Jun 16',
                                'color' => '#22C55E',
                                'bar' => 88,
                            ],
                            [
                                'id' => 'LD-285',
                                'name' => 'Vikram Singh',
                                'phone' => '+91 43210 98765',
                                'problem' => 'Knee Pain',
                                'area' => 'Madhapur',
                                'status' => 'New',
                                'agent' => 'Unassigned',
                                'score' => 55,
                                'date' => 'Jun 16',
                                'color' => '#2563EB',
                                'bar' => 35,
                            ],
                            [
                                'id' => 'LD-284',
                                'name' => 'Anita Das',
                                'phone' => '+91 32109 87654',
                                'problem' => 'Post Surgery',
                                'area' => 'Kukatpally',
                                'status' => 'Confirmed',
                                'agent' => 'Arjun K.',
                                'score' => 88,
                                'date' => 'Jun 15',
                                'color' => '#14B8A6',
                                'bar' => 70,
                            ],
                            [
                                'id' => 'LD-283',
                                'name' => 'Suresh Reddy',
                                'phone' => '+91 21098 76543',
                                'problem' => 'Back Pain',
                                'area' => 'Miyapur',
                                'status' => 'Assigned',
                                'agent' => 'Sneha R.',
                                'score' => 72,
                                'date' => 'Jun 15',
                                'color' => '#6366F1',
                                'bar' => 46,
                            ],
                        ];
                        ?>
                        <?php foreach ($leads as $lead) : ?>
                            <tr class="border-b border-[#F1F5F9] last:border-b-0">
                                <td class="h-[61px] w-[135.23px] border-b border-[#F8FAFC] pl-[49.68px] font-semibold text-[#2563EB]"><?= $lead['id'] ?></td>
                                <td class="h-[61px] w-[137.95px] border-b border-[#F8FAFC]">
                                    <div class="flex h-[37px] w-[105.95px] flex-col">
                                        <p class="m-0 h-[20px] w-[93px] font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#1D293D]"><?= $lead['name'] ?></p>
                                        <p class="m-0 text-[10px] leading-[15px] text-[#94A3B8]"><?= $lead['phone'] ?></p>
                                    </div>
                                </td>
                                <td><span class="rounded-full bg-[#2563EB]/10 px-[8px] py-[3px] text-[10px] font-semibold text-[#2563EB]"><?= $lead['problem'] ?></span></td>
                                <td class="text-[#62748E]"><?= $lead['area'] ?></td>
                                <td><span class="rounded-full px-[8px] py-[3px] text-[10px] font-semibold" style="background: <?= $lead['color'] ?>1A; color: <?= $lead['color'] ?>;"><?= $lead['status'] ?></span></td>
                                <td>
                                    <div class="flex items-center gap-[8px]">
                                        <span class="grid size-[24px] place-items-center rounded-full text-[10px] font-bold text-white" style="background: linear-gradient(160deg, #2563EB 0%, #F97316 100%);"><?= substr($lead['agent'], 0, 1) ?></span>
                                        <span class="text-[#62748E]"><?= $lead['agent'] ?></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-[8px]">
                                        <div class="h-[4px] w-[72px] rounded-full bg-[#E2E8F0]">
                                            <div class="h-[4px] rounded-full <?= $lead['score'] >= 90 ? 'bg-[#22C55E]' : ($lead['score'] >= 70 ? 'bg-[#F59E0B]' : 'bg-[#FB2C36]') ?>" style="width: <?= $lead['bar'] ?>%;"></div>
                                        </div>
                                        <span class="text-[11px] font-semibold text-[#314158]"><?= $lead['score'] ?></span>
                                    </div>
                                </td>
                                <td class="text-[#62748E]"><?= $lead['date'] ?></td>
                                <td>
                                    <div class="flex items-center gap-[14px] text-[#2563EB]">
                                        <svg class="size-[13px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        <span class="text-[#94A3B8]">...</span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

            <!-- Pagination Section -->
            <footer class="flex h-[32px] items-center justify-between">
                <p class="m-0 font-Jakarta text-[11px] font-normal leading-[16.5px] text-[#62748E]">Showing 1-8 of 1,840 leads</p>
                <div class="flex items-center gap-[8px]">
                    <span class="grid size-[28px] place-items-center rounded-full text-[11px] font-semibold text-white" style="background: linear-gradient(160deg, #2563EB 0%, #F97316 100%);">1</span>
                    <span class="grid size-[28px] place-items-center rounded-full bg-white text-[11px] font-semibold text-[#62748E]">2</span>
                    <span class="grid size-[28px] place-items-center rounded-full bg-white text-[11px] font-semibold text-[#62748E]">3</span>
                    <span class="grid size-[28px] place-items-center rounded-full bg-white text-[11px] font-semibold text-[#62748E]">...</span>
                    <span class="grid size-[28px] place-items-center rounded-full bg-white text-[11px] font-semibold text-[#62748E]">230</span>
                </div>
            </footer>
            </div>
            </div>
        </main>
    </div>
</body>

</html>
