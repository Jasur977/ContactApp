<?php

namespace App\Scopes;

class ContactSearchScope extends SearchScope
{
    protected $searchColumns = ['company.name', 'first_name', 'last_name', 'email'];
}
