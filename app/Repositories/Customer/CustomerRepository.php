<?php

namespace App\Repositories\Customer;

use App\Entities\Customer\Customer;

class CustomerRepository
{
    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * 取得客戶資料
     * @param  array $request
     * @return array
     */
    public function getCustomer(array $request = [])
    {
        if (isset($request['username']) && $request['username'] != '') {
            return $this->customer->where('username', 'LIKE', '%'.$request['username'].'%')->all();
        } else {
            return $this->customer->all();
        }
    }

    /**
     * 新增客戶資料
     * @param  array $request
     * @return boolean
     */
    public function addCustomer(array $request = [])
    {
        return $this->customer->create($request);
    }

    /**
     * 修改客戶資料
     * @param  integer $id
     * @param  array   $request
     * @return boolean
     */
    public function updateCustomer($id, array $request = [])
    {
        return $this->customer->where('id', $id)->update($request);
    }

    /**
     * 刪除客戶資料
     * @param  integer $id
     * @return boolean
     */
    public function deleteCustomer($id)
    {
        return $this->customer->where('id', $id)->delete();
    }
}
