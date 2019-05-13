@extends('insight-layout')
<title>Add Gopay Transaction Record</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Add Gopay Transaction Record
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
            <form method="post" action="{{ action('GopayController@store') }}">
              <div class="form-group">
                @csrf
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"/>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description"/>
              </div>
              <div class="form-group">
                <label for="credit">Credit</label>
                <input type="number" step="0.01" class="form-control" name="credit"/>
              </div>
              <div class="form-group">
                <label for="debit">Debit</label>
                <input type="number" step="0.01" class="form-control" name="debit"/>
              </div>
              <button type="submit" class="btn btn-primary">Add Transaction Record</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection