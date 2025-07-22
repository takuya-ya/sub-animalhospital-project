<x-app-layout>
    <x-slot name="header">
        headerに入る部分
    </x-slot>
    
    <div>
        
        <form method="post" action="{{ route('reservation.store') }}">
            @csrf
            <div>
                <label for="user_id">ユーザー番号</label>
                <input type="number" name="user_id">

                <label for="reservation_datetime">予約日時:</label>
                <input type="datetime-local" name="reservation_datetime" id="reservation_datetime" required>
            </div>
            
            <div>
                <x-primary-button>
                    送信する
                </x-primary-button>
            </div>
        </form>

    </div>
</x-app-layout>
