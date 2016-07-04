@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add transaction</div>

                    <form class="form-horizontal" method="post" style="margin-top: 30px;">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Account's name</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="account">
                                    @foreach($accounts as $key=>$account)
                                        <option value="{{$account->id}}">{{$account->name." (".$account-> type.")"}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="type">
                                    <option value="plus">+</option>
                                    <option value="minus">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount" class="col-sm-2 control-label">Amount</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="amount" name="amount" step="0.01">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <button type="submit" class="btn btn-default">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
