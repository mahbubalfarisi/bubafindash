@extends('insight-layout')
<title>Add Debt</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Add Debt
          </div>
          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div><br />
            @endif
            <form method="post" action="{{ action('DebtController@store') }}">
              <div class="form-group">
                @csrf
                <label for="purpose">Purpose</label>
                <input type="text" class="form-control" name="purpose"/>
              </div>
              <div class="form-group">
                <label for="creditor">Creditor</label>
                <input type="text" class="form-control" name="creditor"/>
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount"/>
              </div>
              <div class="form-group">
                <label for="remaining">Remaining</label>
                <input type="number" class="form-control" name="remaining"/>
              </div>
              <button type="submit" class="btn btn-primary">Add Debt</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection