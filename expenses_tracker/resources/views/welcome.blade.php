<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container-md">
        <header>
            <h1>Expenses tracker</h1>
            <form action="{{route('expense.create')}}" method="get">
            <button type="submit" class="btn btn-primary">Add Expenses</button>
            </form>
        </header>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr> -->
                    
                        <!-- <th scope="row">1</th>
                        <td>Something to eat</td>
                        <td>1000</td>
                        <td>Food</td>
                        <td><button class="btn btn-primary">Edit</button></td>
                        <td><button class="btn btn-danger">Delete</button></td> -->
                        @foreach($users as $value)

<tr>

<td>{{ $value->id }}</td>

<td>{{ $value->title }}</td>

<td>{{ $value->amount }}</td>

<td>{{ $value->category }}</td>

<form action="{{route('expense.edit')}}" method="post">
    @csrf
<input type="hidden" value="{{ $value->id }}" name="editID">
<input type="hidden" value="{{ $value->title }}" name="editTitle">
<input type="hidden" value="{{ $value->amount }}" name="editAmount">
<input type="hidden" value="{{ $value->category }}" name="editCategory">
<td><button type="submit" class="btn btn-primary">Edit</button></td>
</form>

<form action="{{route('expense.delete')}}" method="post">
@csrf
    <input type="hidden" value="{{ $value->id }}" name="deleteID">
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
</form>

</tr>

@endforeach
                    <!-- </tr> -->
                    

                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
