<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Distributors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class distributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['distributionpending'] = Distributors::orderBy('created_at', 'desc')->where('is_approve', '=', '1')->where('is_delete', '=', '0')->paginate(10);

        $data['distributionaccept'] = Distributors::orderBy('created_at', 'desc')->where('is_approve', '=', '0')->where('is_delete', '=', '0')->paginate(10);

        return view('admin.inquiry.distributionreq', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt = Distributors::find($id);
        $dlt->is_delete = '1';
        $dlt->update();
        return redirect('/admin/distributionrequests')->with('success', 'Distributor Request Deleted Successfully');
    }

    public function accept($id){
        $accept = Distributors::find($id);
        $accept->is_approve = '0';
        $accept->update();
        return redirect('/admin/distributionrequests')->with('success', 'Distributor Request Accepted Successfully');
    }
    public function reject($id){
        $reject = Distributors::find($id);
        $reject->is_approve = '1';
        $reject->update();
        return redirect('/admin/distributionrequests')->with('warning', 'Distributor Request Rejected Successfully');
    }

    public function searchdistributor(Request $request){
        $data['distributionpending'] = DB::table('distributors_form')
    ->where('company_name', '!=', Null)
    ->where(function ($query) use ($request) {
        if (($s = $request->s)) {
            $query->orWhere('company_name', 'LIKE', '%' . $s . '%')
                ->orWhere('company_number', 'LIKE', '%' . $s . '%')
                ->orWhere('company_website', 'LIKE', '%' . $s . '%')
                ->orWhere('officephone', 'LIKE', '%' . $s . '%')
                ->orWhere('pannumber', 'LIKE', '%' . $s . '%')
                ->orWhere('gstnumber', 'LIKE', '%' . $s . '%')
                ->orWhere('distributor_services', 'LIKE', '%' . $s . '%')
                ->orWhere('area', 'LIKE', '%' . $s . '%')
                ->orWhere('applicant_name', 'LIKE', '%' . $s . '%')
                ->orWhere('designation', 'LIKE', '%' . $s . '%')
                ->orWhere('applicant_number', 'LIKE', '%' . $s . '%');
        }
    })
    ->where('is_approve', '=', '1')
    ->where('is_delete', '=', '0')
    ->paginate(10);


        $data['distributionaccept'] = DB::table('distributors_form')
    ->where('company_name', '!=', Null)
    ->where(function ($query) use ($request) {
        if (($s = $request->s)) {
            $query->orWhere('company_name', 'LIKE', '%' . $s . '%')
                ->orWhere('company_number', 'LIKE', '%' . $s . '%')
                ->orWhere('company_website', 'LIKE', '%' . $s . '%')
                ->orWhere('officephone', 'LIKE', '%' . $s . '%')
                ->orWhere('pannumber', 'LIKE', '%' . $s . '%')
                ->orWhere('gstnumber', 'LIKE', '%' . $s . '%')
                ->orWhere('distributor_services', 'LIKE', '%' . $s . '%')
                ->orWhere('area', 'LIKE', '%' . $s . '%')
                ->orWhere('applicant_name', 'LIKE', '%' . $s . '%')
                ->orWhere('designation', 'LIKE', '%' . $s . '%')
                ->orWhere('applicant_number', 'LIKE', '%' . $s . '%');
        }
    })
    ->where('is_approve', '=', '0')
    ->where('is_delete', '=', '0')
    ->paginate(10);
        return view('admin.inquiry.distributionreq',compact('data'));
    }
}
