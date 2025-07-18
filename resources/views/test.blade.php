こんにちは
@foreach ($reservations as $user)
<p>
    {{ $user->name }}
</p>
@endforeach