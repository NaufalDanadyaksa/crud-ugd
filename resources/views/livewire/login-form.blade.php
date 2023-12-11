<div>
    @if (Session::get('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success" >{{ Session::get('success') }}</div>
    @endif
    <form action="./" method="post" autocomplete="off" novalidate="" wire:submit.prevent="LoginHandler()">
        <div class="mb-3">
            <label class="form-label"> Username</label>
            
            <input type="text" class="form-control" placeholder="Enter email or username" autocomplete="off"  wire:model="name">
            @error('login_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
       
        <div class="mb-2">
            <label class="form-label">
                Password
                <span class="form-label-description">
                    <a href="{{route('forgot-password')}}">I forgot password</a>
                </span>
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Your password" autocomplete="off" wire:model="password">
              
               
            </div>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Sign in</button>
        </div>
    </form>
   
</div>
