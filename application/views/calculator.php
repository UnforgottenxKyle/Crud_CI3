<?php $this->load->view('template/header');?>
<?php $this->load->view('template/navbar');?>

<section class="calcu-section">
        <section class="calcu" style="border: 2px solid black;">
            <h3 class="text-center">CALCULATOR</h3>
        <input type="text" id="display" class="form-control text-center mb-3" style="height: 80px; font-size: 40px; "readonly>
                <table class="table table-bordered h-75 rounded">
                    
                    <tr>
                        <td><button style="background: #a21925; border: none; border-radius: 4px; color: white; " id="clear">AC</button></td>
                        <td><button class="btn btn-secondary" id="del">DEL</button></td>
                        <td><button class="btn btn-secondary" id="0">0</button></td>
                        <td><button class="btn btn-secondary" id="devide">/</button></td>
                    <tr>
                        <td><button class="btn btn-secondary" id="1">1</button></td>
                        <td><button class="btn btn-secondary" id="2">2</button></td>
                        <td><button class="btn btn-secondary" id="3">3</button></td>
                        <td><button class="btn btn-secondary" id="multiply">*</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-secondary" id="4">4</button></td>
                        <td><button class="btn btn-secondary" id="5">5</button></td>
                        <td><button class="btn btn-secondary" id="6">6</button></td>
                        <td><button class="btn btn-secondary" id="add">+</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-secondary" id="7">7</button></td>
                        <td><button class="btn btn-secondary" id="8">8</button></td>
                        <td><button class="btn btn-secondary" id="9">9</button></td>
                        <td><button class="btn btn-secondary" id="subtract">-</button></td>
                    </tr>
                    <tr>
                        <td colspan="3"><button class="btn btn-secondary" id="equals">=</button>
                        <td><button class="btn btn-secondary" id="mod">%</button></td>
                    </td>
                    </tr>
                </table>
        </section>
    </section>

    <?php $this->load->view('template/footer');?>
    <?php $this->load->view('template/footer');?>