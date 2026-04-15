@extends('layouts.layout')

@section('content')
    <div class="w-full h-full px-2 pb-2 md:px-4 md:pb-4 grid grid-cols-12 gap-4">
        <div id="patient-info" class="h-content col-span-12 md:h-full md:col-span-5 lg:col-span-4 font-sans border border-border rounded-xl flex justify-center items-center overflow-hidden">
            <p class="font-mono text-base text-primary w-1/2 text-center">CLICK ON PATIENT TO DISPLAY INFO</p>
        </div>

        <div class="h-content md:h-full col-span-12 md:col-span-7 lg:col-span-8 flex flex-col overflow-hidden border border-edge rounded-xl bg-white shadow-sm">
            <div class="bg-gray-100 px-4 py-3 rounded-t-xl border-b border-edge sticky top-0 z-50">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                    <div class="bg-white flex items-center px-3 py-2 rounded-xl border border-edge focus-within:border-primary transition-colors w-full sm:w-2/5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <input id="patient-search" type="text" placeholder="Search Patient..." class="flex-1 ml-2 outline-none text-sm text-gray-700 bg-transparent">
                    </div>

                    <a href="{{ route('patients.create') }}" class="inline-flex items-center justify-center bg-primary px-4 py-2 text-sm text-secondary rounded-xl gap-1 w-full sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 5v14m-7-7h14" />
                        </svg>
                        New Patient
                    </a>
                </div>
            </div>

            <div id="patient-container" data-url="{{ route('patients.index') }}" class="flex-1 min-h-0 overflow-y-auto">
                <div id="patient-list" class="divide-y divide-edge">
                    @include('components.patients.list', ['patients' => $patients])
                </div>

                <div id="infinite-scroll-trigger" class="p-6 text-center" @if(!$hasMore) style="display: none;" @endif>
                    <div class="animate-pulse text-muted text-sm">Loading...</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/patients/index.js'])
@endpush
