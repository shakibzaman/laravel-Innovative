@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.projectExpense.title') }}
        </div>

        <div class="card-body">
            <div class="mb-2">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.id') }}
                        </th>
                        <td>
                            {{ $received->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.title_singular') }}
                        </th>
                        <td>
                            {{ $received->projectName->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.entry_date') }}
                        </th>
                        <td>
                            {{ $received->entry_date->format('l j F Y') }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.amount') }}
                        </th>
                        <td>
                            {{ $received->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.bank_name') }}
                        </th>
                        <td>
                            {{ $received->bank_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.cheque') }}
                        </th>
                        <td>
                            {{ $received->cheque }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.paid') }}
                        </th>
                        <td>
                            {{ $received->paid_by}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.received_by') }}
                        </th>
                        <td>
                            {{ $received->userName->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectReceived.fields.note') }}
                        </th>
                        <td>
                            {{ $received->note }}
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>


        </div>
    </div>
@endsection
