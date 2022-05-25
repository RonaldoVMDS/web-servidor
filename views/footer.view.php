</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/card/2.5.0/card.js"></script>
<script>
    // Documentação do JS em https://github.com/jessepollak/card
    var card = new Card({
        form: 'form',
        container: '.card-wrapper',
        //width: 200, 
        formatting: true,
        messages: {
            validDate: '',
            monthYear: 'mês / ano',
        },
        placeholders: {
            name: 'Nome Completo',
        },
        masks: {
            cardNumber: ''
        }
    });
    document.querySelector('#number').addEventListener('keydown', function() {
        let bandeira = document.querySelector('.jp-card').classList;
        document.querySelector('#bandeira').value = bandeira[bandeira.length - 2].substring(8);
    });
</script>
</body>
</html>