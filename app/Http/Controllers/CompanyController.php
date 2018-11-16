<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
	        'index', 'detail', 'reviewCompany', 'searchReviewCompany','resultSearchCompany'

        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->get_list_company();

        return view('pages.company.index', compact(
            'data'
        ));
    }

    /**
     * Show form create a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFormCreate()
    {

        return view('pages.company.create');
    }

    /**
     * Create a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role !== "ADMIN") return redirect()->route('home');
        $request = request();

	    $company_logo = time().'.'.$request->company_logo->getClientOriginalExtension();

	    $company = new Company();

        $company->email   = $request->email;
        $company->description   = $request->description;
	    $company->company_logo  = $company_logo;
        $company->company_name  = $request->company_name;
        $company->company_location  = $request->company_location;
        $company->company_country   = $request->company_country;
        $company->company_size_from = $request->company_size_from;
        $company->company_size_to   = $request->company_size_to;
        $company->company_url   = $request->company_url;
        $company->created_by    = auth()->user()->name;
        $company->created_date  = date('Y-m-d H:i:s');
	    $company->slug_company_name = str_slug($request->company_name).'-'.uniqid();

	    $request->company_logo->move(public_path('images'), $company_logo);

	    $company->save();

        return response()->json(['type' => 'success', 'url' => route('home'), 'message' => 'Company has been created!']);
    }

    /**
     * Manage company.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $data = $data = $this->get_list_company();

        return view('pages.company.manage', compact(
            'data'
        ));
    }

    /**
     * Manage company.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $data = Company::where('slug_company_name', $slug)->first();

        return view('pages.company.overview-company', compact(
            'data'
        ));
    }

    /**
     * get list company desc.
     *
     * @return \Illuminate\Http\Response
     */
    private function get_list_company()
    {
        $data = Company::orderBy('created_at', 'desc')->paginate((int)env('APP_PAGINATE',10));

        return $data;
    }

    /**
     * Show form edit a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function showFormEdit($id)
    {
        $data = Company::find($id);

        return view('pages.company.edit', compact(
            'data'
        ));
    }

    /**
     * Edit a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        $request = request();

        if ($request->company_logo)
        {
	        $company_logo = time().'.'.$request->company_logo->getClientOriginalExtension();
	        $company->company_logo  = $company_logo;
	        $request->company_logo->move(public_path('images'), $company_logo);
        }

        $company->description   = $request->description;
        $company->email         = $request->email;
        $company->company_name  = $request->company_name;
        $company->company_location  = $request->company_location;
        $company->company_country   = $request->company_country;
        $company->company_size_from = $request->company_size_from;
        $company->company_size_to   = $request->company_size_to;
        $company->company_url   = $request->company_url;
        $company->created_by    = auth()->user()->name;
        $company->created_date  = date('Y-m-d H:i:s');
	    $company->slug_company_name = str_slug($request->company_name).'-'.uniqid();

        $company->is_deleted    = $request->is_deleted;

        $company->save();

        return response()->json(['type' => 'success', 'url' => route('manage-company'), 'message' => 'Company has been saved!']);

    }

    /**
     * Delete a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {

        $request = request();
        $company                = Company::find($request->id);
        $company->is_deleted    = 1;

        $company->save();

        return response()->json(['type' => 'success', 'message' => 'Company has been deleted!']);

    }

	public function reviewCompany(){
		$data = Company::orderBy('created_at', 'desc')->paginate((int)env('APP_PAGINATE',10));
		return view('pages.company.review-company', compact('data'));
	}

	public function searchReviewCompany(Request $request){
        $query = $request->get('query','');
        $result = Company::where('company_name','LIKE','%'.$query.'%')->get();

        $keyword = array();
        foreach ($result as $value){
            $keyword[] = $value->company_name;
        }
        //
        $company_name = array_unique($keyword);
        return response() ->json($company_name);
    }

    public function resultSearchCompany(){
        $company_name = request('company_name');

        $data = Company::searchCompany($company_name);

        return view('pages.company.result-search-company', compact('data'));
    }
}
