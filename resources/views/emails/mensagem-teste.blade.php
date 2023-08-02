<x-mail::message>
# Testando Recurso de envio de email com markdown mailables

Essa mensagem está no contexto do Curso Completo do Desenvolvedor Laravel

<x-mail::button :url="''">
    Texto do botão
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
