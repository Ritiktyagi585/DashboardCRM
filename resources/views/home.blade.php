@extends('layouts.app')
@section('title', 'NorHeal Dashboard')
@section('pageTitle', 'Executive Dashboard')
@section('content')
            <!-- Dashboard Content Section -->
            <section class="grid grid-cols-12 gap-4">

                <!-- KPI Cards Section -->
                <div
                    class="col-span-12 grid h-[114px] grid-cols-5 gap-4 overflow-hidden max-[1100px]:h-auto max-[1100px]:grid-cols-2 max-[720px]:grid-cols-1">

                    <!-- KPI Card 1 -->
                    <article
                        class="relative h-full overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-4 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:h-[114px]">
                        <h2
                            class="h-[17px] w-[38px] whitespace-nowrap font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#94A3B8]">
                            Total Leads
                        </h2>
                        <div class="mt-0 flex h-[47px] w-[173px] items-center justify-between">
                            <h3
                                class="h-[30px] w-[72.65px] pt-[4px] font-Jakarta text-[26px] font-black leading-[26px] text-[#0F172A]">
                                1,840
                            </h3>
                            <img src="/img/Sparkline.png" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] -translate-y-[12px] object-contain">
                        </div>
                        <div class="absolute bottom-[8px] left-4 flex h-[33px] w-[173px] items-start gap-[6px] pt-[12px]">
                            <span
                                class="flex h-[21px] w-[71px] items-center justify-center gap-[2px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[8px] pb-[2px] pl-[8px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#22C55E]">+18.4%</span>
                            <small class="block h-[17px] w-[68px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 2 -->
                    <article
                        class="relative h-full overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-4 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[38px] h-[17px] font-Jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Appointments
                        </h2>
                        <div class="mt-0 flex h-[47px] w-[173px] items-center justify-between">
                            <h3
                                class="w-[52px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                480</h3>
                            <img src="/img/orngspark.png" alt="Leads Sparkline"
                                class="h-[38px] w-[83px] -translate-y-[12px] object-contain">
                        </div>
                        <div class="absolute bottom-[8px] left-4 flex h-[33px] w-[173px] items-start gap-[6px] pt-[12px]">
                            <span
                                class="flex h-[21px] w-[71px] items-center justify-center gap-[2px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[8px] pb-[2px] pl-[8px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#22C55E]">+12.2%</span>
                            <small class="block h-[17px] w-[68px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 3 -->
                    <article
                        class="relative h-full overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-4 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[38px] h-[17px] font-Jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Orders
                        </h2>
                        <div class="mt-0 flex h-[47px] w-[173px] items-center justify-between">
                            <h3
                                class="w-[45px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                310</h3>
                            <img src="/img/greenspark.png" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] -translate-y-[12px] object-contain">
                        </div>
                        <div class="absolute bottom-[8px] left-4 flex h-[33px] w-[173px] items-start gap-[6px] pt-[12px]">
                            <span
                                class="flex h-[21px] w-[71px] items-center justify-center gap-[2px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[8px] pb-[2px] pl-[8px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#22C55E]">+24.8%</span>
                            <small class="block h-[17px] w-[68px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 4 -->
                    <article
                        class="relative h-full overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-4 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[46px] h-[17px] font-Jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Revenue
                        </h2>
                        <div class="mt-0 flex h-[47px] w-[173px] items-center justify-between">
                            <h3
                                class="w-[86px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                ₹13.6L</h3>
                            <img src="/img/purplespark.png" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] -translate-y-[12px] object-contain">
                        </div>
                        <div class="absolute bottom-[8px] left-4 flex h-[33px] w-[173px] items-start gap-[6px] pt-[12px]">
                            <span
                                class="flex h-[21px] w-[71px] items-center justify-center gap-[2px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[8px] pb-[2px] pl-[8px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#22C55E]">+31.8%</span>
                            <small class="block h-[17px] w-[68px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">vs last month</small>
                        </div>
                    </article>

                    <!-- KPI Card 5 -->
                    <article
                        class="relative h-full overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-4 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:h-[114px]">
                        <h2
                            class="w-[61px] h-[17px] font-Jakarta font-semibold text-[11px] leading-[16.5px] text-[#94A3B8]">
                            Conversion
                        </h2>
                        <div class="mt-0 flex h-[47px] w-[173px] items-center justify-between">
                            <h3
                                class="w-[82px] h-[26px] font-Jakarta font-black text-[26px] leading-[26px] text-[#0F172A]">
                                16.8%</h3>
                            <img src="/img/darkspark.png" alt="Leads Sparkline"
                                class="h-[36px] w-[83px] -translate-y-[12px] object-contain">
                        </div>
                        <div class="absolute bottom-[8px] left-4 flex h-[33px] w-[173px] items-start gap-[6px] pt-[12px]">
                            <span
                                class="flex h-[21px] w-[71px] items-center justify-center gap-[2px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[8px] pb-[2px] pl-[8px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#22C55E]">+2.1pp</span>
                            <small class="block h-[17px] w-[68px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">vs last month</small>
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
                            <p class="m-0 mt-2 h-[17px] w-[167px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">6-month performance overview</p>
                        </div>
                        <button
                            class="flex h-[33px] w-[126px] items-center justify-center gap-[6px] rounded-[20px] border-[1.5px] border-[#2563EB]/20 bg-[#FFFFFF] pt-[6px] pr-[12px] pb-[6px] pl-[12px] text-[#101828]">
                            <span class="h-[18px] w-[80px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#0F172A]">Last 6 Months</span>
                            <svg viewBox="0 0 24 24" class="size-[13px]" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                    </div>

                    <!-- Revenue Trend Legend -->
                    <div class="flex h-[17px] w-full gap-[20px] text-[12px] font-medium text-[#526986]">
                        <span
                            class="inline-flex h-[17px] items-center gap-[6px] before:inline-block before:h-[2px] before:w-[28px] before:bg-blue-600"><span class="block h-[17px] w-[32px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Leads</span></span>
                        <span
                            class="inline-flex h-[17px] items-center gap-[6px] before:inline-block before:h-[2px] before:w-[28px] before:bg-[#F97316]"><span class="block h-[17px] w-[38px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Orders</span></span>
                        <span
                            class="inline-flex h-[17px] w-[104px] items-center gap-[6px] before:inline-block before:h-[2px] before:w-[28px] before:bg-purple-500"><span class="block h-[17px] w-[70px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Revenue</span></span>
                    </div>

                    <!-- Revenue Trend Chart -->
                    <canvas id="revenueLeadChart" class="mt-1 h-[182px] w-full"></canvas>
                </section>

                <!-- Lead Funnel Section -->
                <section
                    class="col-span-4 h-[297.5px] w-[347.66px] overflow-hidden rounded-2xl border-t border-white/[0.92] bg-white/[0.88] p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12 max-[720px]:h-auto">
                    <!-- Lead Funnel Title -->
                    <h2
                        class="w-[82px] h-[21px] font-jakarta font-bold text-[14px] leading-[21px] tracking-[0px] text-[#0F172B]">
                        Lead Funnel
                    </h2>
                    <p
                        class="m-0 mt-2 h-[17px] w-[91px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">
                        Jun 2025 pipeline</p>

                    <!-- Lead Funnel Bars -->
                    <div class="-ml-[22px] h-[214px] w-[313.66px] pt-[16px] space-y-1.5">
                        <div class="flex h-[28px] w-[313.66px] items-center gap-[12px]">
                            <div class="flex w-[112px] justify-end">
                                <span
                                    class="h-[17px] w-[59px] text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Total
                                    Leads</span>
                            </div>
                            <div class="h-[28px] flex-1 overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-full items-center rounded-full bg-[#2563EB] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">1,840</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Assigned</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-[77%] min-w-[58px] items-center rounded-full bg-[#6366F1] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">1,420</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                77%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Contacted</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-[58%] min-w-[58px] items-center rounded-full bg-[#A855F7] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">1,050</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                74%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Confirmed</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-[33%] min-w-[58px] items-center rounded-full bg-[#F97316] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">620</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                59%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Appointment</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-[26%] min-w-[58px] items-center rounded-full bg-[#14B8A6] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">480</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                77%
                            </p>
                        </div>

                        <div class="grid grid-cols-[112px_minmax(0,1fr)_32px] items-center gap-2.5">
                            <span
                                class="h-[17px] w-[59px] justify-self-end text-right text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Orders</span>
                            <div class="h-[25px] overflow-hidden rounded-full bg-[#F1F5F9]"><span
                                    class="flex h-full w-[22%] min-w-[58px] items-center rounded-full bg-[#22C55E] px-4 font-Jakarta text-[11px] font-bold leading-[16.5px] text-white">310</span>
                            </div>
                            <p
                                class="w-[21px] h-[15px] font-jakarta font-normal text-[10px] leading-[15px] text-[#90A1B9]">
                                65%
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Performance Cards Row Section -->
                <div class="col-span-12 grid h-[360px] w-full grid-cols-12 gap-4 pt-[20px]">
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
                        class="col-span-4 -ml-[6px] h-[340px] w-[355.66px] rounded-[16px] border border-[rgba(255,255,255,0.92)] bg-[rgba(255,255,255,0.88)] p-[20px] shadow-[0px_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12">
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
                        <div class="grid grid-cols-[28px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid h-[28px] w-[28px] place-items-center rounded-[20px] bg-[#22C55E]/[0.12] text-[#22C55E]">
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
                        <div class="grid grid-cols-[28px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid h-[28px] w-[28px] place-items-center rounded-[20px] bg-[#2563EB]/[0.12] text-[#2563EB]">
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
                        <div class="grid grid-cols-[28px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid h-[28px] w-[28px] place-items-center rounded-[20px] bg-[#A855F7]/[0.12] text-[#A855F7]">
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
                        <div class="grid grid-cols-[28px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid h-[28px] w-[28px] place-items-center rounded-[20px] bg-[#F97316]/[0.12] text-[#F97316]">
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
                        <div class="grid grid-cols-[28px_minmax(0,1fr)] items-center gap-2.5">
                            <span class="grid h-[28px] w-[28px] place-items-center rounded-[20px] bg-[#F59E0B]/[0.12] text-[#F59E0B]">
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
                </div>

                <!-- Quick Actions Section -->
                <section
                    class="col-span-8 h-[321px] w-[711.33px] rounded-[16px] border border-white/90 bg-white/90 p-5 shadow-[0_1px_4px_rgba(0,0,0,0.06)] max-[1100px]:col-span-12 max-[1100px]:w-full">
                    <!-- Quick Actions Title -->
                    <h2 class="m-0 h-[21px] w-[96px] text-[14px] font-bold leading-[21px] tracking-normal text-[#0F172B]">Quick Actions</h2>
                    <p class="m-0 mt-0 h-[17px] w-[175px] text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Click any action to launch the flow</p>

                    <!-- Quick Actions Buttons -->
                    <div class="mt-[18px] flex h-[113.5px] w-[669.33px] gap-[9px] max-[720px]:w-full max-[720px]:flex-wrap">
                        <a href="#" id="openNewLeadModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-[#2563EB]/15 bg-[#2563EB]/[0.08] px-4 py-3 text-center text-blue-600">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#2563EB]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'plus'])</span>
                            <span class="block h-[14px] w-[53px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#2563EB]">New Lead</span>
                        </a>

                        <a href="#" id="openBookAppointmentModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-orange-500/15 bg-orange-500/[0.08] px-4 py-3 text-center text-orange-500">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#F97316]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'calendar'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#F97316]">Book Appointment</span>
                        </a>

                        <a href="#" id="openCreateOrderModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-[#22C55E]/15 bg-[#22C55E]/[0.08] px-4 py-3 text-center text-emerald-500">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#22C55E]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'box'])</span>
                            <span class="block h-[14px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#22C55E]">Create Order</span>
                        </a>

                        <a href="#" id="openAssignExecutiveModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-[#A855F714]/15 bg-[#A855F714]/[0.08]  px-4 py-3 text-center text-purple-500">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#A855F7]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'users'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#A855F7]">Assign Executive</span>
                        </a>

                        <a href="#" id="openExportReportModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-[#14B8A614]/15 bg-[#14B8A614]/[0.08] px-4 py-3 text-center text-teal-500">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#14B8A6]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'phone'])</span>
                            <span class="block h-[28px] w-[71px] text-center font-Jakarta text-[11px] font-semibold leading-[13.75px] tracking-normal text-[#14B8A6]">Export<br>Report</span>
                        </a>

                        <a href="#" id="openSyncCrmModal" class="flex h-[97.5px] w-[104.09px] flex-col items-center justify-start gap-2 rounded-[20px] border border-[#F59E0B14]/15 bg-[#F59E0B14]/[0.08] px-4 py-3 text-center text-amber-500">
                            <span class="grid h-[36px] w-[36px] place-items-center rounded-[20px] bg-[#F59E0B]/[0.12] [&_svg]:size-[14px]">@include('partials.inline-icon', ['name' => 'refresh'])</span>
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
                    <div class="flex h-[24px] w-[114px] items-center gap-[6px]">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">1</span>
                        <span class="block h-[18px] w-[84px] whitespace-nowrap font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#2563EB]">Patient Details</span>
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
                        <input id="leadName" type="text" placeholder="e.g. Ramesh Kumar" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>

                    <!-- Mobile Number Field -->
                    <div class="mt-[12px] h-[70.5px]">
                        <label class="mb-[4px] block h-[17px] w-[89px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Mobile Number *</label>
                        <input id="leadPhone" type="text" placeholder="+91 98765 43210" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>

                    <!-- Area Locality Field -->
                    <div class="h-[70.5px]">
                        <label class="mb-1 block h-[17px] w-[84px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Area / Locality *</label>
                        <input id="leadArea" type="text" placeholder="e.g. Banjara Hills, Hyderabad" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>

                    <!-- Age Gender Fields -->
                    <div class="grid h-[70px] grid-cols-2 gap-3">
                        <div>
                            <label class="mb-1 block h-[17px] w-[22px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Age</label>
                            <input type="text" placeholder="e.g. 58" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                        </div>
                        <div>
                            <label class="mb-1 block h-[17px] w-[41px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Gender</label>
                            <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 text-[11px] outline-none">
                        </div>
                    </div>

                    <!-- Next Step Button -->
                    <button type="button" id="nextLeadStep" class="h-[35.5px] rounded-[20px] px-4 py-2 flex items-center justify-center gap-1.5 text-white font-medium text-sm"
  style="width: 672px; background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);"
>
  Next Step →
  </button>
                </form>
            </div>

            <!-- Modal Step Two Section -->
            <div id="leadStepTwo" class="hidden w-full p-6">
                <!-- Modal Step Two Tabs -->
                <div class="mb-4 flex items-center gap-3">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">1</span>
                        <span class="block h-[18px] w-[84px] whitespace-nowrap font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#2563EB]">Patient Details</span>
                    </div>
                    <div class="h-[2px] w-[414px] rounded-full bg-[#22C55E]"></div>
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
                    <div class="h-[92px] w-[672px] pt-[12px]">
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Notes / Additional Info</label>
                        <textarea placeholder="Any prior surgeries, current medication, or additional details..." class="h-[58px] w-full resize-none rounded-[16px] border border-[#E8EEF8] px-[13px] py-3 font-Jakarta text-[13px] font-normal leading-[19.5px] text-[#90A1B9] outline-none placeholder:text-[#90A1B9]"></textarea>
                    </div>

                    <!-- Lead Preview Section -->
                    <div class="h-[112px] w-[672px] pt-[12px]">
                        <div class="h-[100px] w-[672px] rounded-[20px] border border-[#2563EB]/[0.15] bg-[#2563EB]/[0.05] p-[12px]">
                            <h3 class="m-0 h-[18px] w-[78px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#314158]">Lead Preview</h3>
                            <div class="mt-3 grid grid-cols-2 gap-y-2 font-Jakarta text-[10px] text-[#94A3B8]">
                                <span id="previewName">Name --</span>
                                <span id="previewPhone">Phone --</span>
                                <span id="previewArea">Area --</span>
                                <span id="previewProblem">Problem --</span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Step Two Buttons -->
                    <div class="mt-5 flex gap-3">
                        <button type="button" id="backLeadStep" class="h-[35.5px] w-[58px] rounded-[20px] border border-[#D8E3F5] bg-white font-Jakarta text-[13px] font-semibold text-[#2563EB]">Back</button>
                        <button type="button" id="submitLeadBtn" class="flex h-[35.5px] flex-1 items-center justify-center rounded-[20px] px-4 py-2" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                            <span class="font-Jakarta text-[13px] font-semibold leading-[19.5px] text-white">Submit Lead &rarr;</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Modal Success Section -->
            <div id="leadSuccessStep" class="hidden h-[334.5px] w-full flex-col items-center justify-center px-6 pb-6 pt-12 text-center">
                <!-- Success Icon -->
                <div class="flex h-[80px] w-[64px] flex-col items-center pb-4">
                    <img src="/img/leadssubmit.png" alt="Lead Submitted" class="size-[64px] object-contain">
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
        <div id="bookAppointmentBox" class="h-[575px] w-[520px] max-h-[897.3px] max-w-[520px] rounded-[16px] bg-[#FFFFFF] shadow-[0_24px_60px_0_rgba(0,0,0,0.20)]">
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
            <form id="bookAppointmentForm" class="mx-auto mt-[24px] h-[464px] w-[472px]">
                <!-- Patient Mobile Fields -->
                <div class="grid h-[58px] w-[472px] grid-cols-2 gap-3">
                    <div>
                        <label class="mb-1 block h-[17px] w-[79px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Patient Name *</label>
                        <input type="text" placeholder="Ramesh Kumar" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:block placeholder:h-[16px] placeholder:w-[204px] placeholder:text-[#90A1B9]">
                    </div>
                    <div>
                        <label class="mb-1 block h-[17px] w-[44px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Mobile *</label>
                        <input type="text" placeholder="+91 98765 43210" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:block placeholder:h-[16px] placeholder:w-[204px] placeholder:text-[#90A1B9]">
                    </div>
                </div>

                <!-- Problem Category Field -->
                <div class="mt-4">
                    <label class="mb-1 block h-[17px] w-[98px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Problem Category</label>
                    <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                </div>

                <!-- Area Address Field -->
                <div class="mt-4">
                    <label class="mb-1 block h-[17px] w-[78px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Area / Address</label>
                    <input type="text" placeholder="Banjara Hills, Hyderabad" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:block placeholder:h-[16px] placeholder:w-[446px] placeholder:text-[#90A1B9]">
                </div>

                <!-- Date Time Fields -->
                <div class="mt-4 grid h-[58px] w-[472px] grid-cols-2 gap-3">
                    <div class="h-[58px] w-[230px]">
                        <label class="mb-1 block font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Preferred Date</label>
                        <input type="text" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[11px] outline-none">
                    </div>
                    <div class="h-[58px] w-[230px]">
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
                <div class="mt-4 flex h-[43px] w-[472px] items-center rounded-[16px] border border-orange-500/20 bg-orange-50 px-4">
                    <span class="block h-[17px] w-[366px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Confirmation SMS + WhatsApp will be sent to the patient automatically.</span>
                </div>

                <!-- Book Appointment Button -->
                <button type="button" id="bookAppointmentSubmit" class="mt-4 flex h-[35.5px] w-[472px] items-center justify-center rounded-[20px] px-4 py-2 font-Jakarta text-[13px] font-semibold text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                    <span class="block h-[20px] w-[120px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#FFFFFF]">Book Appointment</span>
                </button>
            </form>

            <!-- Book Appointment Success Section -->
            <div id="bookAppointmentSuccess" class="hidden h-[334.5px] w-[520px] flex-col items-center justify-center p-6 text-center">
                <img src="/img/leadssubmit.png" alt="Appointment Booked" class="size-[64px] object-contain">
                <h3 class="mt-4 h-[24px] w-[175px] text-center font-Jakarta text-[16px] font-bold leading-[24px] tracking-normal text-[#0F172B]">Appointment Booked!</h3>
                <p class="mt-1 h-[39px] w-[320px] text-center font-Jakarta text-[13px] font-normal leading-[19.5px] tracking-normal text-[#62748E]">APT-00248 created. Executive will be notified automatically.</p>
                <button type="button" class="mt-5 flex h-[36px] w-[66px] items-center justify-center rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px] font-Jakarta text-[11px] font-semibold text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">Done</button>
            </div>
        </div>
    </div>

    <!-- Create Order Modal -->
    <div id="createOrderModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/[0.45] p-4">
        <div id="createOrderBox" class="h-[406.5px] w-[720px] max-h-[897.3px] max-w-[720px] rounded-[16px] bg-white shadow-[0_24px_60px_rgba(0,0,0,0.20)]">
            <!-- Create Order Header -->
            <div class="flex h-[65px] w-[720px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 h-[23px] w-[97px] font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Create Order</h2>
                <button type="button" id="closeCreateOrderModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Create Order Form -->
            <form id="createOrderStepOne" class="mx-auto mt-[24px] h-[295px] w-[672px] overflow-hidden">
                <!-- Create Order Steps -->
                <div class="mb-4 flex h-[24px] w-[672px] items-center gap-[8px]">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">1</span>
                        <span class="block h-[17px] w-[38px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#2563EB]">Patient</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#E2E8F0]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid size-6 place-items-center rounded-full bg-[#E8EEF8] text-[11px] font-bold text-[#94A3B8]">2</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#94A3B8]">Product</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#E2E8F0]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid size-6 place-items-center rounded-full bg-[#E8EEF8] text-[11px] font-bold text-[#94A3B8]">3</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#94A3B8]">Distributor</span>
                    </div>
                </div>

                <!-- Patient Name Field -->
                <div class="h-[57.5px] w-[672px]">
                    <label class="mb-1 block h-[17px] w-[79px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Patient Name *</label>
                    <div class="h-[41.5px] w-[672px] pt-[4px]">
                        <input type="text" placeholder="Ramesh Kumar" class="h-[37px] w-[672px] rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>
                </div>

                <!-- Mobile Field -->
                <div class="h-[70.5px] w-[672px] pt-[12px]">
                    <label class="mb-1 block h-[17px] w-[44px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Mobile *</label>
                    <input type="text" placeholder="+91 98765 43210" class="h-[37.5px] w-[672px] rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                </div>

                <!-- Delivery Address Field -->
                <div class="h-[70.5px] w-[672px] pt-[12px]">
                    <label class="mb-1 block h-[17px] w-[97px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Delivery Address *</label>
                    <input type="text" placeholder="12 MG Road, Banjara Hills, Hyderabad" class="h-[37px] w-full rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                </div>

                <!-- Create Order Next Button -->
                <button type="button" id="createOrderNextOne" class="mt-4 flex h-[35.5px] w-[672px] items-center justify-center gap-[6px] rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px]" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                    <span class="block h-[20px] w-[42px] overflow-visible whitespace-nowrap text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-white">Next →</span>
                </button>
            </form>

            <!-- Create Order Product Step -->
            <div id="createOrderStepTwo" class="mx-auto mt-[24px] hidden h-[382px] w-[672px] overflow-visible">
                <!-- Create Order Steps -->
                <div class="flex h-[24px] w-[672px] items-center gap-[8px]">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-[#22C55E] text-[11px] font-bold text-white">
                            <svg class="h-[10px] w-[10px]" viewBox="0 0 10 10" fill="none">
                                <path d="M2 5.2L4.1 7.2L8 3" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="block h-[17px] w-[38px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">Patient</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#22C55E]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">2</span>
                        <span class="block h-[17px] w-[44px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#2563EB]">Product</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#E2E8F0]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-[#E8EEF8] text-[11px] font-bold text-[#94A3B8]">3</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#94A3B8]">Distributor</span>
                    </div>
                </div>

                <!-- Product Field -->
                <div class="h-[58.5px] w-[672px]">
                    <label class="mb-1 block h-[17px] w-[51px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Product *</label>
                    <div class="h-[41.5px] w-[672px] pt-[4px]">
                        <input type="text" class="h-[37px] w-[672px] rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>
                </div>

                <!-- Size Field -->
                <div class="h-[70.5px] w-[672px] pt-[12px]">
                    <label class="mb-1 block h-[17px] w-[22px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Size</label>
                    <input type="text" class="h-[37.5px] w-[672px] rounded-full border border-[#E8EEF8] px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                </div>

                <!-- Product Card -->
                <div class="h-[86px] w-[672px] pt-[12px]">
                    <div class="flex h-[74px] w-[672px] items-center gap-[12px] rounded-[20px] border border-[#2563EB]/[0.12] bg-[#2563EB]/[0.05] p-[12px]">
                        <span class="grid h-[48px] w-[48px] place-items-center rounded-[20px] bg-[#DBEAFE] text-[#2563EB] [&_svg]:h-[22px] [&_svg]:w-[22px]">
                            @include('partials.inline-icon', ['name' => 'box'])
                        </span>
                        <div class="h-[38px] w-[112.95px]">
                            <p class="m-0 h-[20px] w-[111px] font-Jakarta text-[13px] font-bold leading-[19.5px] tracking-normal text-[#1D293D]">Knee Brace Pro-L</p>
                            <p class="m-0 h-[18px] w-[113px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Size: Large · ₹4,800</p>
                        </div>
                    </div>
                </div>

                <!-- Special Instructions Field -->
                <div class="h-[70.5px] w-[672px] pt-[12px]">
                    <label class="mb-1 block h-[17px] w-[105px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Special Instructions</label>
                    <div class="h-[41.5px] w-[672px] pt-[4px]">
                        <input type="text" placeholder="Any measurement notes or special requests..." class="h-[37.5px] w-[672px] rounded-full border border-[#E8EEF8] px-[13px] font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                    </div>
                </div>

                <!-- Create Order Product Buttons -->
                <div class="h-[66.5px] w-[672px] pt-[20px]">
                    <div class="flex h-[46.5px] w-[672.26px] items-start gap-[12px] pt-[8px]">
                        <button type="button" id="backCreateOrderStep" class="flex h-[38.5px] w-[67px] items-center justify-center rounded-[20px] border-[1.5px] border-[#2563EB]/[0.20] bg-white pt-[8px] pr-[16px] pb-[8px] pl-[16px]">
                            <span class="block h-[20px] w-[32px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#2563EB]">Back</span>
                        </button>
                        <button type="button" id="createOrderNextTwo" class="flex h-[38.5px] w-[594px] items-center justify-center rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px]" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                            <span class="block h-[20px] w-[42px] overflow-visible whitespace-nowrap text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-white">Next →</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Create Order Distributor Step -->
            <div id="createOrderStepThree" class="hidden h-[423.5px] w-[720px] overflow-visible p-[24px]">
                <div class="h-[376px] w-[672px]">
                <!-- Create Order Steps -->
                <div class="flex h-[24px] w-[672px] items-center gap-[8px]">
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-[#22C55E] text-[11px] font-bold text-white">
                            <svg class="h-[10px] w-[10px]" viewBox="0 0 10 10" fill="none">
                                <path d="M2 5.2L4.1 7.2L8 3" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="block h-[17px] w-[38px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">Patient</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#22C55E]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-[#22C55E] text-[11px] font-bold text-white">
                            <svg class="h-[10px] w-[10px]" viewBox="0 0 10 10" fill="none">
                                <path d="M2 5.2L4.1 7.2L8 3" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="block h-[17px] w-[44px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">Product</span>
                    </div>
                    <div class="h-[2px] w-[205.5px] rounded-full bg-[#22C55E]"></div>
                    <div class="flex items-center gap-2">
                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full bg-gradient-to-br from-[#2563EB] to-[#F97316] text-[11px] font-bold text-white">3</span>
                        <span class="font-Jakarta text-[11px] font-semibold text-[#2563EB]">Distributor</span>
                    </div>
                </div>

                    <!-- Create Order Distributor Content -->
                    <div class="h-[285.5px] w-[672px] pt-[8px]">
                        <!-- Distributor Field -->
                        <div class="h-[57.5px] w-[672px]">
                            <div class="h-[21px] w-[672px] pb-[4px]">
                                <label class="block h-[17px] w-[65px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Distributor *</label>
                            </div>
                            <div class="h-[41.5px] w-[672px] pt-[4px]">
                                <input type="text" class="h-[36.5px] w-[672px] rounded-[20px] border border-[#E2E8F0] bg-white px-4 font-Jakarta text-[13px] font-normal leading-none text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="h-[220px] w-[672px] pt-[12px]">
                            <div class="h-[208px] w-[672px] rounded-[20px] border border-[#E2E8F0] bg-[#F8FAFC] p-[16px]">
                                <h3 class="m-0 h-[18px] w-[93px] font-Jakarta text-[12px] font-bold leading-[18px] tracking-normal text-[#314158]">Order Summary</h3>
                                <div class="mt-[2px]">
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 h-[18px] w-[41px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Patient</p>
                                        <p class="m-0 h-[18px] w-[12px] text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">—</p>
                                    </div>
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Product</p>
                                        <p class="m-0 h-[18px] w-[102px] text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">Knee Brace Pro-L</p>
                                    </div>
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Size</p>
                                        <p class="m-0 text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">Large</p>
                                    </div>
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Distributor</p>
                                        <p class="m-0 text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">MediSupply Co.</p>
                                    </div>
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Delivery</p>
                                        <p class="m-0 text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">—</p>
                                    </div>
                                    <div class="flex h-[26px] w-[638px] items-start justify-between pt-[8px]">
                                        <p class="m-0 font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]">Amount</p>
                                        <p class="m-0 text-right font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#1D293D]">₹4,800</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Create Order Submit Buttons -->
                    <div class="h-[66.5px] w-[672px] pt-[20px]">
                        <div class="flex h-[46.5px] w-[672.26px] items-start gap-[12px] pt-[8px]">
                            <button type="button" id="backCreateOrderStepThree" class="flex h-[38.5px] w-[67px] items-center justify-center rounded-[20px] border-[1.5px] border-[#2563EB]/[0.20] bg-white pt-[8px] pr-[16px] pb-[8px] pl-[16px]">
                                <span class="block h-[20px] w-[32px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#2563EB]">Back</span>
                            </button>
                            <button type="button" class="flex h-[38.5px] w-[593.26px] items-center justify-center rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px]" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                                <span class="block h-[20px] w-[100px] overflow-visible whitespace-nowrap text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-white">Create Order →</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Assign Executive Modal -->
    <div id="assignExecutiveModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
        <div class="h-[470px] w-[520px] max-h-[897.3px] max-w-[520px] rounded-[16px] bg-white shadow-[0_24px_60px_rgba(0,0,0,0.20)]">
            <!-- Assign Executive Header -->
            <div class="flex h-[65px] w-[520px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 h-[23px] w-[123px] font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Assign Executive</h2>
                <button type="button" id="closeAssignExecutiveModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Assign Executive Form -->
            <div class="h-[405px] w-[520px] p-[24px]">
                <div class="h-[361px] w-[472px]">
                <div class="h-[57.5px] w-[472px]">
                    <div class="h-[21px] w-[472px] pb-[4px]">
                        <label class="block h-[17px] w-[107px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Lead / Appointment</label>
                    </div>
                    <input type="text" class="h-[36.5px] w-[472px] rounded-[20px] border border-[#E2E8F0] bg-white px-4 font-Jakarta text-[11px] outline-none">
                </div>

                <div class="h-[252px] w-[472px] pt-[16px]">
                    <label class="block h-[17px] w-[472px] font-Jakarta text-[11px] font-semibold leading-[16.5px] text-[#62748E]">Select Executive</label>
                    <div>
                        <div class="h-[73px] w-[472px] pt-[8px]">
                            <div class="flex h-[65px] w-[472px] items-center justify-between gap-[12px] rounded-[20px] border-2 border-[#F1F5F9] p-[12px]">
                                <div class="flex items-center gap-[12px]">
                                    <img src="/img/Sunil Mehta.png" alt="Sunil Mehta" class="h-[36px] w-[36px] rounded-full object-cover">
                                    <div class="h-[37px] w-[303px]">
                                        <p class="m-0 h-[20px] w-[72px] font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#1D293D]">Sunil Mehta</p>
                                        <p class="m-0 h-[17px] w-[138px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">Central HYD · 4 visits today</p>
                                    </div>
                                </div>
                                <span class="flex h-[21px] w-[81px] items-center gap-[6px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[10px] pb-[2px] pl-[10px]">
                                    <span class="h-[6px] w-[6px] rounded-full bg-[#22C55E]"></span>
                                    <span class="h-[17px] w-[49px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">Available</span>
                                </span>
                            </div>
                        </div>

                        <div class="h-[73px] w-[472px] pt-[8px]">
                            <div class="flex h-[65px] w-[472px] items-center justify-between gap-[12px] rounded-[20px] border-2 border-[#F1F5F9] p-[12px]">
                                <div class="flex items-center gap-[12px]">
                                    <img src="/img/Reena Kaur.png" alt="Reena Kaur" class="h-[36px] w-[36px] rounded-full object-cover">
                                    <div>
                                        <p class="m-0 h-[20px] w-[70px] font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#1D293D]">Reena Kaur</p>
                                        <p class="m-0 h-[17px] w-[129px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">North HYD · 5 visits today</p>
                                    </div>
                                </div>
                                <span class="flex h-[21px] w-[58px] items-center gap-[6px] rounded-full bg-[#F59E0B]/[0.12] pt-[2px] pr-[10px] pb-[2px] pl-[10px]">
                                    <span class="h-[6px] w-[6px] rounded-full bg-[#F59E0B]"></span>
                                    <span class="h-[17px] w-[26px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#F59E0B]">Busy</span>
                                </span>
                            </div>
                        </div>

                        <div class="h-[73px] w-[472px] pt-[8px]">
                            <div class="flex h-[65px] w-[472px] items-center justify-between gap-[12px] rounded-[20px] border-2 border-[#F1F5F9] p-[12px]">
                                <div class="flex items-center gap-[12px]">
                                    <img src="/img/Vijay Rajan.png" alt="Vijay Rajan" class="h-[36px] w-[36px] rounded-full object-cover">
                                    <div>
                                        <p class="m-0 h-[20px] w-[67px] font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#1D293D]">Vijay Rajan</p>
                                        <p class="m-0 h-[17px] w-[127px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#62748E]">West HYD · 3 visits today</p>
                                    </div>
                                </div>
                                <span class="flex h-[21px] w-[81px] items-center gap-[6px] rounded-full bg-[#22C55E]/[0.12] pt-[2px] pr-[10px] pb-[2px] pl-[10px]">
                                    <span class="h-[6px] w-[6px] rounded-full bg-[#22C55E]"></span>
                                    <span class="h-[17px] w-[49px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">Available</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="h-[51.5px] w-[472px] pt-[16px]">
                        <button type="button" class="flex h-[35.5px] w-[472px] items-center justify-center gap-[6px] rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px] font-Jakarta text-[13px] font-semibold text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                            Assign Executive
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Export Report Modal -->
    <div id="exportReportModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
        <div class="h-[370px] w-[520px] max-h-[897.3px] max-w-[520px] rounded-[16px] bg-white shadow-[0_24px_60px_rgba(0,0,0,0.20)]">
            <!-- Export Report Header -->
            <div class="flex h-[65px] w-[520px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Export Report</h2>
                <button type="button" id="closeExportReportModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Export Report Form -->
            <div class="h-[305px] w-[520px] p-[24px]">
                <div class="h-[258px] w-[472px]">
                    <div class="h-[57.5px] w-[472px]">
                        <div class="h-[21px] w-[472px] pb-[4px]">
                            <label class="block h-[17px] w-[65px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Report Type</label>
                        </div>
                        <input type="text" class="h-[36.5px] w-[472px] rounded-[20px] border border-[#E2E8F0] bg-white px-4 font-Jakarta text-[13px] outline-none">
                    </div>

                    <div class="h-[74px] w-[472px] pt-[16px]">
                        <div class="flex h-[58px] w-[472px] gap-[12px]">
                            <div class="h-[58px] w-[230px]">
                                <div class="h-[17px] w-[230px]">
                                    <label class="block h-[17px] w-[55px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Date From</label>
                                </div>
                                <div class="h-[41.5px] w-[230px] pt-[4px]">
                                    <input type="text" class="h-[32.5px] w-[230px] rounded-[20px] border border-[#E2E8F0] bg-white px-4 font-Jakarta text-[13px] outline-none">
                                </div>
                            </div>
                            <div class="h-[58px] w-[230px]">
                                <div class="h-[17px] w-[230px]">
                                    <label class="block h-[17px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Date To</label>
                                </div>
                                <div class="h-[41.5px] w-[230px] pt-[4px]">
                                    <input type="text" class="h-[32.5px] w-[230px] rounded-[20px] border border-[#E2E8F0] bg-white px-4 font-Jakarta text-[13px] outline-none">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="h-[75px] w-[472px] pt-[16px]">
                        <div class="h-[17px] w-[472px]">
                            <label class="block h-[17px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#62748E]">Format</label>
                        </div>
                        <div class="flex h-[42px] w-[472px] gap-[8px] pt-[4px]">
                            <button type="button" class="h-[38px] w-[152px] rounded-[20px] border-2 border-[#E2E8F0] bg-white pt-[8px] pb-[8px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#64748B]">Excel</button>
                            <button type="button" class="h-[38px] w-[152px] rounded-[20px] border-2 border-[#E2E8F0] bg-white pt-[8px] pb-[8px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#64748B]">PDF</button>
                            <button type="button" class="h-[38px] w-[152px] rounded-[20px] border-2 border-[#2563EB] bg-[#2563EB]/[0.06] pt-[8px] pb-[8px] text-center font-Jakarta text-[12px] font-semibold leading-[18px] tracking-normal text-[#2563EB]">CSV</button>
                        </div>
                    </div>

                    <div class="h-[51.5px] w-[472px] pt-[16px]">
                        <button type="button" class="flex h-[35.5px] w-[472px] items-center justify-center gap-[6px] rounded-[20px] pt-[8px] pr-[16px] pb-[8px] pl-[16px] font-Jakarta text-[13px] font-semibold text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                            <img src="/img/downloadicon.png" alt="" class="h-[13px] w-[13px]">
                            <span class="h-[20px] w-[139px] text-center font-Jakarta text-[13px] font-semibold leading-[19.5px] tracking-normal text-[#FFFFFF]">Generate & Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sync CRM Modal -->
    <div id="syncCrmModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 px-4">
        <div class="h-[420px] w-[520px] max-h-[897.3px] max-w-[520px] rounded-[16px] bg-white shadow-[0_24px_60px_rgba(0,0,0,0.20)]">
            <!-- Sync CRM Header -->
            <div class="flex h-[65px] w-[520px] items-center justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                <h2 class="m-0 font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-normal text-[#0F172B]">Sync CRM</h2>
                <button type="button" id="closeSyncCrmModal" class="grid size-8 place-items-center rounded-full bg-[#F1F5F9]">
                    <svg class="h-[7px] w-[7px]" viewBox="0 0 7 7" fill="none">
                        <path d="M1 1L6 6M6 1L1 6" stroke="#62748E" stroke-width="1.17" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <!-- Sync CRM Content -->
            <div class="h-[355px] w-[520px] p-[24px]">
                <div class="flex h-[307px] w-[472px] flex-col items-center justify-center pt-[16px] pb-[16px]">
                    <div class="flex h-[121px] w-[472px] flex-col items-center justify-center gap-[12px] pt-[16px] pb-[16px]">
                        <div class="grid h-[48px] w-[48px] place-items-center rounded-[20px] bg-[#2563EB]/[0.12] text-[#2563EB]">
                            @include('partials.inline-icon', ['name' => 'refresh'])
                        </div>
                        <p class="m-0 font-Jakarta text-[13px] font-bold leading-[19.5px] tracking-normal text-[#0F172B]">Syncing CRM Data...</p>
                    </div>
                    <div class="h-[24px] w-[472px] pt-[16px]">
                        <div class="h-[8px] w-[472px] overflow-hidden rounded-full bg-[#F1F5F9]">
                            <div class="h-[8px] w-[225.31px] rounded-full" style="background: linear-gradient(90deg, #2563EB 0%, #F97316 100%);"></div>
                        </div>
                    </div>

                    <div class="h-[130px] w-[472px] pt-[16px]">
                        <div class="flex h-[24px] w-[472px] items-center gap-[8px] pt-[6px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">
                            <img src="/img/Container.png" alt="" class="h-[16px] w-[16px]">
                            <span class="block h-[18px] w-[79px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#22C55E]">Syncing leads</span>
                        </div>
                        <div class="flex h-[24px] w-[472px] items-center gap-[8px] pt-[6px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#22C55E]">
                            <img src="/img/Container.png" alt="" class="h-[16px] w-[16px]">
                            <span class="block h-[18px] w-[137px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#22C55E]">Updating appointments</span>
                        </div>
                        <div class="flex h-[24px] w-[472px] items-center gap-[8px] pt-[6px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">
                            <img src="/img/circle.png" alt="" class="h-[16px] w-[16px]">
                            <span class="block h-[18px] w-[101px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#94A3B8]">Refreshing orders</span>
                        </div>
                        <div class="flex h-[24px] w-[472px] items-center gap-[8px] pt-[6px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">
                            <img src="/img/circle.png" alt="" class="h-[16px] w-[16px]">
                            <span class="block h-[18px] w-[143px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#94A3B8]">Calculating commissions</span>
                        </div>
                        <div class="flex h-[24px] w-[472px] items-center gap-[8px] pt-[6px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#94A3B8]">
                            <img src="/img/circle.png" alt="" class="h-[16px] w-[16px]">
                            <span class="block h-[18px] w-[52px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#94A3B8]">Finalizing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Script Section -->
    <script>
        // Modal elements
        var openNewLeadModal = document.getElementById('openNewLeadModal');
        var closeNewLeadModal = document.getElementById('closeNewLeadModal');
        var newLeadModal = document.getElementById('newLeadModal');
        var openCreateOrderModal = document.getElementById('openCreateOrderModal');
        var closeCreateOrderModal = document.getElementById('closeCreateOrderModal');
        var createOrderModal = document.getElementById('createOrderModal');
        var createOrderBox = document.getElementById('createOrderBox');
        var createOrderStepOne = document.getElementById('createOrderStepOne');
        var createOrderStepTwo = document.getElementById('createOrderStepTwo');
        var createOrderStepThree = document.getElementById('createOrderStepThree');
        var createOrderNextOne = document.getElementById('createOrderNextOne');
        var createOrderNextTwo = document.getElementById('createOrderNextTwo');
        var backCreateOrderStep = document.getElementById('backCreateOrderStep');
        var backCreateOrderStepThree = document.getElementById('backCreateOrderStepThree');
        var openBookAppointmentModal = document.getElementById('openBookAppointmentModal');
        var closeBookAppointmentModal = document.getElementById('closeBookAppointmentModal');
        var bookAppointmentModal = document.getElementById('bookAppointmentModal');
        var bookAppointmentBox = document.getElementById('bookAppointmentBox');
        var bookAppointmentForm = document.getElementById('bookAppointmentForm');
        var bookAppointmentSubmit = document.getElementById('bookAppointmentSubmit');
        var bookAppointmentSuccess = document.getElementById('bookAppointmentSuccess');
        var openAssignExecutiveModal = document.getElementById('openAssignExecutiveModal');
        var closeAssignExecutiveModal = document.getElementById('closeAssignExecutiveModal');
        var assignExecutiveModal = document.getElementById('assignExecutiveModal');
        var openExportReportModal = document.getElementById('openExportReportModal');
        var closeExportReportModal = document.getElementById('closeExportReportModal');
        var exportReportModal = document.getElementById('exportReportModal');
        var openSyncCrmModal = document.getElementById('openSyncCrmModal');
        var closeSyncCrmModal = document.getElementById('closeSyncCrmModal');
        var syncCrmModal = document.getElementById('syncCrmModal');
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
        var revenueLeadChart = document.getElementById('revenueLeadChart');

        // Revenue chart
        function drawRevenueLeadChart() {
            if (!revenueLeadChart) {
                return;
            }

            var rect = revenueLeadChart.getBoundingClientRect();
            var ratio = window.devicePixelRatio || 1;
            revenueLeadChart.width = rect.width * ratio;
            revenueLeadChart.height = rect.height * ratio;

            var ctx = revenueLeadChart.getContext('2d');
            ctx.setTransform(ratio, 0, 0, ratio, 0, 0);
            ctx.clearRect(0, 0, rect.width, rect.height);

            var chartLeft = 130;
            var labelLeft = 125;
            var chartRight = rect.width - 110;
            var chartTop = 24;
            var chartBottom = 152;
            var maxValue = 832;
            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
            var labels = [832, 624, 416, 208];
            var leads = [180, 220, 195, 270, 255, 330];
            var orders = [130, 160, 145, 190, 180, 220];
            var revenue = [500, 600, 545, 700, 670, 832];

            function getX(index) {
                return chartLeft + ((chartRight - chartLeft) / (months.length - 1)) * index;
            }

            function getY(value) {
                return chartBottom - (value / maxValue) * (chartBottom - chartTop);
            }

            ctx.font = '400 9px Inter, sans-serif';
            ctx.fillStyle = 'rgba(15, 23, 42, 0.4)';
            ctx.textAlign = 'right';
            ctx.strokeStyle = '#E8EEF8';
            ctx.lineWidth = 1;
            ctx.setLineDash([5, 5]);

            labels.forEach(function (label) {
                var y = getY(label);
                ctx.beginPath();
                ctx.moveTo(chartLeft, y);
                ctx.lineTo(chartRight, y);
                ctx.stroke();
                ctx.fillText(label, labelLeft, y + 3);
            });

            ctx.setLineDash([]);
            ctx.textAlign = 'center';
            ctx.font = '400 9px Inter, sans-serif';
            ctx.fillStyle = 'rgba(15, 23, 42, 0.38)';
            months.forEach(function (month, index) {
                ctx.fillText(month, getX(index), chartBottom + 24);
            });

            function drawLine(values, color, showDot) {
                ctx.beginPath();
                ctx.strokeStyle = color;
                ctx.lineWidth = 2.2;
                values.forEach(function (value, index) {
                    var x = getX(index);
                    var y = getY(value);
                    if (index === 0) {
                        ctx.moveTo(x, y);
                    } else {
                        ctx.lineTo(x, y);
                    }
                });
                ctx.stroke();

                if (showDot) {
                    var lastX = getX(values.length - 1);
                    var lastY = getY(values[values.length - 1]);
                    ctx.beginPath();
                    ctx.fillStyle = color;
                    ctx.arc(lastX, lastY, 5, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            drawLine(revenue, '#A855F7', true);
            drawLine(leads, '#2563EB', true);
            drawLine(orders, '#F97316', true);
        }

        drawRevenueLeadChart();
        window.addEventListener('resize', drawRevenueLeadChart);

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
            bookAppointmentBox.classList.remove('h-[399.5px]');
            bookAppointmentBox.classList.add('h-[575px]');
            bookAppointmentForm.classList.remove('hidden');
            bookAppointmentSuccess.classList.add('hidden');
            bookAppointmentSuccess.classList.remove('flex');
            bookAppointmentModal.classList.remove('hidden');
            bookAppointmentModal.classList.add('flex');
        };

        // Open assign executive modal
        openAssignExecutiveModal.onclick = function (event) {
            event.preventDefault();
            assignExecutiveModal.classList.remove('hidden');
            assignExecutiveModal.classList.add('flex');
        };

        // Open export report modal
        openExportReportModal.onclick = function (event) {
            event.preventDefault();
            exportReportModal.classList.remove('hidden');
            exportReportModal.classList.add('flex');
        };

        // Open sync crm modal
        openSyncCrmModal.onclick = function (event) {
            event.preventDefault();
            syncCrmModal.classList.remove('hidden');
            syncCrmModal.classList.add('flex');
        };

        // Open create order modal
        openCreateOrderModal.onclick = function (event) {
            event.preventDefault();
            createOrderBox.classList.remove('h-[493.5px]');
            createOrderBox.classList.remove('h-[488.5px]');
            createOrderBox.classList.add('h-[406.5px]');
            createOrderStepOne.classList.remove('hidden');
            createOrderStepTwo.classList.add('hidden');
            createOrderStepThree.classList.add('hidden');
            createOrderModal.classList.remove('hidden');
            createOrderModal.classList.add('flex');
        };

        // Go to create order product step
        createOrderNextOne.onclick = function () {
            createOrderBox.classList.remove('h-[406.5px]');
            createOrderBox.classList.add('h-[493.5px]');
            createOrderStepOne.classList.add('hidden');
            createOrderStepTwo.classList.remove('hidden');
        };

        // Go to create order distributor step
        createOrderNextTwo.onclick = function () {
            createOrderBox.classList.remove('h-[493.5px]');
            createOrderBox.classList.add('h-[488.5px]');
            createOrderStepTwo.classList.add('hidden');
            createOrderStepThree.classList.remove('hidden');
        };

        // Back to create order patient step
        backCreateOrderStep.onclick = function () {
            createOrderBox.classList.remove('h-[493.5px]');
            createOrderBox.classList.add('h-[406.5px]');
            createOrderStepTwo.classList.add('hidden');
            createOrderStepOne.classList.remove('hidden');
        };

        // Back to create order product step
        backCreateOrderStepThree.onclick = function () {
            createOrderBox.classList.remove('h-[488.5px]');
            createOrderBox.classList.add('h-[493.5px]');
            createOrderStepThree.classList.add('hidden');
            createOrderStepTwo.classList.remove('hidden');
        };

        // Show book appointment success
        bookAppointmentSubmit.onclick = function () {
            bookAppointmentBox.classList.remove('h-[575px]');
            bookAppointmentBox.classList.add('h-[399.5px]');
            bookAppointmentForm.classList.add('hidden');
            bookAppointmentSuccess.classList.remove('hidden');
            bookAppointmentSuccess.classList.add('flex');
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
            bookAppointmentBox.classList.remove('h-[399.5px]');
            bookAppointmentBox.classList.add('h-[575px]');
            bookAppointmentForm.classList.remove('hidden');
            bookAppointmentSuccess.classList.add('hidden');
            bookAppointmentSuccess.classList.remove('flex');
        };

        // Close assign executive modal
        closeAssignExecutiveModal.onclick = function () {
            assignExecutiveModal.classList.add('hidden');
            assignExecutiveModal.classList.remove('flex');
        };

        // Close export report modal
        closeExportReportModal.onclick = function () {
            exportReportModal.classList.add('hidden');
            exportReportModal.classList.remove('flex');
        };

        // Close sync crm modal
        closeSyncCrmModal.onclick = function () {
            syncCrmModal.classList.add('hidden');
            syncCrmModal.classList.remove('flex');
        };

        // Close create order modal
        closeCreateOrderModal.onclick = function () {
            createOrderModal.classList.add('hidden');
            createOrderModal.classList.remove('flex');
            createOrderBox.classList.remove('h-[493.5px]');
            createOrderBox.classList.remove('h-[488.5px]');
            createOrderBox.classList.add('h-[406.5px]');
            createOrderStepThree.classList.add('hidden');
            createOrderStepTwo.classList.add('hidden');
            createOrderStepOne.classList.remove('hidden');
        };
    </script>


@endsection
