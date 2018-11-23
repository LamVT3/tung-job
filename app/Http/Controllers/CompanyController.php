<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;

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

        return response()->json(['type' => 'success', 'url' => route('manage-company'), 'message' => 'Company has been created!']);
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
        $flag_user = false;
        $total = 3;
        $sub_rating['growth'] = 3.5;
        $sub_rating['culture'] = 3.5;
        $sub_rating['leader'] = 3.5;
        $sub_rating['work'] = 3.5;
        $sub_rating['reputation'] = 3.5;


        $data = Company::where('slug_company_name', $slug)->first();
        $user = Auth::user();
        if($user != null){
            if($data->user_rating!=null){
                $flag_user = in_array($user->_id,$data->user_rating);
                $total = round($data->total_rating,1);
                $sub_rating= $data->sub_rating;
            }
        }

        return view('pages.company.overview-company', compact(
            'data','flag_user','total','sub_rating'
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
        $company->is_deleted    = '1';

        $company->save();

        return response()->json(['type' => 'success', 'message' => 'Company has been deleted!']);

    }

	public function reviewCompany(){
		$data = Company::orderBy('created_at', 'desc')->where('is_deleted','<>','1')->paginate((int)env('APP_PAGINATE',10));
		return view('pages.company.review-company', compact('data'));
	}

	public function searchReviewCompany(Request $request){
        $query = $request->get('query','');
        $result = Company::where('company_name','LIKE','%'.$query.'%')->where('is_deleted','<>','1')->get();

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

    /**
     *
     */
    public function  updateRating(){
        $company_id = request('company_id');

        $company = Company::where('_id',$company_id)->first();

        $user = Auth::user()->_id;
        $number_1 = request('number-1');
        $number_2 = request('number-2');
        $number_3 = request('number-3');
        $number_4 = request('number-4');
        $number_5 = request('number-5');

        $user_rating = $company->user_rating;
        $total_rating = $company->total_rating;
        $sub_rating = $company->sub_rating;



        if($total_rating != null){
            $count_user = count($user_rating);
            $sub_growth = (($number_1 * $count_user) + $sub_rating['growth'])/($count_user + 1);
            $sub_culture = (($number_2 * $count_user) + $sub_rating['culture'])/($count_user + 1);
            $sub_leader = (($number_3 * $count_user) + $sub_rating['leader'])/($count_user + 1);
            $sub_work = (($number_4 * $count_user)+ $sub_rating['work'])/($count_user + 1);
            $sub_reputation = (($number_5 * $count_user) + $sub_rating['reputation'])/($count_user + 1);

            $total = (($total_rating * $count_user) + (($sub_growth + $sub_culture + $sub_leader + $sub_work + $sub_reputation)/5))/($count_user + 1);
        }else{
            $sub_growth = $number_1;
            $sub_culture = $number_2;
            $sub_leader =  $number_3;
            $sub_work = $number_4;
            $sub_reputation = $number_5;

            $total = ($sub_growth + $sub_culture + $sub_leader + $sub_work + $sub_reputation)/5;

        }

        $total = round($total,2);
        $number = Array();
        $number['growth'] = round($sub_growth,2) ;
        $number['culture'] = round($sub_culture,2) ;
        $number['leader'] = round($sub_leader,2) ;
        $number['work'] = round($sub_work,2) ;
        $number['reputation'] = round($sub_reputation,2) ;



        Company::saveRating($company_id, $user, $total,$number);

        return redirect()->back();
    }
}
