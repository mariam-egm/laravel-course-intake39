 @extends('layouts.app')

 @section('content')
    <form>
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
 