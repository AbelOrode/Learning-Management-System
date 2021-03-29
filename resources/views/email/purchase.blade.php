<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Abel Orode" content="">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
    <body>
        <div class="card">
            <div class="card-header">
                <p>LMS - a00288615</p>
            </div>
            <div class="card-body">
                <span> Thank you for purchasing {{ $paymentInfo->transactions[0]->item_list->items[0]->name }}</span>
            </div>
        </div>
    </body>
</html>
