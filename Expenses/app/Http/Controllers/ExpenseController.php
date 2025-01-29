<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ExpenseController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        return view(
            'expenses.index',
            [
                'expenses' => Expense::with( 'user' )->latest()->get(),
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ): RedirectResponse {
        $validated = $request->validate( [
            'message' => 'required|string|max:255',
        ] );

        $request->user()->expenses()->create( $validated );

        return redirect( route( 'expenses.index' ) );
    }

    /**
     * Display the specified resource.
     */
    public function show( Expense $expense ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Expense $expense ): View {
        Gate::authorize( 'update', $expense );

        return view(
            'expenses.edit',
            [
                'expense' => $expense,
            ],
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Expense $expense ): RedirectResponse {
        Gate::authorize( 'update', $expense );

        $validated = $request->validate( [
            'message' => 'required|string|max:255',
        ] );

        $expense->update( $validated );

        return redirect( route( 'expenses.index' ) );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Expense $expense ): RedirectResponse {
        Gate::authorize( 'delete', $expense );

        $expense->delete();

        return redirect( route( 'expenses.index' ) );
    }

}
