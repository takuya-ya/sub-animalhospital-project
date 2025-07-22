<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            予約一覧
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        <p>
            こんにちは
        </p>

        <a href="{{ route('reservation.create') }}">予約はこちら</a>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @foreach ($reservations as $user)
        <div class="mt-4 p-8 bg-white w-full rounded-2xl">
            <h1 class="p-4 text-lg font-semibold">
                {{ $user->user_id }}
            </h1>
            <hr class="w-full">
            <p class="mt-4 p-4">
                予約日時:{{ $user->reservation_datetime }}
            </p>
        </div>
        @endforeach
    </div>


</x-app-layout>