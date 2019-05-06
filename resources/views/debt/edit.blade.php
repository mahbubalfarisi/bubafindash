@extends('insight-layout')
<title>Edit Debt</title>
@section('content')
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Edit Debt
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
            <form method="post" action="{{ route('debts.update', $debt->id) }}">
              @method('PATCH')
              @csrf
              <div class="form-group">
                <label for="purpose">Purpose</label>
                <input type="text" class="form-control" name="purpose" value={{ $debt->purpose }} />
              </div>
              <div class="form-group">
                <label for="creditor">Creditor</label>
                <input type="text" class="form-control" name="creditor" value={{ $debt->creditor }} />
              </div>
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" name="amount" value={{ $debt->amount }} />
              </div>
              <div class="form-group">
                <label for="remaining">Remaining</label>
                <input type="number" class="form-control" name="remaining" value={{ $debt->remaining }} />
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection