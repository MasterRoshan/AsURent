@extends('../layouts.app')

@section('content')

<div class="panel-body">
    <div class="row">
    <form action="{{ url('contract/'.$contract->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
    
        <!-- Task Name -->
        <div class="form-group">
        <div class="form-row">
            
            
            <div class="col-sm-6">
                <label for="contract-name" class="col-sm-12">Name:</label>
                <input type="text" name="name" id="contract-name" class="form-control" value="{{$contract->name}}">
            </div>
            
            
            <div class="col-sm-6">
                <label for="contract-description" class="col-sm-12">Description:</label>
                <input type="text" name="description" id="contract-description" class="form-control" value="{{$contract->description}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6">
                <label for="contract-rent" class="col-sm-12">Monthly Rent:</label>
                <input type="number" name="base_rate" value="{{$contract->base_rate}}" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency form-control" id="contract-base_rate">
            </div>
        </div>
        </div>
    
        <!-- Add Task Button -->
        <div class="form-group">
            <div align="center">
                <button type="submit" class="btn btn-default">
                    Submit
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
@stop