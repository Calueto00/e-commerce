
@if ($errors->any())

    @foreach ($errors->all() as $erro)
            {{$erro}} <br>
    @endforeach

@endif
<form action="{{route('users.store')}}" method="post">
    @csrf
    Nome: <br> <input type="text" name="firstName">  <br>
    SobreNome: <br> <input type="text" name="lastName">  <br>
    Email: <br> <input type="text" name="email">  <br>
    Senha: <br> <input type="password" name="password"> <br>

    <button type="submit">Cadastrar</button>
</form>
