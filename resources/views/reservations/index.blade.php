<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            予約一覧
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        <p class="mb-4 text-lg">
            こんにちは
        </p>

        <a href="{{ route('reservation.create') }}">予約はこちら</a>

        @if (session('success'))
        <div class="mt-6 mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
            {{ session('success') }}
        </div>
        @endif

        <!-- 予約一覧表示 -->
        <!-- $reservations は Reservation モデルのインスタンスの コレクション（配列のようなもの）。controllerから渡す -->
        @foreach ($reservations as $reservation)
        <div class="mt-4 p-8 bg-white w-full rounded-2xl shadow">
            <h1 class="p-4 text-lg font-semibold">
                <a href=" {{ route('reservation.show', $reservation)}}" class="text-blue-600 hover:underline">
                    名前 : {{ $reservation->user->name }} 様&nbsp;&nbsp;/&nbsp;&nbsp;ユーザーID : {{ $reservation->user_id }} 
                </a>
            </h1>
            <hr class="w-full">
            <p class="mt-4 p-4">
                予約日時:{{ $reservation->reservation_datetime }} 
            </p>
        </div>
        @endforeach
    </div>


</x-app-layout>