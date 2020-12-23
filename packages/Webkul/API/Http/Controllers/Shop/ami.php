<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\User;
use App\Model\Payment;
use App\Model\Product;
use App\Model\Kas;
use App\Model\Credit;
use App\Exports\OrdersExport;
use DB;
use PDF;
use Alert;


class KasController extends Controller
{
    protected $folder = 'backend.admin.kas';
    protected $rdr = '/admin/kas';
    private $titlePage='Laporan Kas';
    private $titlePage2='Input Pengeluaran';

    public function index(Request $request)
    {
        $params=[
            'title' => $this->titlePage
        ];
        $data   = Order::all();
        $credit = Credit::all();
        $user = User::all();
        $total = DB::table('orders')->where('payment_id','!=',3)->sum('total');
        $kredit = DB::table('orders')->where('payment_id',3)->sum('total');
        $hasil = $total - $kredit;
        $order = OrderDetail::all();
        $pay   = Payment::all();
        $ord   = OrderDetail::all();
        $pro   = Product::all();
        $role  = DB::table('role')
        ->join('users', 'role.user_id', '=', 'users.id')
        ->get();
        $bayar = DB::table('users')
        ->join('role_payment', 'users.id', '=', 'role_payment.user_id')
        ->get();

        
        return view($this->folder.'.index',$params, compact('role', 'data','ord','pro','total', 'hasil','order', 'credit','user','pay', 'bayar'));

    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show(Kas $kas)
    {
        //
    }
    public function edit(Kas $kas)
    {
        //
    }
    public function update(Request $request, Kas $kas)
    {
        //
    }
    public function destroy($id)
    {
        $data   = Kas::find($id);
        $data->delete();
        return redirect($this->rdr)->with('success', 'Data berhasil di Hapus');
    }
}
