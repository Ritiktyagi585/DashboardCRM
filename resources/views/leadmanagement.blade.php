@extends('layouts.app')
@section('title', 'Lead Management')
@section('pageTitle', 'Lead Management')
@section('content')
            <!-- Lead Management Content Container -->
            <div class="-mx-4 flex h-[933px] w-[calc(100%+2rem)] flex-col gap-[20px] p-[24px]">
                <div class="flex h-[885px] w-full flex-col gap-[16px]">

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
                <div class="flex h-[37.5px] flex-1 items-center gap-[8px] rounded-[20px] border border-[#E2E8F0] bg-white pt-[8px] pr-[12px] pb-[8px] pl-[12px]">
                    <svg viewBox="0 0 24 24" class="size-3 text-[#94A3B8]" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="7" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                    <input type="search" placeholder="Search leads by name, phone, area..." class="h-[16px] flex-1 bg-transparent font-Jakarta text-[13px] font-normal leading-none tracking-normal text-[#90A1B9] outline-none placeholder:text-[#90A1B9]">
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
                <button type="button" id="openAddLeadDrawer" class="flex h-[30px] w-[97px] shrink-0 items-center justify-center gap-[6px] rounded-[20px] pt-[6px] pr-[12px] pb-[6px] pl-[12px] font-Jakarta text-[12px] font-semibold leading-[18px] text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">
                    <span class="text-[14px]">+</span>
                    <span class="whitespace-nowrap">Add Lead</span>
                </button>
            </section>

            <!-- Lead Table Section -->
            <section class="h-[532px] w-[1099px] max-w-full rounded-[16px] border-t border-[#E2E8F0] bg-[#FFFFFF]">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="h-[41.5px] border-b border-[#E2E8F0] bg-[#F8FAFC] text-left font-Jakarta text-[11px] font-bold uppercase leading-[16.5px] tracking-normal text-[#62748E]">
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
                                        <p class="m-0 h-[17px] w-[86px] font-Jakarta text-[11px] font-normal leading-[16.5px] tracking-normal text-[#90A1B9]"><?= $lead['phone'] ?></p>
                                    </div>
                                </td>
                                <td class="h-[61px] w-[132.26px] border-b border-[#F8FAFC]"><span class="inline-flex h-[20.5px] w-[72px] items-center gap-[6px] rounded-full bg-[#2563EB]/[0.12] pt-[2px] pr-[10px] pb-[2px] pl-[10px]"><span class="block h-[17px] w-[52px] font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal text-[#2563EB]"><?= $lead['problem'] ?></span></span></td>
                                <td class="h-[61px] w-[110.19px] border-b border-[#F8FAFC]"><span class="block h-[18px] w-[68px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#45556C]"><?= $lead['area'] ?></span></td>
                                <td class="h-[61px] w-[133.55px] border-b border-[#F8FAFC]"><span class="inline-flex h-[20.5px] <?= $lead['status'] === 'Follow-Up' ? 'w-[89px]' : 'w-[75px]' ?> items-center gap-[6px] rounded-full pt-[2px] pr-[10px] pb-[2px] pl-[10px]" style="background: <?= $lead['color'] ?>1A;"><span class="h-[6px] w-[6px] rounded-full" style="background: <?= $lead['color'] ?>;"></span><span class="block h-[17px] w-[43px] whitespace-nowrap font-Jakarta text-[11px] font-semibold leading-[16.5px] tracking-normal" style="color: <?= $lead['color'] ?>;"><?= $lead['status'] ?></span></span></td>
                                <td class="h-[61px] w-[144.97px] border-b border-[#F8FAFC]">
                                    <div class="flex h-[24px] w-[112.97px] items-center gap-[8px]">
                                        <span class="grid h-[24px] w-[24px] place-items-center rounded-full font-Jakarta text-[10px] font-bold leading-[15px] tracking-normal text-white" style="background: linear-gradient(160deg, #2563EB 0%, #F97316 100%);"><?= substr($lead['agent'], 0, 1) ?></span>
                                        <span class="block h-[18px] w-[41px] whitespace-nowrap font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#45556C]"><?= $lead['agent'] ?></span>
                                    </div>
                                </td>
                                <td class="h-[61px] w-[130.16px] border-b border-[#F8FAFC]">
                                    <div class="flex h-[17px] w-[98.16px] items-center gap-[8px]">
                                        <div class="h-[6px] w-[76.16px] rounded-full bg-[#F1F5F9]">
                                            <div class="h-[6px] w-[70.8px] rounded-full <?= $lead['score'] >= 90 ? 'bg-[#22C55E]' : ($lead['score'] >= 70 ? 'bg-[#F59E0B]' : 'bg-[#FB2C36]') ?>"></div>
                                        </div>
                                        <span class="block h-[17px] w-[14px] font-Jakarta text-[11px] font-bold leading-[16.5px] tracking-normal text-[#45556C]"><?= $lead['score'] ?></span>
                                    </div>
                                </td>
                                <td class="h-[61px] w-[71.08px] border-b border-[#F8FAFC]"><span class="block h-[18px] w-[33px] whitespace-nowrap font-Jakarta text-[12px] font-normal leading-[18px] tracking-normal text-[#62748E]"><?= $lead['date'] ?></span></td>
                                <td class="h-[61px] w-[101.6px] border-b border-[#F8FAFC]">
                                    <div class="flex h-[28px] w-[69.6px] items-center gap-[4px] text-[#2563EB]">
                                        <span class="grid h-[28px] w-[28px] place-items-center rounded-[16px]">
                                            <svg class="size-[13px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z" />
                                                <circle cx="12" cy="12" r="3" />
                                            </svg>
                                        </span>
                                        <span class="grid h-[28px] w-[28px] place-items-center rounded-[16px] text-[#94A3B8]">...</span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

            <!-- Pagination Section -->
            <footer class="mt-auto flex h-[32px] w-full shrink-0 -translate-y-[10px] items-center justify-between">
                <p class="m-0 h-[18px] w-[152px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-[0px] text-[#62748E]">Showing 1-8 of 1,840 leads</p>
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

            <!-- Add New Lead Drawer -->
            <div id="addLeadDrawer" class="fixed inset-0 z-50 hidden bg-[#0F172A]/30">
                <aside class="ml-auto h-[997px] w-[460px] bg-[#FFFFFF] shadow-[-8px_0_40px_rgba(0,0,0,0.15)]">
                    <div class="flex h-[76px] w-[460px] items-start justify-between border-b border-[#F1F5F9] pt-[16px] pr-[24px] pb-[16px] pl-[24px]">
                        <div class="h-[43px] w-[199.65px]">
                            <h2 class="m-0 h-[23px] w-[106px] font-Jakarta text-[15px] font-bold leading-[22.5px] tracking-[0px] text-[#0F172B]">Add New Lead</h2>
                            <p class="m-0 h-[20px] w-[199.65px] pt-[2px]"><span class="block h-[18px] w-[200px] font-Jakarta text-[12px] font-normal leading-[18px] tracking-[0px] text-[#62748E]">Fill in patient details to create a lead</span></p>
                        </div>
                        <button type="button" id="closeAddLeadDrawer" aria-label="Close" class="grid size-[28px] place-items-center rounded-full bg-[#F8FAFC] text-[#94A3B8]">
                            <svg viewBox="0 0 24 24" class="size-[12px]" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 6 6 18M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="h-[921px] w-[460px]">
                    <div class="mx-[24px] mt-[28px] h-[365px] w-[412px]">
                    <div class="flex h-[24px] w-[412px] items-center gap-[8px]">
                        <div class="flex h-[24px] w-[114px] items-center gap-[6px] font-Jakarta text-[10px] font-semibold text-[#2563EB]">
                            <span class="grid size-[24px] place-items-center rounded-full text-white" style="background: linear-gradient(160deg, #2563EB 0%, #F97316 100%);">1</span>
                            <span class="block h-[18px] w-[84px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-[0px] text-[#2563EB]">Patient Details</span>
                        </div>
                        <div class="h-[2px] w-[154px] shrink-0 rounded-full bg-[#E2E8F0]"></div>
                        <div class="flex h-[24px] w-[128px] items-center gap-[6px] font-Jakarta text-[10px] font-semibold text-[#94A3B8]">
                            <span class="grid size-[22px] place-items-center rounded-full bg-[#E2E8F0] text-white">2</span>
                            <span class="block h-[18px] w-[98px] font-Jakarta text-[12px] font-semibold leading-[18px] tracking-[0px] text-[#94A3B8]">Problem &amp; Notes</span>
                        </div>
                    </div>

                    <form class="mt-[14px]" onsubmit="return false;">
                        <div class="flex h-[277.5px] w-[412px] flex-col gap-[10px] pt-[8px]">
                        <label class="flex h-[58.5px] w-[412px] flex-col">
                            <span class="mb-[5px] block font-Jakarta text-[10px] font-semibold leading-[15px] text-[#45556C]">Patient Name <span class="text-[#2563EB]">*</span></span>
                            <input type="text" placeholder="e.g. Ramesh Kumar" class="h-[38px] w-full rounded-[20px] border border-[#E2E8F0] px-[14px] font-Jakarta text-[11px] text-[#0F172A] outline-none placeholder:text-[#94A3B8] focus:border-[#2563EB]">
                        </label>
                        <label class="block">
                            <span class="mb-[5px] block font-Jakarta text-[10px] font-semibold leading-[15px] text-[#45556C]">Mobile Number <span class="text-[#2563EB]">*</span></span>
                            <input type="tel" placeholder="+91 98765 43210" class="h-[38px] w-full rounded-[20px] border border-[#E2E8F0] px-[14px] font-Jakarta text-[11px] text-[#0F172A] outline-none placeholder:text-[#94A3B8] focus:border-[#2563EB]">
                        </label>
                        <label class="block">
                            <span class="mb-[5px] block font-Jakarta text-[10px] font-semibold leading-[15px] text-[#45556C]">Area / Locality <span class="text-[#2563EB]">*</span></span>
                            <input type="text" placeholder="e.g. Banjara Hills, Hyderabad" class="h-[38px] w-full rounded-[20px] border border-[#E2E8F0] px-[14px] font-Jakarta text-[11px] text-[#0F172A] outline-none placeholder:text-[#94A3B8] focus:border-[#2563EB]">
                        </label>
                        <div class="grid grid-cols-2 gap-[12px]">
                            <label class="block">
                                <span class="mb-[5px] block font-Jakarta text-[10px] font-semibold leading-[15px] text-[#45556C]">Age</span>
                                <input type="number" placeholder="e.g. 58" class="h-[38px] w-full rounded-[20px] border border-[#E2E8F0] px-[14px] font-Jakarta text-[11px] text-[#0F172A] outline-none placeholder:text-[#94A3B8] focus:border-[#2563EB]">
                            </label>
                            <label class="block">
                                <span class="mb-[5px] block font-Jakarta text-[10px] font-semibold leading-[15px] text-[#45556C]">Gender</span>
                                <input type="text" class="h-[38px] w-full rounded-[20px] border border-[#E2E8F0] px-[14px] font-Jakarta text-[11px] text-[#0F172A] outline-none focus:border-[#2563EB]">
                            </label>
                        </div>
                        </div>
                        <button type="submit" class="mt-[18px] flex h-[36px] w-full items-center justify-center rounded-[20px] font-Jakarta text-[11px] font-semibold text-white" style="background: linear-gradient(160deg, #4B68D8 0%, #7B6E9D 38%, #A66F74 70%, #F97316 100%);">Next Step →</button>
                    </form>
                    </div>
                    </div>
                </aside>
            </div>

            <script>
                const addLeadDrawer = document.getElementById('addLeadDrawer');
                const openAddLeadDrawer = document.getElementById('openAddLeadDrawer');
                const closeAddLeadDrawer = document.getElementById('closeAddLeadDrawer');

                openAddLeadDrawer.addEventListener('click', () => addLeadDrawer.classList.remove('hidden'));
                closeAddLeadDrawer.addEventListener('click', () => addLeadDrawer.classList.add('hidden'));
                addLeadDrawer.addEventListener('click', (event) => {
                    if (event.target === addLeadDrawer) addLeadDrawer.classList.add('hidden');
                });
            </script>

@endsection
