@unless($column['hidden'])
    <div class="relative table-cell h-12 overflow-hidden align-top" @if (isset($column['width']))style="width:{{ $column['width'] }}"@endif>
        @if ($column['unsortable'])
            <div
                class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider flex items-center focus:outline-none @if ($column['align'] === 'right') justify-end @elseif($column['align'] === 'center') justify-center @endif">
                <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
            </div>
        @else
            <button wire:click="sort('{{ $index }}')"
                class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider flex items-center focus:outline-none @if ($column['align'] === 'right') justify-end @elseif($column['align'] === 'center') justify-center @endif">
                <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
                <span class="inline text-xs text-blue-400">
                    @if ($sort === $index)
                        @if ($direction)
                            <x-icons.chevron-up wire:loading.remove class="w-6 h-6 text-green-600 stroke-current" />
                        @else
                            <x-icons.chevron-down wire:loading.remove class="w-6 h-6 text-green-600 stroke-current" />
                        @endif
                    @endif
                </span>
            </button>
        @endif
    </div>
    @endif
