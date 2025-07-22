こんにちは

@foreach ($reservations as $user)
<p>
    {{ $user->user_id }}
    {{ $user->reservation_datetime }}
</p>
@endforeach