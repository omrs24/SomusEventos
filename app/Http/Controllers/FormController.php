<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //Get Json data into seriallized array
            $data = json_decode($request->getContent());

            $form = new Form();

            $form->name = $data->name;
            $form->last_name = $data->lastName;
            $form->email = $data->email;
            $form->phone = $data->phone;
            $form->guest_companies_id = $data->guest_companies_id;

            $form->save();

            return response()->json([
                "data" => $form->id
            ], 201);
        } catch (Exception $e) {

            if ((int)$e["errorInfo"][1] == 1062) {
                return response()->json([
                    "errorMsg" => "El correo ya se encuentra registrado."
                ], 500);
            }

            Debugbar::info($e->getMessage());
            Debugbar::log($e->getMessage());

            return response()->json([
                "errorMsg" => $e
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
