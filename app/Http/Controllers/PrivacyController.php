<?php
 
namespace App\Http\Controllers;
use App\Models\Privacy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Repository\PrivacyRepositoryInterface;

class PrivacyController extends Controller
{

    protected $newprivacy;

    public function __construct(PrivacyRepositoryInterface $newprivacy)
    {
        $this->newprivacy = $newprivacy;
    }


    public function index()
    {
        $privices = $this->newprivacy->AllPrivices();
        return view('admin.privices.privices',compact('privices'));
    }// End Method

    public function store(Request $request)
    {
        return $this->newprivacy->AddPrivicy($request);
    }// End Method

    public function update(Request $request)
    {
        return $this->newprivacy->UpdatePrivicy($request);
    }// End Method

    public function destroy(Request $request)
    {
        return $this->newprivacy->DeletePrivicy($request);
    }// End Method
}
