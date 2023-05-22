@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Account Name</th>

                    <th>Employee Names</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>

                        <td>
                            <a style="text-decoration: none;color:black" href="{{ route('accounts.show', $account->id) }}">
                                {{ $account->name }}
                            </a>
                        </td>

                        <td>
                            {{-- @php
                                $employee = $account->employees;
                            @endphp --}}
                            @foreach ($account->employees as $employee)

                             <a style="text-decoration: none;color:black"
                                    href="{{ route('employees.show', $employee->id) }}">
                                    {{ $employee->name }}
                                </a>
                                <br>
                            @endforeach
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
