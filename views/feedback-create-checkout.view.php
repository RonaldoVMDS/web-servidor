<div class="pagamento" action="checkout.php?acao=pagar" method="POST" name="pagamento">

    <div class='card-wrapper' style="margin-top: 100px;"></div>
    <form method="POST" action="/" style="margin-left: 470px; margin-top: 20px">
        <input type="hidden" id="bandeira" name="bandeira" value="" required/>
        <input type="text" name="number" id="number" placeholder="Número do Cartão" class="mw-100 input h" style="margin-right: 10px;" required>
        <input type="text" name="name" id="name" placeholder="Seu nome" class="mw-100 input h" required/>
        <div class="flex">
            <input type="text" name="expiry" id="expiry" placeholder="MM/YYYY" class="input w-50" required/>
            <input type="text" name="cvc" name="cvc" class="input w-50" placeholder="CVC" required/>
        </div>
        <button class="btn btn-primary my-2" type="submit" name="pagar">Realizar Pagamento</button>
    </form>
</div>