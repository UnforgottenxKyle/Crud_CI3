
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let display = $('#display');
            let currentInput = '';
            let operator = '';
            let firstOperand = '';

            $('button').click(function() {
                let buttonValue = $(this).text();

                if (buttonValue >= '0' && buttonValue <= '9') {
                    currentInput += buttonValue;
                    display.val(currentInput);
                } else if (buttonValue === 'AC') {
                    currentInput = '';
                    operator = '';
                    firstOperand = '';
                    display.val('');
                } else if (buttonValue === 'DEL') {
                    currentInput = currentInput.slice(0, -1);
                    display.val(currentInput);
                } else if (buttonValue === '=') {
                    if (operator && firstOperand !== '' && currentInput !== '') {
                        let result;
                        if (operator == '+') {
                            result = parseFloat(firstOperand) + parseFloat(currentInput);
                        } else if (operator == '-') {
                            result = parseFloat(firstOperand) - parseFloat(currentInput);
                        } else if (operator == '*') {
                            result = parseFloat(firstOperand) * parseFloat(currentInput);
                        } else if (operator == '/') {
                            result = parseFloat(firstOperand) / parseFloat(currentInput);
                        } else if (operator == '%') {
                            result = parseFloat(firstOperand) % parseFloat(currentInput);
                        }
                        display.val(result);
                        currentInput = result;
                        operator = '';
                        firstOperand = '';
                    }
                } else {
                    if (currentInput !== '') {
                        firstOperand = currentInput;
                        currentInput = '';
                        operator = buttonValue;
                    }
                }
            });
        });
    </script>
</body>
</html>

