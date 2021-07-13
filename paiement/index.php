<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formation en création de tunnel de vente">
    <meta name="author" content="CmaChanX à travers Islam ABIBOU">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ico.css">
    <script type="text/javascript" src="js/countdown.js" defer></script>
    <title>Paiement CmaChanX
    </title>
	<link rel="icon" type="image/png" href="img/richard.png"/>
</head>
<body>
    <p class="titre">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cum obcaecati rem ut beatae? Architecto, necessitatibus sapiente! Beatae nostrum reprehenderit consequatur at doloribus saepe, facere, blanditiis, sunt eos obcaecati provident.
    </p>

<section class="horloge" id="countdown" data-time="05 Mar 2022 14:14:00 +0000">
    <div class="decompte">
        <span class="decompte_header">
            5000 Fcfa au lui de <s>10000F cfa</s>
        </span>
        <div class="contenuh">
            <h4><span id="jour"></span><br>
            Jours
            </h4>
            <h4 id="point">:</h4>

            <h4><span id="heure"></span><br>
            Heures
            </h4>
            
            <h4 id="point">:</h4>

            <h4><span id="minute"></span><br>
            Minutes</h4>
            
            <h4 id="point">:</h4>

            <h4><span id="seconde"></span><br>
            Secondes
            </h4>
            
        </div>
    </div>
</section>

    <div class="container">
        <div class="card">
            <div class="contenu">
                <h2>Paiement par paypal ou carte banquaire</h2>
                <p>
                    <u>Nom produit : </u>
                    <strong>Formation manychat</strong><br>

                    <hr><br>

                    Brève description :
                    <span style="color: rgb(143, 132, 201);">Apprendre a créer son propre chatbot Messenger (robot)</span><br>

                    <hr><br>

                    <u>Le montant à payer est : </u>
                    <strong>$ 9.27</strong>
                </p> 
                <div id="paypal-button-container"></div>
            </div>
        </div>
        <div class="card">
            <div class="contenu">
                <h2>Paiement par MTN Mobile Money ou Moov money</h2>
                <p>
                    <u>Nom produit : </u>
                    <strong>Formation manychat</strong><br>

                    <hr><br>

                    Brève description :
                    <span style="color: rgb(143, 132, 201);">Apprendre a créer son propre chatbot Messenger (robot)</span><br>

                    <hr><br>

                    <u>Le montant à payer est : </u>
                    <strong>$ 9.27</strong>
                </p>
                <a href="mtn.php">Passer au paiement</a>
            </div>
        </div>
        <div class="card">
            <div class="contenu">
                <h2>Paiement avec cryptomonnaie (BTC, PM...)</h2>
                <p>
                    <u>Nom produit : </u>
                    <strong>Formation manychat</strong><br>

                    <hr><br>

                    Brève description :
                    <span style="color: rgb(143, 132, 201);">Apprendre a créer son propre chatbot Messenger (robot)</span><br>

                    <hr><br>

                    <u>Le montant à payer est : </u>
                    <strong>$ 9.27</strong>
                </p>
                <a href="crypto.php">Passer au paiement</a>
            </div>
        </div>
    </div>

    <div class="social">
        <a href="https://m.me/117183593523567" class="icon-facebook fab"></a>
        <a href="https://wa.me/22991666126?texte=Salut" class="icon-instagram fab"></a>
        <a href="https://wa.me/22991666126?texte=Salut" class="icon-whatsapp fab"></a>
        <a href="mailto:support@cmachanx.com" class="icon-envelop fab"></a>
        <a href="tel:+22999275766" class="icon-phone fab"></a>
    </div>
    
    

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fab99640a68960861bddd0d/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <script src="https://www.paypal.com/sdk/js?client-id=AWBg8IYaHJJhAbTMCMITyNmNkCv1636cEMycmBP8Cn808REBXpsV-s3tUXbimZw9A63JMJ8d2Nlkna-U&currency=EUR" data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
        paypal.Buttons({
            style: {
            shape: 'pill',
            color: 'blue',
            layout: 'vertical',
            label: 'checkout',
            
            },

            createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{"description":"Payement de la formation en chatbot","amount":{"currency_code":"EUR","value":7.62}}]
            });
            },

            onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
            },

            onError: function(err) {
            console.log(err);
            }
        }).render('#paypal-button-container');
        }
        initPayPalButton();
    </script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1
        });
    </script>
</body>
</html>