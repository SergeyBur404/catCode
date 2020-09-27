<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание CatCode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="form-group">
                <label for="address">Укажите адрес</label>
                <input id="address" class="form-control" style="width:100%;" placeholder="Введите адрес" name="address"
                    type="text" />
            </div>
        </div>
        <div class="row" id="responce" style=" display:none">
            <p>Вы выбрали адрес: <span id="adr">
                    <p></p>
                </span></p>
            <div class="col">
                <button class="btn btn-info" id="copy">
                    Скопировать адрес в буфер обмена
                </button>
            </div>

        </div>
    </div>





    <script>
        $("#address").suggestions({
            token: "dbfdb5c26ea05ad09f319b6e7f75096adbdd6530",
            type: "ADDRESS",
            /* Вызывается, когда пользователь выбирает одну из подсказок */
            onSelect: function (suggestion) {
                console.log(suggestion);
                $("#adr").empty();
                $("#responce").fadeIn();
                $("#adr").append(suggestion.unrestricted_value);
                $('#copy').click(function () {
                    var $adr = $("<input>");
                    $("body").append($adr);
                    $adr.val($('#adr').text()).select();
                    document.execCommand("copy");
                    alert('Адрес: ' +suggestion.value+ ' скопирован!');
                    $adr.remove();
                    
                });
            }
        });
    </script>
</body>

</html>
