<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >


        <title></title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
     @foreach ($evenements as $evenement)
         <p> {{ $evenement->titre }} </p>
         <form action="{{ route('evenements.like') }}" id="form-js">
            <div id="count-js"> {{ $evenement->likes->count() }} likes </div>
            <input type="hidden"id="evenement-id-js"  value="{{ $evenement->id }}" />
            <button type="submit"> J'aime </button>
         </form>
         <br/>
     @endforeach

     <script>
      const forms = document.querySelectorAll('#form-js');
      forms.forEach( form =>{
          form.addEventListener('submit', function(e){
              e.preventDefault();

              const url = this.getAttribute('action');
              const token = document.querySelector('meta[name="csrf-token"]').content ;
              const evenementId = this.querySelector('#evenement-id-js').value ;
              const count = this.querySelector('#count-js') ;
              console.log(evenementId);

              fetch(url,{
                  headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-TOKEN' : token
                  },
                    method : 'post',
                    body : JSON.stringify({
                        id : evenementId
                    })
              }).then( response => {
                        response.json().then(data =>{
                            count.innerHTML = data.count + ' like(s)';
                        })
              }).catch (error => {
                  console.log(error)
            });

          });

      });

     </script>


    </body>
</html>

