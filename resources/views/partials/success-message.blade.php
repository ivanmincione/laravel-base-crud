{{-- imposto un messaggio di successo se l'inserimento dei dati è andato a buon fine --}}

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
