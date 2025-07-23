<x-app-layout>
    <x-slot name="header">
        headerに入る部分
    </x-slot>
    
    <div>
        <!-- $reservationのインスタンスから自動でidを取ってきてくれて、reservation/{reservation}に挿入してくれる -->
        <form method="post" action="{{ route('reservation.update', $reservation) }}">
            @csrf
            @method('patch')
            <div>
                <label for="user_id">ユーザー番号</label>
                <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                <input type="number" name="user_id" value="{{ old('user_id', $reservation->user_id) }}" id="user_id" required>

                <label for="reservation_datetime">予約日時:</label>
                <x-input-error :messages="$errors->get('reservation_datetime')" class="mt-2" />
                <input type="datetime-local" name="reservation_datetime" value="{{ old('reservation_datetime', $reservation->reservation_datetime) }}" id="reservation_datetime" required>
            </div>
            
            <div>
                <x-primary-button>
                    編集する
                </x-primary-button>
            </div>
        </form>

    </div>
</x-app-layout>
