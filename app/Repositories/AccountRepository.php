<?php

namespace App\Repositories;

use App\Interfaces\AccountRepositoryInterface;
use App\Models\Account;

class AccountRepository implements AccountRepositoryInterface
{
    public function getAllAccount()
    {
        return Account::all();
    }

    public function getAccountById($id)
    {
        return Account::findOrFail($id);
    }

    public function deleteAccount($accountId)
    {
        Account::destroy($accountId);
    }

    public function createAccount($accounts)
    {
        return Account::create($accounts);
    }

    public function updateAccount($id, array $newDetails)
    {
        return Account::whereId($id)->update($newDetails);
    }

    // public function getFulfilledAccounts()
    // {
    //     return Account::where('is_fulfilled', true);
    // }
}
