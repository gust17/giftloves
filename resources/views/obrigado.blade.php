@extends('site.padrao2')
@section('miolo')
    <section class="section bg-light">
        <div class="container">
            <h2>Boas-vindas à {{$loja->name}}!</h2>
            <p>Olá {{$responsavel->user->name}} e equipe,</p>
            <p>É um prazer dar as boas-vindas a vocês na Gift&love! Estamos ansiosos para colaborar e proporcionar uma experiência excepcional. Em breve, alguém da nossa equipe entrará em contato para discutir detalhes e garantir que sua experiência conosco seja a melhor possível.</p>
            <p>Se houver alguma dúvida ou necessidade imediata, não hesite em nos contatar. Estamos aqui para ajudar!</p>
            <a class="btn btn-success" target="_blank" href="https://api.whatsapp.com/send?phone=5596984085079">Contato</a> Whatsapp/Telefone : (96) 98408-5079
            <p>Atenciosamente,<br>
               Equipe Gift&Love<br>

        </div>
    </section>

@endsection
