<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'reservation_datetime' => 'required|date'
        ]);

        $reservation = Reservation::create($validated);
        return redirect()->route('reservation.index')->with('success', '予約が完了しました');
    }

    /**
     * Display the specified resource.
     */
    // 引数は個別予約データのインスタンス。タイプヒントと依存注入を使用
    // ルートパラメータと引数の変数名は一致させる必要がある
    public function show(Reservation $reservation)
    {
        //
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        $validated = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'reservation_datetime' => 'required|date'
        ]);

        $reservation->update($validated);

        return redirect()->route('reservation.index')->with('success', '予約更新しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
        return destroy($reservation);
    }
}
