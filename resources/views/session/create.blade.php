@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8">
        
        <h1>Register</h1>
        
        <form name="registration" method="POST" class="">
            
            {{ csrf_field() }}
            
            <div class="form-group">
                
                <label for="name">Name:</label>
                
                <input type="text" class="form-control" 
                       id="name" name="name">
                
            </div>
                
            <div class="form-group">
                    
                <label for="email">Email:</label>
                    
                <input type="email" class="form-group"
                           id="email" name="email">
                    
            </div>
                
            <div class="form-group">
                    
                <label for="password">Password:</label>
                    
                <input type="password" class="form-group"
                           id="password" name="password">
                    
            </div>
                
                
            
            
            
        </form>
        
    </div>

@endsection
