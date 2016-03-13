<h1 class="titulos">Nossos <b>clientes:</b></h1>
<div class="central">
    @foreach($data_view['clientes'] as $cliente)
        <a class="cliente" href="depoimentos/{{$cliente['id']}}"><img src="uploads/{{$cliente['logo']}}" alt="{{$cliente['nome_empresa']}}"/></a>
    @endforeach
</div>