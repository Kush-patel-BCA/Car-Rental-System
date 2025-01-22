<div class="col-sm-12 d-none" id="payment-card">
    <div class="card mx-auto">
        <p class="heading">PAYMENT DETAILS</p>
        <form class="card-details" id="payment-form">
            <div class="form-group mb-0">
                <p class="text-warning mb-0">Card Number</p>
                <input type="text" name="cno" placeholder="1234 5678 9012 3457" size="17" id="cno" maxlength="19"
                    onkeypress="return (event.charCode > 47 && 
	event.charCode < 58)">
                <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
            </div>

            <div class="form-group">
                <p class="text-warning mb-0">Cardholder's Name</p> <input type="text" id="cardName" name="cardName"
                    placeholder="Name" style="text-transform:uppercase">
            </div>
            <div class="form-group pt-2">
                <div class="row d-flex" id="payment">
                    <div class="col-sm-4">
                        <p class="text-warning mb-0">Expiration</p>
                        <input type="text" name="exp" placeholder="MM/YYYY" size="7" id="exp" onkeyup maxlength="5"
                            onkeypress="return (event.charCode > 47 && 
	event.charCode < 58)" required>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-warning mb-0">Cvv</p>
                        <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3"
                            maxlength="3" onkeypress="return (event.charCode > 47 && 
	event.charCode < 58)">
                    </div>
                    <div class="col-sm-5 pt-0">
                        <button type="submit" class="btn btn-primary"><i
                                class="fas fa-arrow-right px-3 py-2"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
// Card Nubmer
function addSpaces(inputString) {
    let stringWithoutSpaces = inputString.replace(/\s/g, '');

    let formattedString = '';
    for (let i = 0; i < stringWithoutSpaces.length; i++) {
        formattedString += stringWithoutSpaces[i];
        if ((i + 1) % 4 === 0 && i + 1 !== stringWithoutSpaces.length) {
            formattedString += ' ';
        }
    }

    return formattedString;
}

document.getElementById('cno').addEventListener('input', function() {
    let inputValue = this.value;
    let formattedValue = addSpaces(inputValue);
    this.value = formattedValue;
});
// Exp Date 
document.getElementById("exp").addEventListener("input", function(e) {
    let input = e.target.value
    if (input.length == 2) {
        e.target.value = input + `/`
    }
})
document.getElementById("exp").addEventListener("keydown", function(e) {
    if (event.key === 'Backspace') {
        let input = e.target.value
        if (input.length == 3)
            e.target.value = input.slice(0, -1)
    }
})
</script>