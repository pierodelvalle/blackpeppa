$("#formulario").submit(function(event) {

   /* stop form from submitting normally */
   event.preventDefault();
   /* get some values from elements on the page: */
   var $form = $( this ),
       $submit = $form.find( 'input[type="submit"]' ),
       nombre_value = $form.find( 'input[name="nombre"]' ).val(),
       email_value = $form.find( 'input[name="email"]' ).val(),
       empresa_value = $form.find( 'input[name="empresa"]' ).val(),
       telefono_value = $form.find( 'input[name="telefono"]' ).val(),
       mensaje_value = $form.find( 'textarea[name="mensaje"]' ).val(),

       url = $form.attr('action');

   /* Send the data using post */

   var posting = $.post( url, { 
                     nombre: nombre_value,
                     email: email_value,
                     empresa: empresa_value,
                     telefono: telefono_value,
                     mensaje : mensaje_value
                 });

   posting.done(function(data)

   {

       /* Put the results in a div */

       $( "#form-end" ).html(data);
       $("#form-end").show();

       /* Change the button text. */
       $submit.val('¡Listo! Su mensaje ha sido enviado.');  

       /* Disable the button. */
       $submit.attr("disabled", true);

   });

});