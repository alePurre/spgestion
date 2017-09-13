$(document).ready(function () {

    $(".headroom").headroom({
        "tolerance": 20,
        "offset": 50,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });
    
    //validacion frmContacto
    $('#frmContacto').submit(validarContacto);
    $('span.help-error').fadeOut();
});

function validarContacto() {
    var nom = $('input[name=nombre]');
    var ape = $('input[name=apellido]');
    var email = $('input[name=email]');
    var tel = $('input[name=telefono]');
    var consulta = $('textarea[name=consulta]');

    if(isEmpty(consulta) | isEmpty(tel) | isEmpty(email) | isEmpty(ape) | isEmpty(nom)) {
        return false;
    } 
    
    if (minLength(consulta, 4) | minLength(ape, 3) | minLength(nom, 3))
    {
        return false;
    }
    
    if(isEmail(email)) {
        return false;
    }
}

/**
 * Scroll del btn informacion del home
 */
$("#btnInfo").on("click", function () {
    var posicion = $(".jumbotron").offset().top;
    $("html, body").animate({
        scrollTop: posicion - 100
    }, 1500);
});

//funciones autonomas - GonzaH

/**
 * Comprueba si el campo esta vacio
 * 
 * @param {input} field
 * @returns {Boolean}
 */
function isEmpty(field) {
    
    //obtengo el name del input
    var nomField = field.attr('name');
    var txtMensaje = 'Ingrese un ' + nomField;

    if ($.trim(field.val()) === '') {
        //obtengo el padre del input que se le pasa por parametro
        field.parent().attr('class', 'form-group has-error');
        field.parent().children('span.help-block').text(txtMensaje).fadeIn();
        field.focus();
        return true;
    } else {
        field.parent().attr('class', 'form-group');
        field.parent().children('span.help-block').css('display', 'none');
        return false;
    }
}

/**
 * Comprueba que el campo tenga mas de x caracteres
 * 
 * @param {input} field
 * @param {int} num
 * @returns {Boolean}
 */

function minLength(field, num) {

    var nomField = field.attr('name');
    var txtMensaje = 'El campo ' + nomField + ' tiene que superar los ' + num + ' caracteres de longitud';

    if (field.val().length < num) {
        
        field.parent().attr('class', 'form-group has-error');
        field.parent().children('span.help-block').text(txtMensaje).fadeIn();
        field.focus();
        return true;
    } else {
        field.parent().attr('class', 'form-group');
        field.parent().children('span.help-block').css('display', 'none');
        return false;
    }
}

/**
 * Comprueba que el campo tenga menos de  x caracteres
 * 
 * @param {input} field
 * @param {int} num
 * @returns {Boolean}
 */

function maxLength(field, num) {

    var nomField = field.attr('name');
    var txtMensaje = 'El campo ' + nomField + ' no puede superar los ' + num + ' caracteres de longitud';

    if (field.val().length > num) {
        
        field.parent().attr('class', 'form-group has-error');
        field.parent().children('span.help-block').text(txtMensaje).fadeIn();
        field.focus();
        return true;
    } else {
        field.parent().attr('class', 'form-group');
        field.parent().children('span.help-block').css('display', 'none');
        return false;
    }
}

/**
 * Comprueba si lo ingresado en el campo es un email
 * 
 * @param {input} field
 * @returns {Boolean}
 */
function isEmail(field) {
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    var txtMensaje = 'Ingrese un email valido';

    if (!regex.test(field.val())) {
        
        field.parent().attr('class', 'form-group has-error');
        field.parent().children('span.help-block').text(txtMensaje).fadeIn();
        field.focus();
        return true;
    } else {
        field.parent().attr('class', 'form-group');
        field.parent().children('span.help-block').css('display', 'none');
        return false;
    }
}