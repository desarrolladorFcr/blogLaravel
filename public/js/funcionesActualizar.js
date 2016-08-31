var funActualizar = {
    inicio: function () {

        $categorias = $('#categoriasBlog').val();


        $catgs = JSON.parse($categorias);
        console.log($categorias);
        for (var $i = 0; $i < $catgs.length; $i++) {
            $check = "#" + $catgs[$i]['idcategorias'];
            $($check).attr('checked', 'checked');

        }

    }
}

$(document).ready(funActualizar.inicio);


