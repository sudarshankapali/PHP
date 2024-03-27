<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <main class="container-md">
    <header>
      <h1>Edit Expenses!</h1>
    </header>
    <section>
      <div class="card">
        <div class="card-body">
          <form method="get" action="{{route('expense.editBackend')}}">
            <div class="mb-3">
                @foreach($edits as $edit)
                <input type="hidden" name="id" value="{{$edit['id']}}">
              <label class="form-label">Expenses title</label>
              <input type="text" class="form-control" name="title" value="{{$edit['title']}}">

            </div>
            <div class="mb-3">
              <label class="form-label">Amount</label>
              <input type="number" class="form-control" name="amount" value="{{$edit['amount']}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Category</label>
              <input type="text" class="form-control" name="category" value="{{$edit['category']}}">
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
