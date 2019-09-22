<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    private $clients = [
        ['id'=>'1', 'name'=>'johnny'],
        ['id'=>'2', 'name'=>'jose'],
        ['id'=>'3', 'name'=>'fran'],
        ['id'=>'4', 'name'=>'lais']
    ];

    public function __construct()
    {
        $clients = session('clients');
        if (!isset($clients)) {
            session(['clients' => $this->clients]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = session('clients');
        $title = "Todos os clientes";

        // Formas de passar valores para as views

        // return view('clients.index', ['clients' => $clients, 'title' => "Todos os clientes"]);

        // return view('clients.index')
        //     ->with('clients', $clients)
        //     ->with('title', 'Todos os clientes');

        return view('clients.index', compact(['clients', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = session('clients');
        $id = end($clients)['id'] + 1;
        $name = $request->name;
        $data = ['id' => $id, 'name' => $name];
        $clients[] = $data;
        session(['clients' => $clients]);
        return redirect()->route('clients.index'); # jeito certo
        
        # alternativa para este exemplo
        # return view('clients.index', compact(['clients']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = session('clients');
        $index = $this->getIndex($id, $clients);
        $client = $clients[$index];
        return view('clients.info', compact(['client']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = session('clients');
        $index = $this->getIndex($id, $clients);
        $client = $clients[$index];
        return view('clients.edit', compact(['client']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clients = session('clients');
        $index = $this->getIndex($id, $clients);
        $clients[$index]['name'] = $request->name;
        session(['clients' => $clients]);
        return redirect()->route('clients.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = session('clients');
        $index = $this->getIndex($id, $clients);
        array_splice($clients, $index, 1);
        session(['clients' => $clients]);
        return redirect()->route('clients.index'); 
    }

    private function getIndex($id, $clients) {
        $ids = array_column($clients, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
