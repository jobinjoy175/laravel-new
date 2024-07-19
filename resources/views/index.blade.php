<!DOCTYPE html>
<html>
<head>
    <title>Master String Checker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Master String Check</h2>
    <form action="{{ route('checking') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="master_string">Master Strings</label>
            <input type="text" class="form-control" id="master_string" name="master_string" required>
        </div>
        <div class="form-group">
            <label for="string_1">String 1</label>
            <input type="text" class="form-control" id="string_1" name="string_1" required>
        </div>
        <div class="form-group">
            <label for="string_2">String 2</label>
            <input type="text" class="form-control" id="string_2" name="string_2" required>
        </div>
        <div class="form-group">
            <label for="string_3">String 3</label>
            <input type="text" class="form-control" id="string_3" name="string_3" required>
        </div>
        <div class="form-group">
            <label for="string_4">String 4</label>
            <input type="text" class="form-control" id="string_4" name="string_4" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Strings</button>
    </form>

    @if(isset($results))
        <div class="mt-5">
            <h4>Results:</h4>
            <ul>
                @foreach($results as $string => $result)
                    <li>{{ $string }}: {{ $result }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>