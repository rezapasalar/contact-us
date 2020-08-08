<form action="/contact" method="post">
    <h4>{{ config("ContactUs.title") ?? "Login Form" }}</h4>

    <hr>

    @csrf

    @include("contactUsPackage.formErrors")

    @include('flash::message')

    <div class="form-group">
        <label>Fullname</label>
        <input name="name" value="{{ old('name') }}" class="form-control" {{ config('ContactUs.autoFocus') ? 'autofocus' : '' }}>        
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Subject</label>
        <input name="subject" class="form-control">
    </div>

    <div class="form-group">
        <label>Message</label>
        <textarea name="body" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-{{ config('ContactUs.style.bg-button') }} text-{{ config('ContactUs.style.text-color-button') }}">Send</button>
        <a href="/contacts" class="btn btn-primary">Contacts List</a>
    </div>
</form>