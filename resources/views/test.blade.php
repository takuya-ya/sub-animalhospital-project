こんにちは

@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

@foreach ($reservations as $user)

<p>
    {{ $user->user_id }}
    {{ $user->reservation_datetime }}
</p>
@endforeach