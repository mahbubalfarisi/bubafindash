@extends('insight-layout')
<title>Edit Jenius Flexi Server Transaction</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Edit Jenius Flexi Server Transaction Record
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
            <form method="post" action="{{ route('flexi.update', $flexi->id) }}">
              @method('PATCH')
              @csrf
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" value={{ $flexi->date }} />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" value={{ $flexi->description }} />
              </div>
              <div class="form-group">
                <label for="credit">Credit</label>
                <input type="number" class="form-control" name="credit" value={{ $flexi->credit }} />
              </div>
              <div class="form-group">
                <label for="debit">Debit</label>
                <input type="number" class="form-control" name="debit" value={{ $flexi->debit }} />
              </div>
              <button type="submit" class="btn btn-primary">Update Transaction Record</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection