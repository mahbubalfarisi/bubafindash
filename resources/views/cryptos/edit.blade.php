@extends('insight-layout')
<title>Edit Crypto Transaction</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Edit Crypto Transaction Record
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
            <form method="post" action="{{ route('cryptos.update', $crypto->id) }}">
              @method('PATCH')
              @csrf
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" value={{ $crypto->date }} />
              </div>
              <div class="form-group">
                <label for="balance">Balance</label>
                <input type="number" step="0.0001" class="form-control" name="balance" value={{ $crypto->balance }} />
              </div>
              <div class="form-group">
                <label for="value">Value</label>
                <input type="number" step="0.0001" class="form-control" name="value" value={{ $crypto->value }} />
              </div>
              <button type="submit" class="btn btn-primary">Update Transaction Record</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection