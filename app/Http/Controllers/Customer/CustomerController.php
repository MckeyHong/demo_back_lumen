<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Laravel\Lumen\Routing\ProvidesConvenienceMethods;
use App\Services\Customer\CustomerServices;

class CustomerController extends Controller
{
    private $customerServices;

    public function __construct(CustomerServices $customerServices)
    {
        $this->customerServices = $customerServices;
    }

    /**
     * 取得客戶資料
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->indexValidate($request);
        return $this->responseWithJson($this->customerServices->getCustomer($request->all()));
    }

    /**
     * 列表驗證
     * @param  array $request
     */
    public function indexValidate($request)
    {
        $this->validate($request, [
            'username' => 'alpha_num|min:4|max:20',
        ]);
    }

    /**
     * 新增客戶資料
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->addValidate($request);
        return $this->responseWithJson($this->customerServices->addCustomer($request->all()));
    }

    /**
     * 新增驗證
     * @param  array $request
     */
    public function addValidate($request)
    {
        $this->validate($request, [
            'username' => 'required|alpha_num|min:4|max:20|unique:customer',
            'password' => 'required|alpha_num|min:4|max:20',
            'name'     => 'required|max:30',
            'email'    => 'required|email|max:64',
            'phone'    => 'required|max:20',
            'country'  => 'required|max:30',
        ]);
    }

    /**
     * 修改客戶資料
     * @param  integer                   $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        return $this->responseWithJson($this->customerServices->updateCustomer($id, $request->all()));
    }

    /**
     * 刪除客戶資料
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return $this->responseWithJson($this->customerServices->deleteCustomer($id));
    }    

}
