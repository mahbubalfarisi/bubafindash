@extends('insight-layout')
<title>Add Mandiri Tabungan Rencana Transaction Record</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Add Mandiri Tabungan Rencana Transaction Record
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
            <form method="post" action="{{ action('MtrController@store') }}">
              <div class="form-group">
                @csrf
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date"/>
              </div>
              <div class="form-group">
                <label for="credit">Credit</label>
                <input type="number" step="0.01" class="form-control" name="credit"/>
              </div>
              <button type="submit" class="btn btn-primary">Add Transaction Record</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection