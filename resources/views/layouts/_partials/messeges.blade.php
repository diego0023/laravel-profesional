@if ($messeges = Session::get('success'))
    <div style="padding: 15px; background-color: green; color: beige" >
    <p> {{ $messeges}}</p>
    </div>
@endif
@if ($messeges = Session::get('danger'))
    <div style="padding: 15px; background-color: red; color: beige" >
    <p> {{ $messeges }}</p>
    </div>
@endif
