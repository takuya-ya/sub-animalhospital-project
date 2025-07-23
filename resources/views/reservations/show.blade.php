<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            予約詳細
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white w-full rounded-2xl">
            <div class="mt-4 p-8">
                <div class="flex itemus-center justify-between ">
                    <h1 class="flex items-center text-lg font-semibold">
                        {{ $reservation->user->name }} 様&nbsp;&nbsp;/&nbsp;&nbsp;ユーザーID : {{ $reservation->user_id }}
                    </h1>
                    <div class="text-right">
                        <a href="{{ route('reservation.edit', $reservation)}}">
                            <x-primary-button>
                                編集
                            </x-primary-button>
                        </a>
                         <a href="{{ route('reservation.edit', $reservation)}}">
                            <x-primary-button>
                                削除
                            </x-primary-button>
                        </a>
                    </div>
                </div>
                <hr>
                <br>
                <p class="text-sm font-semibold ">
                    予約日時 : {{ $reservation->reservation_datetime}}
                </p>
                <br>

                <div class="text-sm font-semibold flex flex-row-revetse">
                    <p> 
                        {{ $reservation->created_at->format('Y年m月d日 H:i') }} に予約されました
                    </p>
                </div>
            </div>

        </div>
      
    </div>


</x-app-layout>