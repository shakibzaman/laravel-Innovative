@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Search
        </div>
        <div class="card-body">
            <div class="form-group ">
                <label for="expense_category">{{ trans('cruds.project.title') }}</label>
                <select name="pro_id" id="pro_id" class="form-control select2">
                    <option value=""><---Select---></option>
                    @foreach($projects as $id => $project)
                        <option value="{{$project->id }}" >{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="position: relative">
                <label for="expense_category">{{ trans('cruds.project.title') }}</label>
                <select name="cat_id" id="cat_id" class="form-control select2">
                </select>
            </div>
        </div>
    </div>
{{--    <script--}}
{{--        src="https://code.jquery.com/jquery-3.4.1.min.js"--}}
{{--        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="--}}
{{--        crossorigin="anonymous"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            $(document).on('change','#pro_id',function () {--}}
{{--                //console.log("Is it works");--}}
{{--                var pro_id=$(this).val();--}}
{{--                //console.log(pro_id);--}}
{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    url:'{!! URL::to('findCatName') !!}',--}}
{{--                    data:{'id':pro_id},--}}
{{--                    success:function (data) {--}}
{{--                        console.log('success');--}}
{{--                        console.log(data);--}}
{{--                    },--}}
{{--                    error:function () {--}}

{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}

@endsection

