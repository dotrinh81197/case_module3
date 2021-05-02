<div class="container register-form">
    <form action="">
        <div class="form">
       
        <div class="form-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email*" value=""/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            @if ($errors->any())
            @foreach($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
            @endif
            <button type="button" class="btnSubmit">Submit</button>
        </div>
    </div>
    </form>
    
</div>