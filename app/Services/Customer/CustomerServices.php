<?php

namespace App\Services\Customer;

use App\Repositories\Customer\CustomerRepository;

class CustomerServices
{
    private $customerRepository;

    public function __construct(CustomerRepository $customer)
    {
        $this->customerRepository = $customer;
    }

    /**
     * 取得客戶資料
     * @param  array $request
     * @return array
     */
    public function getCustomer(array $request = [])
    {
        try {
            return ['result' => $this->customerRepository->getCustomer($request)];
        } catch (\Exception $e) {
            // 其他錯誤
            return ['result' => self::ERROR, 'code' => ($e->getCode() ? $e->getCode() : config('errorCode.otherError')), 'msg' => $e->getMessage()];
        }
    }

    /**
     * 新增客戶資料
     * @param  array $request
     * @return array
     */
    public function addCustomer(array $request = [])
    {
        try {
            return ['result' => $this->customerRepository->addCustomer($request)];
        } catch (\Exception $e) {
            // 其他錯誤
            return ['result' => self::ERROR, 'code' => ($e->getCode() ? $e->getCode() : config('errorCode.otherError')), 'msg' => $e->getMessage()];
        }
    }

    /**
     * 修改客戶資料
     * @param  integer $id
     * @param  array   $request
     * @return array
     */
    public function updateCustomer($id, array $request = [])
    {
        try {
            return ['result' => $this->customerRepository->updateCustomer($id, $request)];
        } catch (\Exception $e) {
            // 其他錯誤
            return ['result' => self::ERROR, 'code' => ($e->getCode() ? $e->getCode() : config('errorCode.otherError')), 'msg' => $e->getMessage()];
        }
    }

    /**
     * 刪除客戶資料
     * @param  integer $id
     * @return array
     */
    public function deleteCustomer($id)
    {
        try {
            return ['result' => $this->customerRepository->deleteCustomer($id)];
        } catch (\Exception $e) {
            // 其他錯誤
            return ['result' => self::ERROR, 'code' => ($e->getCode() ? $e->getCode() : config('errorCode.otherError')), 'msg' => $e->getMessage()];
        }
    }

}
