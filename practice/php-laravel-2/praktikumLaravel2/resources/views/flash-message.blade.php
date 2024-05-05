@if ($message = Session::get('success'))
<strong>{{ $message }}</strong>
@endif

@if ($errors->any())
<strong>Data tidak valid</strong>
@endif
