$(document).delegate('#add', 'click', function () {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/funcionarios/create",
        type: 'GET',
        success: function (data) {
            $('#AddFuncionario').html(data).show();
        },
        error: function () {
            alert("Ocorreu um erro ao abrir o formulario, tente novamente");
        }
    });

});

$(document).delegate('#AddFuncionario .cancel', 'click', function () {
    $('#AddFuncionario').hide();
});

$(document).delegate('.input-tipo select', 'change', function () {
    var $form = $(this).closest('form');

    $form.find('.input-projeto, .input-linguagem').hide();
    $form.find('.input-projeto select, .input-linguagem select').val('').change();

    if ($(this).val() == 'P') {
        $form.find('.input-linguagem').show();
    } else if ($(this).val() == 'A') {
        $form.find('.input-projeto').show();
    }
});

$(document).delegate('#AddFuncionario .confirm', 'click', function () {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: $('#AddFuncionario form').attr('action'),
        type: 'POST',
        data: $('#AddFuncionario form').serialize(),
        dataType: 'json',
        beforeSend: function () {
            $('#AddFuncionario .error-message').html('');
            $('.has-error').removeClass('has-error');
        },
        success: function (data) {
            loadData();
            $('#AddFuncionario').hide();
        },
        error: function (data) {
            $.each(data.responseJSON.errors, function (index, error) {
                $('#AddFuncionario [name="' + index + '"]').closest('.form-group').addClass('has-error');
                $('#AddFuncionario .error-message').append("<p>" + error + "</p>")
            });
        }
    });
});

$(document).ready(function () {
    loadData();
});

$(document).delegate('#filter input', 'input', function () {
    loadData();
});

$(document).delegate('#filter select', 'change', function () {
    loadData();
});

function loadData() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/funcionarios/all",
        data: $('#filter form').serialize(),
        type: 'GET',
        success: function (data) {
            $('#listAjax').html(data);
        },
        error: function () {
            alert("Ocorreu um erro ao carregar os funcionários, recarregue a página");
        }
    })
}

function editFuncionario(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/funcionarios/edit/" + id,
        type: 'GET',
        success: function (data) {
            $('#AddFuncionario').html(data).show();
        },
        error: function () {
            alert("Ocorreu um erro ao abrir o formulario, tente novamente");
        }
    });
}

function removeFuncionario(id) {
    if (confirm("Tem certeza que deseja remover esse funcionário?")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/funcionarios/remove/" + id,
            type: 'POST',
            success: function (data) {
                loadData();
            },
            error: function () {
                alert("Ocorreu um erro ao remover o funcionário, tente novamente");
            }
        });
    }
}