@php use Illuminate\Support\Carbon; @endphp
<div id="tab-medical-history" class="tab-panel h-full flex flex-col">
    <div class="w-full bg-secondary p-5 rounded-t-xl border-b border-border flex justify-between items-center">
        <p class="font-bold text-2xl md:text-3xl">Medical History</p>
        <div class="text-xs flex flex-col items-end text-right">
            <p>LAST UPDATED</p>
            <p>{{ $medicalHistoryLastUpdatedAt ? Carbon::parse($medicalHistoryLastUpdatedAt)->format('F d, Y h:i A') : 'N/A' }}</p>
        </div>
    </div>
    <div class="flex-1 p-5 overflow-auto">
        <h1 class="font-bold text-xl mb-4">Patient Responses</h1>

        @if ($patientResponses->isEmpty())
            <p class="text-sm text-gray-500 mb-6">No patient responses found.</p>
        @else
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 mb-6">
                @foreach ($patientResponses as $response)
                    @php
                        $hasNotes = !empty($response->notes);
                        $answerDisplay = $response->answer === 'N/A' && $hasNotes
                            ? $response->notes
                            : $response->answer;
                    @endphp
                    <li class="flex flex-col">
                        <span class="font-bold text-xl">{{ $answerDisplay }}</span>
                        <span>{{ $response->question }}</span>
                        @if ($response->answer === 'Yes' && $hasNotes)
                            <span class="text-base text-gray-700">Note: {{ $response->notes }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif

        <h1 class="font-bold text-xl mb-4">Medical Conditions</h1>

        @if ($medicalConditions->isEmpty())
            <p class="text-sm text-gray-500">No medical conditions found.</p>
        @else
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-3">
                @foreach ($medicalConditions as $condition)
                    @php
                        $hasCondition = in_array((int) $condition->id, $patientConditionIds, true);
                    @endphp
                    <li class="flex items-center gap-3 text-xs">
                        <span class="h-4 w-4 border border-border rounded-sm {{ $hasCondition ? 'bg-primary border-primary' : 'bg-transparent' }}"></span>
                        <span>
                            {{ $condition->condition_name }}
                            @if ($condition->condition_name === 'Others' && !empty($otherConditionNote))
                                <span class="block italic text-gray-600">Note: {{ $otherConditionNote }}</span>
                            @endif
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
