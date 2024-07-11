<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/home.css">
    <title>G-center - Realizar pago</title>
    <script src="https://www.paypal.com/sdk/js?client-id=ARkmpjNvB5JW8qAEqtztqSkXVgT1uotulLQvc26W1q_kyp8Ht6nFs2uvjz1yLZ-rIVOnmlXmYSYRqwdt&currency=USD"></script>

</head>

<body>
    <div class="paypal-container">
        <div id="dropdown-wrapper" class="dropdown-wrapper">
            <div class="dropdown-container-box">
                <div class="dropdown-box-content">
                    <div class="dropdown-form-container">
                        <div class="login-header-container">
                            <div class="login-title-container">
                                <h1 class="login-title">Elige método de pago</h1>
                            </div>
                        </div>
                        <div id="paypal-button-container" class="paypal-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        paypal.Buttons({
            style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 75
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                actions.order.capture().then(function(detalles) {
                    console.log(detalles)
                });
            },

            onCancel: function(data) {
                alert("Pago cancelado");
                console.log(data);
            }

        }).render('#paypal-button-container');
    </script>

</body>

</html>