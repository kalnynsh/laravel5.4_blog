@extends ('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

    <h1>Create a Post</h1>

    <hr>
    
    <form>
        
        <div class="form-group">
            
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
            
        </div>
        
        <div class="form-group">
            
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            
        </div>
        
        <div class="form-group">
            
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
            
        </div>
        
        <div class="checkbox">
            
            <label>
                <input type="checkbox"> Check me out
            </label>
            
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
        
    </form>

</div>
@endsection
